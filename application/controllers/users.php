<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author Stan Bordeaux
 * @copyright 2009
 */

/** 
This controller manages users login and session data
 **/
/** initialise the users controller **/
class Users extends Controller {
    
    function __construct()
    {
        parent::Controller();
    }
    
    /* This accepts the login data and runs any validation and if all is well logs user in */
    function validate_login()
    {
        //set up the form validation rules for the login form
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
        //$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required');
        
        //if form not valid send them back to the login screen
        if (!$this->form_validation->run())
        {
           redirect('users/login');
        }
        else
        {
            $redirect = '/users/dashboard';
            $this->session->set_flashdata('login', 'You have logged into the restricted area');
            $this->quickauth->login($username, $password, $redirect);
        }
     }  
      
    /* login function */
    function login()
    {
        if(!$this->quickauth->logged_in())
        {
            $data['page_title'] = "BWS - Admin Login";
           	$data['content_main'] = '/users/login';
            $data['rightcol_main'] = '/rightcol/rcol_community_report';
            $data['subnav_items'] = '/subnav/subnav_community';
            $this->load->view('/templates/bws_tpl_2col', $data);
        }
        else
        {
            redirect('users/dashboard', 'refresh');
        }
    }
    
    function dashboard()
    {
        if ($this->quickauth->logged_in()=== TRUE)
        {
            $username = $this->input->post('username');        
            $password = $this->input->post('password'); 
            $get_user = array(
                   'username'  => $username,
                   'email'     => 'stan.bordeaux@gmail.com',
                   'logged_in' => TRUE
                    );

            $this->session->set_userdata($get_user);
            $this->load->view('/forms/dashboard');
        }
        else
        {
            redirect('users/login', 'refresh');
        }
    }
    
    function logout()
    {
        
        $this->quickauth->logout();
        //$this->session->set_flashdata('logout', 'Thank you. You are now logged out!');
        $data['page_title'] = "BWS - Welcome";
           	$data['content_main'] = '/users/success';
            $data['rightcol_main'] = '/rightcol/rcol_community_report';
            $data['subnav_items'] = '/subnav/subnav_community';
            $this->load->view('/templates/bws_tpl_2col', $data);
        
    }

    /* Use this function to check status of user */
    function assessme()
    {
        //$this->quickauth->logout();
        if(!$this->quickauth->logged_in())
       {
            $this->login();
            //$this->session->set_flashdata('login', 'You have logged into the restricted area');
            //$this->quickauth->login($this->input->post('username'), $this->input->post('password'));
       }
       else
       {
            $this->session->set_flashdata('login', 'Already logged in');
            redirect('users/dashboard', 'refresh');
       }           
    }
    
    /** Set up the registration form for new users **/
    function register_frm()
    {
        $data['page_title'] = "BWS - Registration";
       	$data['content_main'] = '/users/register';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $this->load->view('/templates/bws_tpl_2col', $data);
    }
    
    /** Actual registration script **/
    function register()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        
	
		// create a new user    
        $this->quickauth->register($username, $password, $email);
       	$this->quickauth->activate_user($username);
        $this->session->set_flashdata('registered', 'Thank you for your interest.  You are now logged in');
        redirect('users/dashboard', 'refresh');   	
    }
   
   
    /*set up the login form */
    function mainpage()
    {
        if ($this->quickauth->logged_in())
        {
            $data['page_title'] = "BWS - Welcome";
           	$data['content_main'] = '/users/success';
            $data['rightcol_main'] = '/rightcol/rcol_community_report';
            $data['subnav_items'] = '/subnav/subnav_community';
            $this->load->view('/templates/bws_tpl_2col', $data);
        }
        else
        {
            redirect('users/login', 'refresh');
        }
        
    }
}


/* End of file users.php */
/* Location: ./system/application/controllers/users.php */