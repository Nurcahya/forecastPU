<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation','email','session'));
        $this->load->helper(array('text','url'));
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
//		    $this->load->model('adminmodel');
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='pos';
            $this->load->view('backend/Pos',$data);
        }
    }

    function grid() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $crud->set_table('pos');
        $crud->set_subject('Pos');
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }

}
