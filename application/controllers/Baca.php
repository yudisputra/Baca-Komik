<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baca extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function komik($id,$ch)
	{
		$this->load->model('Baca_model');
		$data["komik"] = $this->Baca_model->getkom($id,$ch);
		$this->load->view('Bacamanga/Read',$data);
	}

}
