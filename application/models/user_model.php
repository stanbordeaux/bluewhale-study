<?php

class User_model extends Model
{
	// Protected or private properties
	protected $_table;
	
	// Constructor
	public function __construct()
	{
		parent::Model();
			
		$this->_table = $this->config->item('database_tables');
	}
	
	// Public methods
	public function get_user($username)
	{
	   	$this->db->select('group_id, username, email');
		$this->db->where('username', $username);
		$this->db->from('users', 1);
        $this->db->join('groups', 'groups.id = users.group_id');
        $query = $this->db->get();
			
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
	}
	
	public function get_user_by_nickname($nickname)
	{
		$this->db->select('id, username, email, group_id');
		$this->db->where('username', $nickname);
			
		$query = $this->db->get('users');
			
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
	}
	
	public function check_user($username, $password)
	{
		$this->db->select('id, username, group_id');
		$this->db->where('username', $username);
		$this->db->where('password', dohash($password, 'md5'));
		$this->db->where('group_id', '1');
			
		$query = $this->db->get('users');
			
		if ($query->num_rows() == 1)
		{
			$row = $query->row_array();
			
			return $row['id'];
		}
		else
		{
			return FALSE;
		}
	}
	
	public function check_wordpress_password($username, $password)
	{
		$this->db->select('wordpress_password');
		$this->db->where('username', $username);
		$this->db->where('wordpress_password IS NOT NULL');
		$this->db->where('status', '1');
		
		$query = $this->db->get($this->_table['users'], 1);
			
		if ($query->num_rows() == 1)
		{
			$row = $query->row_array();
			$wordpress_password = $row['wordpress_password'];
			
			$check_password = $this->phpass_library->CheckPassword($password, $wordpress_password);
				
			return $check_password;
		}
		else
		{
			return FALSE;
		}
	}

	public function verify_user($username, $password)
	{
		
		$this->db->select();
		$this->db->where('username', $username);
		$this->db->where('password', $password);
			
		$query = $this->db->get('users', 1);
			
		if ($query->num_rows() == 1)
		{
			$row = $query->row_array();

			$data = array
						(
							'user_id' => $row['id'],
							'username' => $row['username'],
							'group_id' => $row['group_id'],
                            'registered' => $row['registered'],
                            'date_registered' => $row['date_registered'],
							'logged_in' => TRUE
						);
				
			$this->session->set_userdata($data);
			
	}
		else
		{
			$this->session->set_flashdata('error', 'invalid_username');
		}
	}

	public function update_last_login()
	{
		$data = array
					(
						'last_login' => date('Y-m-d H:i:s')
					);

		$this->db->where('id', $this->session->userdata('user_id'));
		$this->db->update('users', $data);
	}

	public function logout()
	{
		$data = array
					(
						'user_id' => 0,
						'username' => 0,
                        'group_id' => 0,
						'logged_in' => FALSE
					);

		$this->session->sess_destroy();
		$this->session->unset_userdata($data);
	}
	
	public function validation_check($data)
	{
		$this->db->select('id');
		$this->db->where($data);
		
		$query = $this->db->get('users');
		
		if ($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	public function check_secret_key($key, $email)
	{
		$this->db->select('id');
		$this->db->where('secret_key', $key);
		$this->db->where('email', $email);
		
		$query = $this->db->get('users', 1);
			
		if ($query->num_rows() == 1)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function create_user()
	{
		$secret_key = dohash(uniqid() + time(), 'md5');
		
		$data = array
					(
						'username' => $this->input->post('username'),
						'password' => dohash($this->input->post('password'), 'md5'),
                        'email' => $this->input->post('email'),
						'registered' => date('Y-m-d H:i:s')
						);

		$this->db->insert('users', $data);
	}

	public function edit_profie($id)
	{
		$data = array
					(
						'email' => $this->input->post('email'),
					);
			
		if ($this->input->post('password') != "")
		{
			$data['password'] = dohash($this->input->post('password'), 'md5');
		}
			
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}
	
	public function forgotten_password()
	{
		$key = dohash(uniqid() + time(), 'md5');
		
		$data = array
					(
						'secret_key' => $key
					);
					
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('email', $this->input->post('email'));
		$this->db->update($this->_table['users'], $data);
		
		$this->send_secret_key($this->input->post('email'), $key, 'forgotten_password');
	}
	
	public function activate_account($key, $email)
	{
		$data = array
					(
						'secret_key' => '',
						'status' => '1'
					);

		$this->db->where('secret_key', $key);
		$this->db->where('email', $email);
		$this->db->update($this->_table['users'], $data);
	}
	
	public function reset_password($key, $email)
	{
		$new_password = random_string('alnum', 8);
		
		$data = array
					(
						'password' => dohash($new_password, 'md5'),
						'secret_key' => ''
					);

		$this->db->where('secret_key', $key);
		$this->db->where('email', $email);
		$this->db->update($this->_table['users'], $data);
		
		$this->send_new_password($email, $new_password);
	}
	
	// Private or protected methods	
	protected function send_secret_key($email, $key, $type = 'account_activation')
	{
		$this->load->library('email');
		
		if ($type == 'account_activation')
		{
			$activation_url = account_activation_url($email, $key);
			
			$email_subject = lang('account_activation_subject');;
			$email_body = lang('account_activation_body', array($activation_url, $activation_url));;
		}
		else if ($type == 'forgotten_password')
		{
			$activation_url = forgotten_password_url($email, $key);
			
			$email_subject = lang('forgotten_password_subject');
			$email_body = lang('forgotten_password_body', array($activation_url, $activation_url));
		}
		
		$this->email->from($this->system_library->settings['admin_email'], $this->system_library->settings['blog_title']);
		$this->email->to($email);
		$this->email->subject($email_subject);
		$this->email->message($email_body);
				
		$this->email->send();	
	}
	
	protected function send_new_password($email, $password)
	{
		$this->load->library('email');
		
		$login_url = site_url('user/login');
		
		$this->email->from($this->system_library->settings['admin_email'], $this->system_library->settings['blog_title']);
		$this->email->to($email);
				
		$this->email->subject(lang('new_password_subject'));
		$this->email->message(lang('new_password_body', array($password, $login_url)));
				
		$this->email->send();
	}
	
	protected function clean_secret_key($user_id)
	{
		$this->db->select('secret_key');
		$this->db->where('id', $user_id);
		
		$query = $this->db->get($this->_table['users'], 1);
		
		if ($query->num_rows() == 1)
		{
			$data = array
					(
						'secret_key' => ''
					);
					
			$this->db->where('id', $user_id);
			$this->db->update($this->_table['users'], $data);
		}
	}
}

/* End of file user_model.php */
/* Location: ./application/modules/user/models/user_model.php */