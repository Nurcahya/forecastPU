
    <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

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

     public function kamera() {
    $ksens =  $_GET['ksens'];
    $id=$this->datamodel->get_pos($ksens);
    $this->datamodel->update_kamera($id);
    return "Durasi kamera telah diupdate = 0";
    }


}
