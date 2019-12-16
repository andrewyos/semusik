<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') != true) {
            redirect(base_url('Login'), 'refresh');
        }
    }


	public function index()
	{
		$data['konten']="admin";
		$this->load->model('Admin_model');
		$data['data_admin']=$this->Admin_model->get_admin();

		$this->load->view('admin',$data);
	}


	public function simpan_admin()
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
			$this->load->model('Admin_model', 'admin');
			$masuk=$this->admin->masuk_db();
			if($masuk==true){
				$this->session->set_flashdata('pesan', 'sukses masuk');
			} else{
				$this->session->set_flashdata('pesan', 'gagal masuk');
			}
			redirect(base_url('index.php/Admin'), 'refresh');
		}
		else{
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/Admin'), 'refresh');
		}
	}


	public function get_detail_admin($id_admin='')
		{
			$this->load->model('admin_model');
			$data_detail=$this->Admin_model->detail_admin($id_admin);
			echo json_encode($data_detail);
		}


	public function update_admin()
		{
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('id_admin', 'id_admin', 'trim|required');
			
			if ($this->form_validation->run() == FALSE ){
				$this->session->set_flashdata('pesan', validation_errors());
				redirect(base_url('index.php/Admin'), 'refresh');
			} else{
				$this->load->model('admin_model');
				$proses_update=$this->admin_model->update_admin();
				if ($proses_update) {
					$this->session->set_flashdata('pesan', 'sukses update');
				}
				else {
					$this->session->set_flashdata('pesan', 'gagal update');
				}
				redirect(base_url('index.php/Admin'), 'refresh');
			} 
		}


	public function hapus_admin($id_admin)
	{
		$this->load->model('Admin_model');
		$this->Admin_model->hapus_admin($id_admin);
		redirect(base_url('index.php/Admin'), 'refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */