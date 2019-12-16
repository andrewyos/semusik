<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_admin()
  	{
      $data_admin= $this->db->get('admin')->result();
      return $data_admin;
  	}


  	public function masuk_db()
  	{
    $data_admin=array(
      'nama'=>$this->input->post('nama'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
    $ql_masuk=$this->db->insert('admin', $data_admin);
    return $ql_masuk;
  	}


  	public function detail_admin($id_admin='')
  	{
  	return $this->db->where('id_admin', $id_admin)->get('Admin')->row();
  	}


  	public function update_admin()
  	{
    $dt_up_admin=array(
      'nama'=>$this->input->post('nama'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
  	return $this->db->where('id_admin',$this->input->post('id_admin'))->update('Admin', $dt_up_admin);
  	}


  	public function hapus_admin($id_admin)
  	{
    $this->db->where('id_admin', $id_admin);
     return $this->db->delete('Admin');
  	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */