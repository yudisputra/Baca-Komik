<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

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
            $this->load->view('admin/admin_komik');
        } else {
            redirect('admin','refresh');
        }
    }

    public function cekDb($password)
    {
      $this->load->model('user_login');
      $username = $this->input->post('username'); 
      $result = $this->user_login->login($username,$password);
      if($result){
        $session_array = array();
        foreach ($result as $key) {
            $session_array = array(
                'iduser'=>$key->id,
                'namauser'=>$key->username
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
            redirect('u_login','refresh');
        }

}

/* End of file Login_user.php */
/* Location: ./application/controllers/Login_user.php */