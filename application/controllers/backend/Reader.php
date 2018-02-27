<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reader extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('datamodel');
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['pos2']=$this->datamodel->get_all_pos();
            $data['csv']=$this->datamodel->get_all_file();
            $data['link']='reader';
            $this->load->view('backend/Reader',$data);
        }
    }
    
    
        public function reader(){
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            redirect('backend/reader','refresh');
        }
    }
    
    public function file() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
           $this->load->view('backend/File');
        }
    }
   
}

?>