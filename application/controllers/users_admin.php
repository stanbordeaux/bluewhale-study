<?php

class Users_admin extends Controller
{
	// Protected or private properties
	protected $_template;
	
	// Constructor
	public function __construct()
	{
		parent::Controller();
			
		// Load needed models, libraries, helpers and language files
		$this->load->model('users_model');
        $this->lang->load('users', 'english');
	}
		
	public function manage_users()
	{
        if($this->quickauth->logged_in())
        {
            $data['users'] = $this->users_model->get_users();
            $data['main_content'] = '/dashboard/users_list';
            $this->load->view('/dashboard/dashboard_templ', $data);
        }
    else
    {
        redirect('bws/index', 'refresh');        
    }	
 }
    
    function view_usertracking()
    {
         if ($this->quickauth->logged_in())
         {
            $this->load->library('pagination');
            
            $config['base_url'] = base_url().'index.php/users_admin/view_usertracking';
            $config['total_rows'] = $this->db->count_all('usertracking');
            $config['per_page'] = '10';
            $config['first_link'] = "First";
            
            $config['last_link'] = "Last";
            
            $config['full_tag_open'] = "<p>";
            $config['full_tag_close'] = "</p>";

            $this->pagination->initialize($config);

            $data['userstracked'] = $this->users_model->get_userstracked($config['per_page'],$this->uri->segment(3));
            $data['main_content'] = '/dashboard/view_usertracking';
            $this->load->view('/dashboard/dashboard_templ', $data);
         }
    }
    

	public function edit($id = null)
	{
	   if($this->quickauth->logged_in())
       {
		if ($id == null)
		{
			$id = $this->input->post('id');
		}
		
		$this->form_validation->set_rules('username', 'lang:form_username', 'max_length[50]|xss_clean');
		$this->form_validation->set_rules('email', 'lang:form_email', 'required|valid_email');
						
		$this->form_validation->set_error_delimiters('', '<br />');
			
		$data['user'] = $this->users_model->get_user($id);
		$this->validation->username 	= $data['user']['username'];
		$this->validation->email 		= $data['user']['email'];
		$this->validation->level	 	= $data['user']['group_id'];
			
		if ($this->form_validation->run() == TRUE)
		{
			$this->users->edit_user($id);
			$this->session->set_flashdata('message', 'successfully_edited');

			redirect('users/manage_users', 'refresh');
		}

		$data['main_content'] = 'dashboard/users_edit';
			
		$this->load->view('dashboard/dashboard_templ', $data);
       } 
       else
       {
            redirect('bws/index', 'refresh');
       }
	}

	public function delete($id = null)
	{
	   if($this->quickaut->logged_in())
       {
            $this->users->delete_user($id);
            $this->session->set_flashdata('message', lang('successfully_deleted'));
            redirect('/users/manage_users', 'refresh');
       }
       else
       {
            redirect('bws/index', 'refresh');
       }
        
	}
    
    public function profile()
	{
		$this->load->language('users', 'english' );
		
		if ($this->quickauth->logged_in())
		
		$id = $this->session->userdata('user_id');
		$this->form_validation->set_rules('password', 'lang:form_password', 'matches[password_retype]');
		$this->form_validation->set_rules('email', 'lang:form_email', 'required|valid_email');
						
		$this->form_validation->set_error_delimiters('', '<br />');
				
		$data['user'] = $this->user->get_user($id);

		if ($this->form_validation->run() == TRUE)
		{
			$this->user->edit_profie($id);
				
			if ($this->input->post('password') != "")
			{
				$this->user->logout();
				redirect('user/login', 'refresh');
			}
				
			$this->session->set_flashdata('message', lang('successfully_edited'));
	
			redirect('user/profile', 'refresh');
		}
				
		$this->_template['page']	= 'user/profile';
	
		$this->system_library->load($this->_template['page'], $data);
	}
}

/* End of file users.php */
/* Location: ./application/modules/admin/controllers/users.php */