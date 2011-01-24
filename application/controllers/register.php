<?php
class Register extends Controller {

  function Register()
  {
      parent::Controller();
      $this->load->model('register_model');
	  $this->load->helper('url');
      $this->load->helper('form');
  }
  function index()
	{
    $data1['content_main'] = '/content/thank_for_regist';
     $data1['subnav_items'] = '/subnav/subnav_community';
     $this->load->view('/templates/bws_tpl_2col', $data1);
         
	}
  function test_form()
  {
   // echo "hello";
    $this->register_model->test();
  }
  function insert_reg_record()
  {
     $data=$_POST;
     $this->register_model->insert_record($data); 
          
     $data1['content_main'] = '/content/thank_for_regist';
	 $data1['subnav_items'] = '/subnav/subnav_community';
     $data1['rightcol_main'] = '/rightcol/rcol_community';
	 $this->load->view('/templates/bws_tpl_2col', $data1);
				
     		
  }
  
  }