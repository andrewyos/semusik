<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['konten']="barang";
		$this->load->model('Barang_model');
		$data['data_barang']=$this->Barang_model->get_barang();

		$this->load->view('barang',$data);
	}


	public function simpan_barang()
	{
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required',
        array('required' => 'Nama Barang Peminjam harus terisi'));
        $this->form_validation->set_rules('jumlah_barang', 'jumlah_barang', 'trim|required',
        array('required' => 'Jumlah Barang harus terisi'));
        $this->form_validation->set_rules('tarif', 'tarif', 'trim|required',
        array('required' => 'Tarif harus terisi'));
        
		if ($this->form_validation->run() == TRUE )
		{
			$this->load->model('Barang_model', 'barang');
			$masuk=$this->barang->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Barang'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Barang'), 'refresh');
		}
	}


	public function get_detail_barang($id_barang='')
		{
			$this->load->model('barang_model');
			$data_detail=$this->Barang_model->detail_barang($id_barang);
			echo json_encode($data_detail);
		}


	public function update_barang()
		{
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
        $this->form_validation->set_rules('jumlah_barang', 'jumlah_barang', 'trim|required');
        $this->form_validation->set_rules('tarif', 'tarif', 'trim|required');
			
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Barang'), 'refresh');
			} else{
				$this->load->model('barang_model');
				$proses_update=$this->barang_model->update_admin();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Barang'), 'refresh');
			} 
		}


	public function hapus_barang($id_barang)
	{
		$this->load->model('Barang_model');
		$this->Barang_model->hapus_barang($id_barang);
		redirect(base_url('index.php/Barang'), 'refresh');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */