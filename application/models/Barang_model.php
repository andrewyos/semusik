<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function get_barang()
  	{
      $data_barang= $this->db->get('barang')->result();
      return $data_barang;
  	}


  	public function masuk_db()
  	{
    $data_barang=array(
      'nama_barang'=>$this->input->post('nama_barang'),
      'jumlah_barang'=>$this->input->post('jumlah_barang'),
      'tarif'=>$this->input->post('tarif'),
    );
    $ql_masuk=$this->db->insert('barang', $data_barang);
    return $ql_masuk;
  	}


  	public function detail_barang($id_barang='')
  	{
  	return $this->db->where('id_barang', $id_barang)->get('Barang')->row();
  	}


  	public function update_barang()
  	{
    $dt_up_barang=array(
      'nama_barang'=>$this->input->post('nama_barang'),
      'jumlah_barang'=>$this->input->post('jumlah_barang'),
      'tarif'=>$this->input->post('tarif'),
    );
  	return $this->db->where('id_barang',$this->input->post('id_barang'))->update('Barang', $dt_up_barang);
  	}


  	public function hapus_barang($id_barang)
  	{
    $this->db->where('id_barang', $id_barang);
     return $this->db->delete('Barang');
  	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */