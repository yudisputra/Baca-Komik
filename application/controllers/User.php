<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profile_model');
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['daftar'] = $this->home_model->daftar();
		$this->load->view('user/u_dashboard',$data);
	}


	public function profile()
	{
		$session_data = $this->session->userdata('logged_in');
   		$id = $session_data['iduser'];
		$data["profile"] = $this->profile_model->getProfile($id);
		$data["favorit"] = $this->profile_model->getFavorite($id);
		// $data["subscribe"]=$this->profile_model->getFavorite();
		$this->load->view('user/u_profile',$data);
	}

	public function update($id)
		{
			$this->load->helper('url','form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('nickname', 'Nickname', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('tanggalLahir', 'Tanggal Lahir', 'trim|required');


			if ($this->form_validation->run()==false) {
				$data['profil']=$this->profile_model->whereID($id);
				$this->load->view('user/u_updatedata',$data);
			}else{
				$this->profile_model->updateProfil($id);
				$this->load->view('user/u_dashboard');
			}
		}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */