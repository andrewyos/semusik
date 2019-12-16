<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/store');
        
    }

}

/* End of file Store.php */
?>