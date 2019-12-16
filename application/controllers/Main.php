<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') != true) {
            redirect(base_url('Login'), 'refresh');
        }
    }
    
    public function index()
    {
        $data['data'] = $this->db->get('barang')->result_array();
        $this->load->view('welcome_message', $data);
    }

}

/* End of file Controllername.php */

?>