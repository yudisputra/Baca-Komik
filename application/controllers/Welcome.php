<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function index()
	{
		$this->load->model('home_model');
		$data["komik"] = $this->home_model->index();
		$data["chapter"] = $this->home_model->mangaterbaru();
		$this->load->view('homepage',$data);
	}

	public function detail($id)
	{
		$this->load->model('home_model');
		$data["komik"] = $this->home_model->detail($id);
		$data["chapter"] = $this->home_model->chapterkomik($id);
		$this->load->view('homepagedetail',$data);
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function daftarManga()
	{
		$this->load->model('home_model');
		$data['daftar'] = $this->home_model->daftar();
		$this->load->view('daftarManga',$data);
	}

	public function chapterTerbaru()
	{
		$this->load->view('chapterTerbaru');
	}


}
