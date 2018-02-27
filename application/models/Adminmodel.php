<?php

class Adminmodel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function authmember() {
        $query = $this->db->query("select * from admin where username='" . $this->input->post('username') . "' AND password ='" . md5($this->input->post('password')) . "' LIMIT 1");
        if ($query->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function get_member_by_uname($uname) {
        $this->db->where('username', $uname);
        return $this->db->get('admin')->row_array();
    }
    
    function update_lastlog($uname) {
        date_default_timezone_set("Asia/Jakarta");
        $waktu = date("Y-m-d H:i:s");
        $data_log = array(
                'last_login'		=> $waktu
                );
        $this->db->where('username', $uname);
        $this->db->update('admin',$data_log);
    }
    
    function get_vid() {
        return $this->db->get('video')->result();
    }
    
    function simpan($username, $pass) {
        $data = array(
            'id_admin' => '',
            'username' => $username,
            'password' => md5($pass),
            'last_login'=> date("Y-m-d H:i:s"),
            'hak_akses' => "admin"
        );
        $this->db->insert('admin', $data);
    }

}
