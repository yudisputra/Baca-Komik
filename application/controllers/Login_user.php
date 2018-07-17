<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_login');
    }

	public function index()
	{
		$this->load->view('user/u_login');	
	}

	public function cekLogin()
    {
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('namauser', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/u_login');
        } else {
            redirect('welcome','refresh');
            //redirect('user','refresh');
        }
    }

    public function cekDb($password)
    {
      $username = $this->input->post('namauser'); 
      $result = $this->user_login->login($username,$password);
      if($result){
        $session_array = array();
        foreach ($result as $key) {
            $session_array = array(
                'iduser'=>$key->iduser,
                'namauser'=>$key->namauser
                );
            $this->session->set_userdata('logged_in',$session_array);
            }
            return true;
        }else{
            $this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
            return false;
        }
    }

    public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('welcome','refresh');
        }

}

/* End of file Login_user.php */
/* Location: ./application/controllers/Login_user.php */