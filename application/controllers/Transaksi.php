<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('cart');
	}
	

	public function index()
	{
		$data['konten']="transaksi";
		$this->load->model('Transaksi_model');
		$data['data_transaksi']=$this->Transaksi_model->get_transaksi();

		$this->load->view('transaksi',$data);
		
	}

	public function clear()
	{
		$id = $this->db->get_where('peminjam', ['nama_peminjam' => $_SESSION['username']])->result_array();
		foreach ($this->cart->contents() as $d) {
			$data = [
				'id_peminjam' => $id[0]['id_peminjam'],
				'id_barang' => $d['id'],
				'status' => "Belum Dibayar",
				'harga' => $d['subtotal'],
			];

			$this->db->insert('transaksi', $data);
		}
		$this->cart->destroy();
		
		redirect('main','refresh');
		
	}

	public function checkOut()
	{
		redirect('transaksi/index','refresh');
	}


	public function simpan_transaksi()
	{
        $this->form_validation->set_rules('id_peminjam', 'id_peminjam', 'trim|required',
        array('required' => 'ID Peminjam harus terisi'));
        $this->form_validation->set_rules('id_barang', 'id_barang', 'trim|required',
        array('required' => 'ID Barang harus terisi'));
        $this->form_validation->set_rules('bukti_transfer', 'bukti_transfer', 'trim|required',
        array('required' => 'Bukti Transfer harus terisi'));
        $this->form_validation->set_rules('status', 'status', 'trim|required',
        array('required' => 'Status harus terisi'));
        
		if ($this->form_validation->run() == TRUE )
		{
			$this->load->model('Transaksi_model', 'transaksi');
			$masuk=$this->transaksi->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Transaksi'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Transaksi'), 'refresh');
		}
	}

	public function addCart()
	{
		$data = array(
			'id'      => $this->input->post('id_barang'),
			'qty'     => $this->input->post('qty'),
			'price'   => $this->input->post('tarif'),
			'name'    => $this->input->post('nama_barang'),
		);
	
		$this->cart->insert($data);
	}

	public function get_detail_transaksi($id_transaksi='')
		{
			$this->load->model('transaksi_model');
			$data_detail=$this->Transaksi_model->detail_transaksi($id_transaksi);
			echo json_encode($data_detail);
		}


	public function update_transaksi()
		{
		$this->form_validation->set_rules('id_peminjam', 'id_peminjam', 'trim|required');
        $this->form_validation->set_rules('id_barang', 'jumlah_barang', 'trim|required');
        $this->form_validation->set_rules('bukti_transfer', 'bukti_transfer', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');
			
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Transaksi'), 'refresh');
			} else{
				$this->load->model('transaksi_model');
				$proses_update=$this->transaksi_model->update_transaksi();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Transaksi'), 'refresh');
			} 
		}


	public function hapus_transaksi($id_transaksi)
	{
		$this->load->model('Transaksi_model');
		$this->Transaksi_model->hapus_transaksi($id_transaksi);
		redirect(base_url('index.php/Transaksi'), 'refresh');
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */