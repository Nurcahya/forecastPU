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

    function grid() {
        $crud = new grocery_CRUD();
//               $crud->set_theme('datatables');
        $id = $this->uri->segment(4);
        $crud->set_table('curah_hujan');
        $crud->set_subject('Curah Hujan');
        $crud->where('curah_hujan.id_pos',$id);
        $crud->set_relation('id_pos', 'pos', 'nama_pos');
        $crud->unset_add();
        $output = $crud->render();
        $this->load->view('backend/Grid', $output);
    }

    function grafik()
    {
        $id = $this->uri->segment(4);
        $data['namapos']=$this->datamodel->get_detailpos($id);
        $data['item']=$this->datamodel->get_ch($id);
        $this->load->view('backend/grafik/CH',$data);
    }

    function graflive(){
        $id = $this->uri->segment(4);
        $data['namapos']=$this->datamodel->get_detailpos($id);
        $data['item']=$this->datamodel->get_ch($id);
        $this->load->view('backend/grafik/live',$data);
    }
}

?>