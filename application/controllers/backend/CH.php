<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CH extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->load->model('datamodel');
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='user';
            $data['pos']=$this->datamodel->get_rf_pos();
            $data['namapos']=$this->datamodel->get_detailpos($_GET['id']);
            $this->load->view('backend/Ch',$data);
        }
    }
    
    public function CH(){
            if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            redirect('backend/CH?kat=10&id=1','refresh');
        }
    }

    function grid() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('curah_hujan');
        $crud->set_subject('Curah Hujan');
        $crud->where('curah_hujan.id_pos',$id);
        $crud->order_by('waktu','desc');
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->unset_add();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }
    
    	function createSess()
	{
		$sesi = array(
                'mulai' 	=> date('Y-m-d', strtotime($_POST['tglmulai'])),
                'akhir'		=> date('Y-m-d', strtotime($_POST['tglakhir']. "+1 days"))
						);
		$this->session->set_userdata($sesi);
		$id = $this->uri->segment(4);
		redirect('backend/CH/gridSearch/'.$id);
	}

    function gridSearch()
	{
		
		$crud = new grocery_CRUD();
                $id = $this->uri->segment(4);
                $crud->set_table('curah_hujan');
                $crud->set_subject('Curah Hujan');
		$crud->where('waktu >', $this->session->userdata('mulai'));
		$crud->where('waktu <', $this->session->userdata('akhir'));
                $crud->where('curah_hujan.id_pos',$id);
		$crud->set_relation('id_pos','pos','nama_pos');
                $crud->order_by('waktu','desc');
		$crud->unset_add();
		$output = $crud->render();
		$this->load->view('backend/Grid',$output);
	}
    

    function grid2() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('curah_hujan');
        $crud->columns(array('id_pos', 'total', 'nilai', 'waktu' ));
        $crud->callback_column('nilai',array($this,'_callback_nilai_harian'));
        $crud->callback_column('total',array($this,'_callback_total_harian'));
        $crud->callback_column('waktu',array($this,'_callback_waktu_harian'));
        $where = 'curah_hujan.id_pos = '.$id.' GROUP BY DATE( waktu ) ORDER BY waktu DESC';
        $crud->where($where);
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
//        $crud->unset_operations();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }

    function _callback_nilai_harian($value, $row){
        $this->load->database();
        $tgl = date("Y-m-d", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $sql = $this->db->query("select SUM( curah_hujan ) AS nilai, DATE( waktu ) as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and DATE(waktu)='".$tgl."' GROUP BY DATE( waktu )");
        $nilai = $sql->row_array(); 
        return number_format($nilai['nilai'],2);
    }
    
    function _callback_total_harian($value, $row){
        $this->load->database();
        $tgl = date("Y-m-d", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $sql = $this->db->query("select count( id_curah ) AS total, DATE( waktu ) as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and DATE(waktu)='".$tgl."' GROUP BY DATE( waktu )");
        $nilai = $sql->row_array(); 
        return $nilai['total']." data";
    }
    function _callback_waktu_harian($value, $row) {
        return date("d F Y", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
    }
    
    function grid3() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('curah_hujan');
        $crud->columns(array('id_pos', 'total', 'nilai', 'waktu' ));
        $crud->callback_column('nilai',array($this,'_callback_nilai_bulanan'));
        $crud->callback_column('total',array($this,'_callback_total_bulanan'));
        $crud->callback_column('waktu',array($this,'_callback_waktu_bulanan'));
        $where = 'curah_hujan.id_pos = '.$id.' GROUP BY month( waktu ) ORDER BY waktu DESC';
        $crud->where($where);
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
//        $crud->unset_operations();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }
    
    function _callback_nilai_bulanan($value, $row){
        $this->load->database();
        $tgl = date("m", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $sql = $this->db->query("select SUM( curah_hujan ) AS nilai, month( waktu ) as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and month(waktu)='".$tgl."' GROUP BY month( waktu )");
        $nilai = $sql->row_array(); 
        return number_format($nilai['nilai'],2);
    }
    
    function _callback_total_bulanan($value, $row){
        $this->load->database();
        $tgl = date("m", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $sql = $this->db->query("select count( id_curah ) AS total, month( waktu ) as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and month(waktu)='".$tgl."' GROUP BY month( waktu )");
        $nilai = $sql->row_array(); 
        return $nilai['total']." data";
    }
    function _callback_waktu_bulanan($value, $row) {
        return date("F Y", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
    }
    
     function grid4() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('curah_hujan');
        $crud->columns(array('id_pos', 'total', 'nilai', 'waktu' ));
        $crud->callback_column('nilai',array($this,'_callback_nilai_jam'));
        $crud->callback_column('total',array($this,'_callback_total_jam'));
        $crud->callback_column('waktu',array($this,'_callback_waktu_jam'));
        $where = 'curah_hujan.id_pos = '.$id.' GROUP BY HOUR(waktu), DATE( waktu ) ORDER BY waktu DESC';
        $crud->where($where);
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
//        $crud->unset_operations();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }

    function _callback_nilai_jam($value, $row){
        $this->load->database();
        $tgl = date("Y-m-d", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $jam = date("H", strtotime($row->waktu));
        $sql = $this->db->query("select SUM( curah_hujan ) AS nilai, waktu as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and DATE(waktu)='".$tgl."' and HOUR(waktu)='".$jam."' GROUP BY DATE( waktu )");
        $nilai = $sql->row_array(); 
        return number_format($nilai['nilai'],2);
    }
    
    function _callback_total_jam($value, $row){
        $this->load->database();
        $tgl = date("Y-m-d", strtotime(str_replace('/', '-', substr($row->waktu,0,10))));
        $jam = date("H", strtotime($row->waktu));
        $sql = $this->db->query("select count( id_curah ) AS total, waktu as tanggal FROM curah_hujan WHERE id_pos = '".$row->id_pos."' and DATE(waktu)='".$tgl."' and HOUR(waktu)='".$jam."' GROUP BY DATE( waktu )");
        $nilai = $sql->row_array(); 
        return $nilai['total']." data";
    }
    function _callback_waktu_jam($value, $row) {
        return date("d F Y H:00", strtotime($row->waktu));
    }
    
    function grafik()
    {
        $id = $this->uri->segment(4);
        $data['namapos']=$this->datamodel->get_detailpos($id);
        $data['item']=$this->datamodel->get_ch($id);
        $this->load->view('backend/grafik/CH',$data);
    }

    function graflive() {
        $id = $this->uri->segment(4);
        $data['namapos'] = $this->datamodel->get_detailpos($id);
        $this->load->view('backend/grafik/CHLive', $data);
    }
    
    
    function graflive2() {
        $id = $this->uri->segment(4);
        $data['namapos'] = $this->datamodel->get_detailpos($id);
        $this->load->view('backend/grafik/CHLive2', $data);
    }
    
    
    function graflive3() {
        $id = $this->uri->segment(4);
        $data['namapos'] = $this->datamodel->get_detailpos($id);
        $this->load->view('backend/grafik/CHLive3', $data);
    }
    
    function graflive4() {
        $id = $this->uri->segment(4);
        $data['namapos'] = $this->datamodel->get_detailpos($id);
        $this->load->view('backend/grafik/CHLive4', $data);
    }

    function datalive() {
        $id = $this->uri->segment(4);
        $item = $this->datamodel->get_ch($id);
        $arraydata = array();
        foreach ($item->result() as $itemnya) {
            $time = strtotime($itemnya->waktu . "+8hours") * 1000;
            $arraydata[] = [$time, floatval($itemnya->curah_hujan)];
        }
        echo(json_encode($arraydata));
    }
    
    
    function datalive2() {
        $id = $this->uri->segment(4);
        $item = $this->datamodel->get_CH_harian($id);
        $arraydata = array();
        foreach ($item->result() as $itemnya) {
            $time = strtotime($itemnya->waktu . "+8hours") * 1000;
            $arraydata[] = [$time, floatval($itemnya->nilai)];
        }
        echo(json_encode($arraydata));
    }
    
    
    function datalive3() {
        $id = $this->uri->segment(4);
        $item = $this->datamodel->get_CH_bulanan($id);
        $arraydata = array();
        foreach ($item->result() as $itemnya) {
            $time = strtotime($itemnya->waktu . "+8hours") * 1000;
            $arraydata[] = [$time, floatval($itemnya->nilai)];
        }
        echo(json_encode($arraydata));
    }
    
    
    function datalive4() {
        $id = $this->uri->segment(4);
        $item = $this->datamodel->get_CH_jam($id);
        $arraydata = array();
        foreach ($item->result() as $itemnya) {
            $time = strtotime($itemnya->waktu . "+8hours") * 1000;
            $arraydata[] = [$time, floatval($itemnya->nilai)];
        }
        echo(json_encode($arraydata));
    }

}

?>