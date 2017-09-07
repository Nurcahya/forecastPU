<?php

class Datamodel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_pos($ksens) {
        $this->db->where('id_sensor',$ksens);
	return $this->db->get('sensor')->row()->id_pos;
    }

    function insert_sensor($ksens, $waktu) {
        $data = array(
            'id_log_sensor' => '',
            'id_sensor' => $ksens,
            'waktu' => $waktu
        );
        $this->db->insert('logsensor', $data);
    }
    
    function insert_tma($id, $tma, $waktu) {
        $data = array(
            'id_tma'=>'',
            'id_pos' => $id,
            'tma' => $tma,
            'waktu' => $waktu
        );
        $this->db->insert('tma', $data);
    }
    
    function insert_video($id, $judul, $waktu) {
        $data = array(
            'id_video'=>'',
            'id_pos' => $id,
            'judul' => $judul,
            'waktu' => $waktu
        );
        $this->db->insert('video', $data);
    }
    
    function get_all_vid() {
        return $this->db->get('video')->result();
    }
    
    function get_all_pos() {
        return $this->db->get('pos')->result();
    }
    
    function get_pos_vid() {
        $this->db->select('video.id_pos, judul,waktu,nama_pos');
        $this->db->join('pos', 'pos.id_pos=video.id_pos');
        $this->db->order_by('video.id_pos', 'desc');
        return $this->db->get('video')->result();
    }
    
    function save_video($id, $judul) {
        $waktu = date("Y-m-d H:i:s");
        $data = array(
            'id_video'=>'',
            'id_pos' => $id,
            'judul' => $judul,
            'waktu' => $waktu
        );
        $this->db->insert('video', $data);
    }
    
}
