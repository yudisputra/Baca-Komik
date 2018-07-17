<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('user/u_dashboard');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */