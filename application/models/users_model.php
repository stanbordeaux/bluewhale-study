<?php

class Users_model extends Model
{
	// Protected or private properties
	protected $_table;
	
	// Constructor
	public function __construct()
	{
		parent::Model();
			
    }

	// Public methods
	public function get_users()
	{
		$this->db->select('id, username, email, registered, group_id, date_registered');
			
		$query = $this->db->get('users');
			
		if ($query->num_rows() > 0)
		{
			return $query->result_array();
		}
	}
	
	public function get_user($id)
	{
		$this->db->select('id, username, email, registered, group_id, date_registered');
		$this->db->where('id', $id);
			
		$query = $this->db->get('users', 1);
			
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
	}
	
    public function get_userstracked($num, $offset)
    {
        $this->db->select('id, session_id, user_identifier, request_uri, timestamp, client_ip, client_user_agent, referer_page');
        $query = $this->db->get('usertracking', $num, $offset);
        if($query->num_rows() > 0)
        {
            return $query->result_array();
        }
    }
    
    
	public function edit_user($id)
	{
		$data = array
					(
						'username' => $this->input->post('username'),
						'email' => $this->input->post('email'),
						'group_id' => $this->input->post('group_id')
					);
			
		$this->db->where('id', $id);
		$this->db->update('users', $data);
	}

	public function delete_user($id)
	{
		$this->db->where('id', $id);
			
		$this->db->delete('users');
	}
}

/* End of file users_model.php */
/* Location: ./application/modules/admin/models/users_model.php */