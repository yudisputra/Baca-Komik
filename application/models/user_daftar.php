<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_daftar extends CI_Model {

	public function insert()
		{
			$tglLahirinput = $this->input->post('tanggalLahir');
			$tglLahir = new DateTime($tglLahirinput);
			$date=$tglLahir->format('Y-m-d');

			$object =  array(
				'namauser' => $this->input->post('username'),
				'nickname' => $this->input->post('nickname'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'tanggalLahir' => $date,
				'password' => md5($this->input->post('password'))
			);
			$this->db->insert('user', $object);
		}

}

/* End of file user_daftar.php */
/* Location: ./application/models/user_daftar.php */