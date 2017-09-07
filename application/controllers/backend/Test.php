<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->helper('url');
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='test';
            $this->load->view('backend/Test',$data);
        }
    }
}

?>