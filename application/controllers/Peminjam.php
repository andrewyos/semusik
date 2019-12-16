<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjam extends CI_Controller {

	public function index()
	{
		$data['konten']="home";
        $this->load->model('Peminjam_model');
        $data['data_peminjam']=$this->Peminjam_model->get_peminjam();

		$this->load->view('Peminjam', $data, FALSE);
	}


	public function simpan_peminjam()
	{
        $this->form_validation->set_rules('nama_peminjam', 'nama_peminjam', 'trim|required',
        array('required' => 'Nama Peminjam harus terisi'));
        $this->form_validation->set_rules('username', 'username', 'trim|required',
        array('required' => 'Username harus terisi'));
        $this->form_validation->set_rules('password', 'password', 'trim|required',
        array('required' => 'Password harus terisi'));
        $this->form_validation->set_rules('id_level', 'id_level', 'trim|required',
        array('required' => 'Level harus terisi'));
		if ($this->form_validation->run() == TRUE )
		{
			$this->load->model('Peminjam_model', 'peminjam');
			$masuk=$this->peminjam->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Peminjam'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Peminjam'), 'refresh');
		}
	}


	public function get_detail_peminjam($id_peminjam='')
		{
			$this->load->model('peminjam_model');
			$data_detail=$this->Peminjam_model->detail_peminjam($id_peminjam);
			echo json_encode($data_detail);
		}


	public function update_peminjam()
		{
			$this->form_validation->set_rules('nama_peminjam', 'nama_peminjam', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('id_level', 'id_level', 'trim|required');
			
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Peminjam'), 'refresh');
			} else{
				$this->load->model('peminjam_model');
				$proses_update=$this->peminjam_model->update_peminjam();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Peminjam'), 'refresh');
			} 
		}


		public function hapus_peminjam($id_peminjam)
	{
		$this->load->model('Peminjam_model');
		$this->Peminjam_model->hapus_peminjam($id_peminjam);
		redirect(base_url('index.php/Peminjam'), 'refresh');
	}

}

/* End of file Peminjam.php */
/* Location: ./application/controllers/Peminjam.php */