<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        
    }

    public function index()
    {
            $this->load->view('register');
            
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama_peminjam', 'nama_peminjam', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]');
        
        
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Login_model', 'lm');
            $masuk=$this->lm->register();
            
            if ($masuk == TRUE) {
                $this->session->set_flashdata('pesan', 'Sukses Daftar');    
            } else {
                $this->session->set_flashdata('pesan', 'Gagal Daftar');
            }
            redirect('Welcome','refresh');
                        
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect('Welcome','refresh');
            
        }
        
    }

}

/* End of file Register.php */


?>
