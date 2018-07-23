<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_user extends CI_Controller {

	public function index()
	{
		$this->load->view('user/u_daftar');
	}

	public function insert()
	{
			$this->load->model('user_daftar');
			$this->load->helper('url','form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required');
			if ($this->form_validation->run()==false) {
				redirect('login','refresh');
			}else{
					echo "<script>alert('Register Berhasil');
							window.location.href='".site_url()."login_user';</script>";
					$this->user_daftar->insert();
			}
	}

}

/* End of file Daftar_user.php */
/* Location: ./application/controllers/Daftar_user.php */