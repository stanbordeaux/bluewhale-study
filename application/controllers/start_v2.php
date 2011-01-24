<?php
 class  Start_v2 extends Controller 
 {
	function Start_v2()
	{
		parent::Controller();
        $this->load->library('quickauth');
	}
	

    function register()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
		$password = $this->input->post('password');
        
	
		// create a new user    
        $this->quickauth->register($username, $password, $email);
       	$this->quickauth->activate_user($username);   	
        $this->mainpage();
    }
    
    
       function assessme()
       {
    		$this->simpleloginsecure->logout();
    		if(!empty($_POST['user_email']) && !empty($_POST['user_pass']))
    		{
    			$this->simpleloginsecure->login($_POST['user_email'], $_POST['user_pass']);
    		}
       
    		if($this->session->userdata('logged_in'))
    		{
    			$this->mainpage();
    		} 
    	   else
    	   {
    			redirect('start_v2/login', 'refresh');
    		}
        }
	
	function mainpage()
	{
		
	
		$this->load->view('/users/success');
		
	}
    
    function register_frm()
    {
        $this->load->helper('form');
        $data['page_title'] = "BWS - Registration";
       	$data['content_main'] = '/users/register';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $this->load->view('/templates/bws_tpl_2col', $data);
    }

	function _check_status(){
	
		if(!$this->session->userdata('logged_in'))
		{	
			$this->load->helper('url');
			$this->assessme();		}
	}	


   function _checkme($username='', $password='')
   {
		if($username == 'fred' && $password == '12345')
		{
			return TRUE;                 
		}
		else
		{
			return FALSE;
		}
    }
	
	function _checksession(){
		$this->load->library('session');
		$this->load->helper('url');
		
		$status = $this->session->userdata('status');
		
		if( $status != 'OK')
		{ 
			redirect('start_v2/index');
		}
	}	
	
	function demo(){
		$this->_checksession();
		
		echo "Function code would be here";
	}	

	
    function login()
    {
        $this->load->helper('form');
        $data['page_title'] = "BWS - Login";
       	$data['content_main'] = '/users/login';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $this->load->view('/templates/bws_tpl_2col', $data);
        $this->load->helper('form');
        $this->load->view('/users/login', $data); 
    }	
    
}