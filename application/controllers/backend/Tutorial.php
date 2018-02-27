<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tutorial extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url'));
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='tutorial';
            $this->load->view('backend/Tutorial',$data);
        }
    }
    
    
    
        public function tutorial(){
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            redirect('backend/tutorial','refresh');
        }
    }
}
?>