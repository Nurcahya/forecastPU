<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation','email','session'));
        $this->load->helper(array('text','url'));
        $this->load->model('adminmodel');
    }

    public function index() {

        $this->load->view('backend/Login');
    }

    public function ceklogin() {

        $auth = $this->adminmodel->authmember();
        if ($auth == TRUE) {
            $row = $this->adminmodel->get_member_by_uname($this->input->post('username'));
            $this->adminmodel->update_lastlog($this->input->post('username'));
            $sesi = array(
                'username' => $row['username'],
                'last_login' => $row['last_login'],
                'id_admin' => $row['id_admin'],
                'hak_akses' => $row['hak_akses']
            );
            $this->session->set_userdata($sesi);
            redirect('backend/dashboard');
        } else {

            $this->session->set_flashdata('error','<p>Username atau password salah !</p>');
            $sesi = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect(base_url());
        }
    }

    function logout() {
        $sesi = array(
            'username' => $this->session->userdata('username'),
            'last_login' => $this->session->userdata('last_login'),
            'id_admin' => $this->session->userdata('id_admin'),
            'hak_akses' => $this->session->userdata('hak_akses')
        );
        $this->session->unset_userdata($sesi);
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function registrasi()
    {
            $this->load->view('backend/registrasi');
    }
    
    function simpan(){
      $data = (array)json_decode(file_get_contents('php://input'));

                        //Simpan data ke mysql
   $val=array(
    'username' => $data['username'],
    'password' => $data['password'],
    'jk' => $data['jk'],
    'alamat' => $data['alamat']
   );
   
    $this->adminmodel->simpan($data['username'],$data['password']);
echo "<script type='text/javascript'>alert('wakokwao');</script>";
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */