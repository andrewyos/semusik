<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    public function get_transaksi()
    {
      $data_transaksi= $this->db->get('transaksi')->result();
      return $data_transaksi;
    }


    public function masuk_db()
    {
    $data_barang=array(
      'id_peminjam'=>$this->input->post('id_peminjam'),
      'id_barang'=>$this->input->post('id_barang'),
      'bukti_transfer'=>$this->input->post('bukti_transfer'),
      'status'=>$this->input->post('status'),
    );
    $ql_masuk=$this->db->insert('transaksi', $data_transaksi);
    return $ql_masuk;
    }


    public function detail_transaksi($id_transaksi='')
    {
    return $this->db->where('id_transaksi', $id_transaksi)->get('Transaksi')->row();
    }


    public function update_transaksi()
    {
    $dt_up_barang=array(
      'id_peminjam'=>$this->input->post('id_peminjam'),
      'id_barang'=>$this->input->post('id_barang'),
      'bukti_transfer'=>$this->input->post('bukti_transfer'),
      'status'=>$this->input->post('status'),
    );
    return $this->db->where('id_transaksi',$this->input->post('id_transaksi'))->update('Transaksi', $dt_up_transaksi);
    }


    public function hapus_transaksi($id_transaksi)
    {
    $this->db->where('id_transaksi', $id_transaksi);
     return $this->db->delete('Transaksi');
    }

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */