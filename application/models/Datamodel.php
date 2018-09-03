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
    
    function get_latest_post(){
        $query=$this->db->query("SELECT * FROM logsensor a INNER JOIN ( SELECT *, MAX(waktu) max_date FROM logsensor INNER JOIN pos WHERE logsensor.id_sensor=pos.id_pos GROUP BY id_pos ) b ON a.id_sensor= b.id_pos AND a.waktu = b.max_date ORDER BY `a`.`id_sensor` ASC ");
        return $query;
    }
    
    function get_latest_tma_map(){
        $query=$this->db->query("SELECT * FROM tma a INNER JOIN ( SELECT *, MAX(waktu) max_date FROM tma INNER JOIN pos USING (id_pos) GROUP BY id_pos ) b ON a.id_pos= b.id_pos AND a.waktu = b.max_date INNER JOIN batas WHERE a.id_pos=batas.id_pos ORDER BY `a`.`id_pos` ASC ");
        return $query;
    }
    
    function get_jum_ch() {
        $query = $this->db->query("SELECT count(id_sensor) jum FROM `logsensor` INNER JOIN pos WHERE logsensor.id_sensor=pos.id_pos AND pos.tipe='RF'");
        return $query->row()->jum;
    }
    
    function get_jum_tma() {
        $query = $this->db->query("SELECT count(id_sensor) jum FROM `logsensor` INNER JOIN pos WHERE logsensor.id_sensor=pos.id_pos AND pos.tipe='WL'");
        return $query->row()->jum;
    }

    function get_TMA($id) {
        $query = $this->db->query("select * from (select * from tma where id_pos = '".$id."'  order by waktu desc) a order by a.waktu asc");
        return $query;
    }
    
    function get_TMA_harian($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_tma ) AS total, SUM( tma ) AS nilai, DATE( waktu ) as waktu FROM tma WHERE id_pos =  '".$id."' GROUP BY DATE( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }

    function get_TMA_bulanan($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_tma ) AS total, SUM( tma ) AS nilai, DATE( waktu ) as waktu FROM tma WHERE id_pos =  '".$id."' GROUP BY MONTH( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }
    
    function get_TMA_jam($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_tma) AS total, SUM( tma ) AS nilai, waktu FROM tma WHERE id_pos =  '".$id."' GROUP BY HOUR( waktu ),date(waktu) order by waktu desc) x order by x.waktu asc");
        return $query;
    }
    
    function get_TD($id) {
        $query = $this->db->query("select * from (select * from turbidity where id_pos = '".$id."'  order by waktu desc) a order by a.waktu asc");
        return $query;
    }
    
    function get_TD_harian($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_turbidity ) AS total, SUM( nilai ) AS nilai, DATE( waktu ) as waktu FROM turbidity WHERE id_pos =  '".$id."' GROUP BY DATE( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }

    function get_TD_bulanan($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_turbidity ) AS total, SUM( nilai ) AS nilai, DATE( waktu ) as waktu FROM turbidity WHERE id_pos =  '".$id."' GROUP BY MONTH( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }

    function get_TD_jam($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_turbidity ) AS total, SUM( nilai ) AS nilai, waktu FROM turbidity WHERE id_pos =  '".$id."' GROUP BY HOUR( waktu ),date(waktu) order by waktu desc) x order by x.waktu asc");
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
    
    function get_CH_harian($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_curah ) AS total, SUM( curah_hujan ) AS nilai, DATE( waktu ) as waktu FROM curah_hujan WHERE id_pos =  '".$id."' GROUP BY DATE( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }

    function get_CH_bulanan($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_curah ) AS total, SUM( curah_hujan ) AS nilai, date( waktu ) as waktu FROM curah_hujan WHERE id_pos =  '".$id."' GROUP BY MONTH( waktu ) order by waktu desc) x order by x.waktu asc");
        return $query;
    }

    function get_CH_jam($id){
        $query = $this->db->query("SELECT * FROM (SELECT COUNT( id_curah ) AS total, SUM( curah_hujan ) AS nilai, waktu FROM curah_hujan WHERE id_pos =  '".$id."' GROUP BY HOUR( waktu ),date(waktu) order by waktu desc) x order by x.waktu asc");
        return $query;
    }
    
    function get_citra_cetak($id, $tanggal) {
      $query = $this->db->query("select * from citra inner join pos using (id_pos) where citra.id_pos = '".$id."' and date(waktu) = '".$tanggal."'  ");
       return $query->result();
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
    
    function insert_sensor2($ksens, $waktu, $teg) {
        $data = array(
            'id_log_sensor' => '',
            'id_sensor' => $ksens,
            'waktu' => $waktu,
            'tegangan' => $teg
        );
        $this->db->insert('logsensor', $data);
    }
       
    function insert_sensor3($ksens, $waktu, $teg, $kode) {
        $data = array(
            'id_log_sensor' => '',
            'id_sensor' => $ksens,
            'waktu' => $waktu,
            'tegangan' => $teg,
            'kode' => $kode
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
    
    function insert_td($id, $td, $waktu) {
        $data = array(
            'id_turbidity'=>'',
            'id_pos' => $id,
            'nilai' => $td,
            'waktu' => $waktu
        );
        $this->db->insert('turbidity', $data);
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
    
    function insert_citra($id, $nilai, $waktu) {
        $data = array(
            'id_citra'=>'',
            'id_pos' => $id,
            'nama_citra' => $nilai,
            'waktu' => $waktu
        );
        $this->db->insert('citra', $data);
    }
    
      
    function insert_file($id, $nilai, $waktu) {
        $data = array(
            'id_file'=>'',
            'id_pos' => $id,
            'nama_file' => $nilai,
            'waktu' => $waktu
        );
        $this->db->insert('file', $data);
    }
    
    function get_all_vid() {
        return $this->db->get('video')->result();
    }
    
    function get_all_pos() {
        return $this->db->get('pos')->result();
    }
    
    function get_all_file() {
        return $this->db->get('file')->result();
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
