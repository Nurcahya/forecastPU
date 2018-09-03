<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('text');
        $this->load->helper(array('form', 'url'));
        $this->load->model('servicemodel');
        $this->load->model('datamodel');
    }

    public function index() {
        $this->load->view('service/Show');
    }
    
    public function get_ch() {
        $item = $this->servicemodel->get_ch();
        foreach ($item->result() as $itemnya) {
//            $time = strtotime($itemnya->waktu . "+2hours") * 1000;
            $arraydata[] = floatval($itemnya->curah_hujan);
        }
        echo(json_encode($arraydata));
    }
    
    public function get_tma() {
        $item = $this->servicemodel->get_tma();
        foreach ($item->result() as $itemnya) {
//            $time = strtotime($itemnya->waktu . "+2hours") * 1000;
            $arraydata[] = floatval($itemnya->TMA);
        }
        echo(json_encode($arraydata));
    }
    
    public function get_citra() {
        $item = $this->servicemodel->get_citra();
        foreach ($item->result() as $itemnya) {
//            $time = strtotime($itemnya->waktu . "+2hours") * 1000;
            $arraydata[] = $itemnya->nama_citra;
        }
        echo(json_encode($arraydata));
    }

     public function insert_ch() {
        $nilai = $_GET['nilai'];
        $id = $_GET['id'];
        $waktu = date("Y-m-d H:i:s");
        $this->datamodel->insert_sensor($id,$waktu);
        $this->servicemodel->insert_ch($id,$nilai,$waktu);
    }
    
     public function insert_tma() {
        $nilai = $_GET['nilai'];
        $id = $_GET['id'];
        $waktu = date("Y-m-d H:i:s");
        $this->datamodel->insert_sensor($id,$waktu);
        $this->servicemodel->insert_tma($id,$nilai,$waktu);
    }
    
     public function insert_citra() {
        $nilai = $_GET['nilai'];
        $id = $_GET['id'];
        $waktu = date("Y-m-d H:i:s");
        $this->servicemodel->insert_citra($id,$nilai,$waktu);
    }
    
    public function date() {
        $waktu = date("Y-m-d H:i:s");
        echo $waktu;
    }

    public function CSV(){
        $this->load->view('service/CSV');        
    }

    public function insertCSV()
    {
        $ksens = $_POST['ksens'];
        $tipe = $_POST['tipe'];
        foreach ($_FILES['csv']['tmp_name'] as $f => $name) { 
            $file = fopen($_FILES["csv"]["tmp_name"][$f], 'r');
            $row = 1;
            if (($handle = $file) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    $row++;
                    $nama=$_FILES["csv"]["name"][$f];
                    $hari = substr($nama, 11, 2);
                    $bulan = substr($nama, 9, 2);
                    $tahun = substr($nama, 5, 4);
                    $jam = $data[0].":00";
                    $waktu = $tahun."-".$bulan."-".$hari." ".$jam;

                    if ($tipe == 'TMA'){
                    $nilai = $data[1];
                    $ks = $ksens;
                    $this->datamodel->insert_sensor($ks,$waktu);
                    $this->servicemodel->insert_tma($ks,$nilai,$waktu);
                    }

                    else if ($tipe == 'CH'){
                    $nilai = $data[1];
                    $ks = $ksens;
                    $this->datamodel->insert_sensor($ks,$waktu);
                    $this->servicemodel->insert_ch($ks,$nilai,$waktu);
                    }
                    // echo $ks." ".$nilai." ".$waktu;
                }
           // fclose($handle);
            }  
        } 
         redirect('service/csv');
    }       
}
