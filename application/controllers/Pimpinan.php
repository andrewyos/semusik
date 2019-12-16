<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

	public function index()
	{
		$data['konten']="pimpinan";
		$this->load->model('Pimpinan_model');
		$data['data_pimpinan']=$this->Pimpinan_model->get_pimpinan();

		$this->load->view('pimpinan',$data);
	}


	public function simpan_pimpinan()
	{
        $this->form_validation->set_rules('nama', 'nama', 'trim|required',
        array('required' => 'Nama Peminjam harus terisi'));
        $this->form_validation->set_rules('username', 'username', 'trim|required',
        array('required' => 'Username harus terisi'));
        $this->form_validation->set_rules('password', 'password', 'trim|required',
        array('required' => 'Password harus terisi'));
        $this->form_validation->set_rules('id_level', 'id_level', 'trim|required',
        array('required' => 'Level harus terisi'));
		if ($this->form_validation->run() == TRUE )
		{
			$this->load->model('Pimpinan_model', 'pimpinan');
			$masuk=$this->pimpinan->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Pimpinan'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Pimpinan'), 'refresh');
		}
	}


	public function get_detail_pimpinan($id_pimpinan='')
		{
			$this->load->model('pimpinan_model');
			$data_detail=$this->Pimpinan_model->detail_pimpinan($id_pimpinan);
			echo json_encode($data_detail);
		}


	public function update_pimpinan()
		{
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('id_level', 'id_level', 'trim|required');
			
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Pimpinan'), 'refresh');
			} else{
				$this->load->model('pimpinan_model');
				$proses_update=$this->pimpinan_model->update_admin();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Pimpinan'), 'refresh');
			} 
		}


	public function hapus_pimpinan($id_pimpinan)
	{
		$this->load->model('Pimpinan_model');
		$this->Pimpinan_model->hapus_pimpinan($id_pimpinan);
		redirect(base_url('index.php/Pimpinan'), 'refresh');
	}

}

/* End of file Pimpinan.php */
/* Location: ./application/controllers/Pimpinan.php */