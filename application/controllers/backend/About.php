<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url'));
    }

    public function index() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $data['link']='about';
            $this->load->view('backend/About',$data);
        }
    }

    public function email() {
        if ($this->session->userdata('username') == '') {
            redirect(base_url());
        } else {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'nurcahya.pradana@gmail.com', //isi dengan gmailmu!
                'smtp_pass' => 'Rarasat1', //isi dengan password gmailmu!
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('nurcahya.pradana@gmail.com', 'toto');
            $this->email->to('nurcahya.pradana@gmail.com'); //email tujuan. Isikan dengan emailmu!
            $this->email->subject('subjek');
            $this->email->message('Pesanannya kosoooong');
            if ($this->email->send()) {
                echo 'Email sent';
            } else {
                show_error($this->email->print_debugger());
            }
        }
    }

    public function email2() {
        $this->load->library("phpmailer_library");
        $objMail = $this->phpmailer_library->load();

        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host = "ssl://smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port = 465;                   // SMTP port to connect to GMail
        $mail->Username = "nurcahya.pradana@gmail.com";  // user email address
        $mail->Password = "Rarasat1";            // password in GMail//email address that receives the response
        $mail->AddAddress("nurcahya.pradana@gmail.com", "Name");
        $mail->SetFrom('nurcahya.pradana@yahoo.com', 'Toto');
        $mail->AddReplyTo('nurcahya.pradana@yahoo.com', 'Toto');
        $mail->Subject = "Message from  Contact form";
        $mail->Body = 'Halo haloooooooo';
        $mail->WordWrap = 50;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

    public function email3() {
        $this->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.mail.yahoo.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = 'nurcahya.pradana@yahoo.com';
        $config['smtp_pass'] = "Rarasat1";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from('nurcahya.pradana@yahoo.com', 'Blabla');
        $list = array('nurcahya.pradana@gmail.com');
        $this->email->to($list);
        $this->email->subject('This is an email test');
        $this->email->message('It is working. Great!');
        if ($this->email->send()) {
            echo 'Email sent';
        } else {
            show_error($this->email->print_debugger());
        }
    }

}

?>