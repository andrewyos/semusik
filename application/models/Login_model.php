<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_login()
    {
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $query = $this->db->where('username', $u)
                          ->where('password', $p)
                          ->get('peminjam');

        if ($this->db->affected_rows() > 0) {
            $data_login = $query->row();
            $data_session = array(
                           'username' => $data_login->username,
                           'id_level' => $data_login->id_level,
                           'logged_in' => TRUE
                            );
            $this->session->set_userdata($data_session);
            return TRUE;
        } else{
            return FALSE;
        }
    }
    
    public function register(){
        $usert = array('nama_peminjam' => $this->input->post('nama_peminjam'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'id_level' => '3' );
        
                return $this->db->insert('peminjam', $usert); 
        
        }
}
?>