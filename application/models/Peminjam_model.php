<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjam_model extends CI_Model {

	public function get_peminjam()
  	{
      $data_peminjam= $this->db->get('peminjam')->result();
      return $data_peminjam;
  	}


  	public function masuk_db()
  	{
    $data_peminjam=array(
      'nama_peminjam'=>$this->input->post('nama_peminjam'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
    $ql_masuk=$this->db->insert('peminjam', $data_peminjam);
    return $ql_masuk;
  	}


  	public function detail_peminjam($id_peminjam='')
  	{
  	return $this->db->where('id_peminjam', $id_peminjam)->get('Peminjam')->row();
  	}


  	public function update_peminjam()
  	{
    $dt_up_peminjam=array(
      'nama_peminjam'=>$this->input->post('nama_peminjam'),
      'username'=>$this->input->post('username'),
      'password'=>$this->input->post('password'),
      'id_level'=>$this->input->post('id_level'),
    );
  	return $this->db->where('id_peminjam',$this->input->post('id_peminjam'))->update('Peminjam', $dt_up_peminjam);
  	}

  	public function hapus_peminjam($id_peminjam)
  	{
    $this->db->where('id_peminjam', $id_peminjam);
     return $this->db->delete('Peminjam');
  	}

}

/* End of file Peminjam_model.php */
/* Location: ./application/models/Peminjam_model.php */