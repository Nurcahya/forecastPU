<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('text');
        $this->load->helper(array('form', 'url'));
        $this->load->model('datamodel');
        $this->output->set_header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        $this->output->set_header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', FALSE);
        $this->output->set_header('Pragma: no-cache');
    }

    public function index() {
        $this->load->view('backend/login');
    }

    public function TMA() {
    $nilai = $_GET['nilai'];
    $waktu = $_GET['waktu'];
    $ksens =  $_GET['ksens'];
    if(isset($_GET['teg'])&&isset($_GET['kode'])){
        $this->datamodel->insert_sensor3($ksens,$waktu,$_GET['teg'], $_GET['kode']);        
    } else if(isset($_GET['teg'])){
        $this->datamodel->insert_sensor2($ksens,$waktu,$_GET['teg']);
    } else {
        $this->datamodel->insert_sensor($ksens,$waktu);        
    }
    $id=$this->datamodel->get_pos($ksens);
    $_GET['kamera']=$this->datamodel->get_durasi($id);
    $this->datamodel->insert_tma($id,$nilai,$waktu);
//redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$this->multiRequest($url);
    $this->load->view('202',$_GET);
    }

     public function CH() {
    $nilai = $_GET['nilai'];
    $waktu = $_GET['waktu'];
    $ksens =  $_GET['ksens'];
    if(isset($_GET['teg'])&&isset($_GET['kode'])){
        $this->datamodel->insert_sensor3($ksens,$waktu,$_GET['teg'], $_GET['kode']);        
    } else if(isset($_GET['teg'])){
        $this->datamodel->insert_sensor2($ksens,$waktu,$_GET['teg']);
    } else {
        $this->datamodel->insert_sensor($ksens,$waktu);        
    }
    $id=$this->datamodel->get_pos($ksens);
    $_GET['kamera']=$this->datamodel->get_durasi($id);
    $this->datamodel->insert_ch($id,$nilai,$waktu);
//redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$this->multiRequest($url);
    $this->load->view('202',$_GET);
    }
    
    public function turbidity() {
    $nilai = $_GET['nilai'];
    $waktu = $_GET['waktu'];
    $ksens =  $_GET['ksens'];
    if(isset($_GET['teg'])&&isset($_GET['kode'])){
        $this->datamodel->insert_sensor3($ksens,$waktu,$_GET['teg'], $_GET['kode']);        
    } else if(isset($_GET['teg'])){
        $this->datamodel->insert_sensor2($ksens,$waktu,$_GET['teg']);
    } else {
        $this->datamodel->insert_sensor($ksens,$waktu);        
    }
    $id=$this->datamodel->get_pos($ksens);
    $_GET['kamera']=$this->datamodel->get_durasi($id);
    $this->datamodel->insert_td($id,$nilai,$waktu);
//redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//$this->multiRequest($url);
    $this->load->view('202',$_GET);
    }

     public function kamera() {
        $nilai = $_GET['nilai'];
        $waktu = $_GET['waktu'];
        $ksens =  $_GET['ksens'];
        $id=$ksens;
        $this->datamodel->insert_citra($id,$nilai,$waktu);
        $_GET['kamera']=$this->datamodel->get_durasi($id);
        $this->load->view('202',$_GET);
     }
     
     public function form(){
         $this->load->view('upload', array('error' => ' ' ));
     }
          
     public function file_form(){
         $this->load->view('upload_file', array('error' => ' ' ));
     }
     
      public function kamera_post() {
                $config['upload_path']          = './assets/uploads/citra/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1200;

                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('citra'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                }               
                $data['nilai'] = $data['upload_data']['file_name'];
                $data['waktu']= date("Y-m-d H:i:s");
                $data['ksens'] =  $_POST['ksens'];
                $id= $data['ksens'];
                $this->datamodel->insert_citra($id,$data['nilai'],$data['waktu']);
                $data['kamera']=$this->datamodel->get_durasi($id);
                $this->load->view('202',$data);         
     }
     
          
      public function file_post() {
                $config['upload_path']          = './assets/uploads/files/';
                $config['allowed_types']        = 'txt|xls|xlsx|csv';
                $config['max_size']             = 10000;

                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                }               
                $data['nilai'] = $data['upload_data']['file_name'];
                $data['waktu']= date("Y-m-d H:i:s");
                $data['ksens'] =  $_POST['ksens'];
                $id= $data['ksens'];
                $this->datamodel->insert_file($id,$data['nilai'],$data['waktu']);
                $data['kamera']=$this->datamodel->get_durasi($id);
                $this->load->view('202',$data);         
     }
}
