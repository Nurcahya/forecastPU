<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Citra extends CI_Controller {

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
            $data['link']='citra';
            $data['pos']=$this->datamodel->get_all_pos();
            $data['namapos']=$this->datamodel->get_detailpos($_GET['id']);
            $this->load->view('backend/Citra',$data);
        }
    }
    
        public function citra(){
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            redirect('backend/citra?id=1','refresh');
        }
    }
    
    public function cetak() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='citra';
            $data['pos']=$this->datamodel->get_detailpos($_POST['id']);
            $data['tanggal']=$_POST['waktu'];
            $data['citra']=$this->datamodel->get_citra_cetak($_POST['id'],$_POST['waktu']);
            $this->load->view('backend/Citracetak',$data);
//            print_r($data['citra']);
        }
    }
    

    function grid() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('citra');
        $crud->set_subject('Citra');
        $crud->columns('nama_citra','waktu');
        $crud->display_as('nama_citra','Tampilan Citra');
        $crud->where('citra.id_pos',$id);
        $crud->order_by('waktu','desc');
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->callback_column('nama_citra', array($this, '_thumbnail'));
        $crud->unset_add();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }

        function _thumbnail($value, $row) {
		$img = "<div><img id='myImg' style='width:100%; max-width:300px;' src='".base_url()."assets/uploads/citra/" . $value . "'  /></div>";
		return($img);
	}

}

?>