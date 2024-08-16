<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{	
	public function login()
	{
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$valid->set_rules('username','username','required');
		$valid->set_rules('password','password','required');
		if ($valid->run())
		{
			$this->logindata->Logindata($username,$password);
		}
		$data = array(
			'title' => 'Halaman Login',
		);
		$this->load->view('login', $data);
	}

	public function logout()
	{
		$this->logindata->logout();
	}

}



