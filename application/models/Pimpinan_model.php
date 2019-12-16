<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan_model extends CI_Model {

	public function get_pimpinan()
  	{
      $data_pimpinan= $this->db->get('pimpinan')->result();
      return $data_pimpinan;
  	}


  	public function masuk_db()
  	{
    $data_pimpinan=array(
      'nama'=>$this->input->post('nama'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
    $ql_masuk=$this->db->insert('pimpinan', $data_pimpinan);
    return $ql_masuk;
  	}


  	public function detail_pimpinan($id_pimpinan='')
  	{
  	return $this->db->where('id_pimpinan', $id_pimpinan)->get('Pimpinan')->row();
  	}


  	public function update_pimpinan()
  	{
    $dt_up_admin=array(
      'nama'=>$this->input->post('nama'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
  	return $this->db->where('id_pimpinan',$this->input->post('id_pimpinan'))->update('Pimpinan', $dt_up_pimpinan);
  	}


  	public function hapus_pimpinan($id_pimpinan)
  	{
    $this->db->where('id_pimpinan', $id_pimpinan);
     return $this->db->delete('Pimpinan');
  	}

}

/* End of file Pimpinan_model.php */
/* Location: ./application/models/Pimpinan_model.php */