<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login_admin');
	}

	public function cekLogin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login_admin');
        } else {
            redirect('admin','refresh');
        }
    }

    public function cekDb($password)
    {
      $this->load->model('admin_login');
      $username = $this->input->post('username'); 
      $result = $this->admin_login->login($username,$password);
      if($result){
        $session_array = array();
        foreach ($result as $key) {
            $session_array = array(
                'id'=>$key->id,
                'username'=>$key->username
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
            redirect('login_admin','refresh');
        }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */