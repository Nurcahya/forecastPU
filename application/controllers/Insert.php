<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('text');
        $this->load->helper('url');
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
    $this->datamodel->insert_sensor($ksens,$waktu);
    $id=$this->datamodel->get_pos($ksens);
    $_GET['kamera']=$this->datamodel->get_durasi($id);
    $this->datamodel->insert_tma($id,$nilai,$waktu);
		//redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $this->multiRequest($url);
    $this->load->view('202',$_GET);
    }

     public function CH() {
    $nilai = $_GET['nilai'];
    $waktu = $_GET['waktu'];
    $ksens =  $_GET['ksens'];
    $this->datamodel->insert_sensor($ksens,$waktu);
    $id=$this->datamodel->get_pos($ksens);
    $_GET['kamera']=$this->datamodel->get_durasi($id);
    $this->datamodel->insert_ch($id,$nilai,$waktu);
        //redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $this->multiRequest($url);
    $this->load->view('202',$_GET);
    }

    public function video() {
    $judul = $_GET['judul'];
    $waktu = $_GET['waktu'];
    $ksens =  $_GET['ksens'];
    $_GET['nilai']=$_GET['judul'];
    $this->datamodel->insert_sensor($ksens,$waktu);
    $id=$this->datamodel->get_pos($ksens);
    $this->datamodel->insert_video($id,$judul,$waktu);
		//redirect('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $url[]=('http://monitoringbendungan.com/grab/tma?ksens='.$ksens.'&tma='.$ta.'&time='.$time.'');
//    $this->multiRequest($url);
    $this->load->view('202',$_GET);
    }

}
