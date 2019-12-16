<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        
    }
    public function index()
    {
        if ($this->session->userdata('logged_in') == FALSE) {
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            


        if ($this->form_validation->run() == TRUE)
        {
            if ($this->Login_model->cek_login() == TRUE) {
                redirect('Main');
            }
        
            else {
                $this->session->set_flashdata('notif', 'Periksa kembali username/password salah');
                redirect('Welcome','refresh');
            }
        }
            else{
                $this->session->set_flashdata('notif', validation_errors());
                redirect('Welcome','refresh');
                
            }
        }
    else{
        
        redirect('Main');
        
    }

    }


    public function logout()
    {
        
        $this->session->sess_destroy();
        redirect('Welcome','refresh');
        
    }

}

/* End of file Login.php */

?>