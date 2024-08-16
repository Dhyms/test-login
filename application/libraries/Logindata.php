<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Logindata
{ 
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function Logindata($username, $password)
	{
		$query = $this->CI->db->get_where('tbl_users', array('username' => $username, 'password' => $password));

		if ($query->num_rows() > 0)
		{
			$row 			= $this->CI->db->get_where('tbl_users', array('username' => $username, 'password' => $password));
			$users 			= $row->row();
			$id_users		= $users->id_users;
			$username	    = $users->username;

			$this->CI->session->set_userdata('users_id', $id_users);
			$this->CI->session->set_userdata('username', $username);
            foreach ($query->result() as $row)
            {
                if ($row->status == 1)
                {
                    redirect(base_url('dashboard'));
				}
            }    
		}else{
			$this->CI->session->set_flashdata('message_login_error', 'Login gagal, username and password salah');
			redirect(base_url('login'));
		}
	}

	public function ceklogin()
	{
		if ($this->CI->session->userdata('username') == '')
		{
			$this->CI->session->set_flashdata('message_login_error', 'Silakan login dulu');
			redirect(base_url('login'));
		}
	}
 
	public function logout()
	{
		$this->CI->session->unset_userdata('users_id');
		$this->CI->session->set_flashdata('message_login_success','Anda berhasil logout');
		redirect(base_url('login'));
	}
}

?>