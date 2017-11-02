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
    

    function get_durasi($id) {
        $this->db->where('id_pos',$id);
    return $this->db->get('kamera')->row()->durasi;
    }

    function get_TMA($id) {
        $query = $this->db->query("select * from (select * from TMA where id_pos = '".$id."'  order by waktu desc) a order by a.waktu asc");
        return $query;
    }

    function update_kamera($id){
        $data = array(
            'id_pos' => $id,
            'durasi' => 0
        );
        $this->db->where('id_pos', $id);
        $this->db->update('kamera', $data);
    }
    

    function get_CH($id) {
        $query = $this->db->query("select * from (select * from curah_hujan where id_pos = '".$id."'  order by waktu desc) a order by a.waktu asc");
        return $query;
    }

      function get_detailpos($id) {
        $this->db->where('id_pos',$id);
	return $this->db->get('pos')->row();
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

    function insert_ch($id, $ch, $waktu) {
        $data = array(
            'id_curah'=>'',
            'id_pos' => $id,
            'curah_hujan' => $ch,
            'waktu' => $waktu
        );
        $this->db->insert('curah_hujan', $data);
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

    function get_rf_pos() {
        $this->db->where('tipe','RF');
        return $this->db->get('pos')->result();
    }

    function get_wl_pos() {
        $this->db->where('tipe','WL');
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
