<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Video extends CI_Controller {

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
            $data['pos']=$this->datamodel->get_all_pos();
            $data['pos2']=$this->datamodel->get_all_pos();
            $data['vid']=$this->datamodel->get_all_vid();
            $data['posvid']=$this->datamodel->get_pos_vid();
            $data['link']='video';
            $this->load->view('backend/Video',$data);
        }
    }
    
    public function CH(){
            if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            redirect('backend/video','refresh');
        }
    }
    
    public function savevideo(){
    $idpos = $_POST['idpos'];   
   $namavideo = $_FILES['userfile']['name'];
    $this->datamodel->save_video($idpos,$namavideo);
    
    
    	$config['upload_path'] = './assets/video';
        $config['allowed_types'] = 'mp4|MP4';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
                        redirect('backend/video','refresh');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                        redirect('backend/video','refresh');
		}
//
//
//       $target_dir = base_url()."assets/video/";
//       $target_file = $target_dir . basename($_FILES["file"]["name"]);
//       $bendera = 1;
//       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//       echo $imageFileType;
//       if (file_exists($target_file)) {
//           echo "Maaf file sudah ada";
//           $bendera = 0;
//       }
//
//       if($imageFileType != "mp4" && $imageFileType != "MP4" ) {
//           echo "Maaf hanya format mp4 yang bisa diupload";
//           $bendera = 0;
//       }
//
//       if ($bendera == 0) {
//           echo "File anda tidak terupload.";
//
//       } else {
//           if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//               echo "File ". basename( $_FILES["file"]["name"]). " telah di upload.";
//           } else {
//               echo "Ada kesalahan saat upload";
//           }
//       }
}
}

?>