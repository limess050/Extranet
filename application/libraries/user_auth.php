<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_auth
{	
	function __construct()
	{
		$this->ci =& get_instance();
	}
	
	public function create_account($display_name, $email, $password, $timezone)
	{
		$password = hash('md5', $password);
		$activation_key = hash('md5', time());
		
		$insert = array(
			'display_name' => $display_name,
			'email' => $email,
			'password' => $password,
			'timezone' => $timezone,
			'created' => $this->mysql_datetime(),
			'last_ip' => $this->ci->input->ip_address(),
			'activation_key' => $activation_key
		);
		
		if ($this->ci->db->insert('users',$insert) === TRUE)
		{			
			$this->send_activation_email($password, $activation_key, $email);
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}	
	
	public function sign_in($email, $password)
	{
		$password = hash('md5', $password);
	
		$where = array(
			'email' => $email,
			'password' => $password
		);
	
		$this->ci->db->where($where); 
		$query = $this->ci->db->get('users');
		if ($query->num_rows() < 1)
		{
			$errors['wrong_password'] = 'This password does not match the email address.';
			$this->ci->errors = $errors;
			return FALSE;
		}
		
		$user = $query->row_array();
			
		if ($user['activated'] != 1)
		{
			//account not activated
			$errors['not_activated'] = 'This account has not been activated.';
			$this->ci->errors = $errors;
			return FALSE;
		}
			
		if ($user['banned'] == 1)
		{
			//account not activated
			$errors['banned'] = 'You have been banned from the game.';
			$this->ci->errors = $errors;
			return FALSE;
		}

		$update = array(
			'last_login' => $this->mysql_datetime(),
			'last_ip' => $this->ci->input->ip_address()
		);
		$where = array(
			'id' => $user['id']
		);
		$this->ci->db->where($where); 
		$this->ci->db->update('users',$update);
		
		$this->ci->session->set_userdata('user_id', $user['id']);
		$this->ci->session->set_userdata('timezone', $user['timezone']);
		$this->ci->session->set_userdata('timezone_offset', timezones($user['timezone']) * 60 *60);

		$this->ci->session->set_userdata('cash', $user['cash']);
		
		return TRUE;
	}
	
	public function display_name_check($display_name)
	{
		$result = $this->ci->db->get_where('users', array('display_name' => $display_name));

        if ($result->num_rows > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
	}
	
	public function email_check($email)
	{
		$result = $this->ci->db->get_where('users', array('email' => $email));

        if ($result->num_rows > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
	}
	
	private function send_activation_email($hash, $stamp, $email)
	{
		$this->ci->load->library('email');
	
		$this->ci->email->from('activation@superfightchallenge.com', 'Super Fight Challenge');
		$this->ci->email->to($email);

		$this->ci->email->subject('Super Fight Challenge - Activate Account');
		
		$message = site_url('menu/activate_account/'.$hash.'/'.$stamp);
		
		$this->ci->email->message($message);

		$this->ci->email->send();	
	}
	
	public function activate_account($hash, $stamp)
	{
		$where = array(
			'password' => $hash,
			'activation_key' => $stamp
		);
		
		$this->ci->db->where($where); 
		$query = $this->ci->db->get('users');
		
		if ($query->num_rows() != 1)
		{
			return FALSE;
		}
		else
		{
			$account = $query->row_array();	
			
			$where = array(
				'id' => $account['id']
			);
			
			$update = array(
				'activated' => 1,
				'activation_key' => ''
			);
		
			$this->ci->db->where($where); 
			if ($this->ci->db->update('users',$update) === TRUE)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
	}
	
	private function mysql_datetime()
	{
		$unix_time = time();
		$datetime = gmdate("Y-m-d H:i:s", $unix_time);
		
		return $datetime;	
	}	
	
	public function check_auth($auto_redirect = TRUE)
	{
		if ($this->ci->session->userdata('user_id')  === FALSE)
		{
			if ($auto_redirect === TRUE)
			{
				redirect('/menu/sign_in');
				die();
			}
			else
			{
				return FALSE;
			}
		}
	}	
	
	function browser_auth()
	{	
		$browser = $this->ci->agent->browser();
		$version = explode('.',$this->ci->agent->version());
		$version = $version[0];
		
		echo $browser;
		echo $version;
		
		/*
		if ($browser == 'Firefox')
		{
			if ($version < 4){
				redirect('menu/browser');
			}
		}
		else if ($browser == 'Chrome')
		{
			if ($version < 14){
				redirect('menu/browser');
			}
		}
		else if ($browser == 'Safari')
		{
			if ($version < 5){
				redirect('menu/browser');
			}
		}
		else 
		{
			redirect('menu/browser');
		}
		*/
	}
}

/* End of file Tank_auth.php */
/* Location: ./application/libraries/Tank_auth.php */