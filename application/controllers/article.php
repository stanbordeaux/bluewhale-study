<?php
class Article extends Controller {

  function Article()
  {
      parent::Controller();
      $this->load->helper('form');
	  $this->load->helper('url');
	  $this->load->model('articlemodel');
	  $this->load->database();

  }
	
  function index()
	{
  	  //default method, gets data from model
  	  $data['title'] = "Form Title";
  	  $data['heading'] = "Form Title";
     	  
	  $data['content_main'] = '/admin/articleview';
		$data['subnav_items'] = '/subnav/subnav_bare';
	   $data['res']=$this->articlemodel->get_all_form();
		$this->load->view('/templates/bws_tpl_1col', $data); 
	}
	
	function addarticle()
	{
		  //form for adding an entry';
		  $data['title'] = "Add Details";
		  $data['heading'] = "Add Details";
		  $data['content_main'] = "/admin/articleaddview";
		  $data['subnav_items'] = '/subnav/subnav_bare';
		  $this->load->view('/templates/bws_tpl_1col', $data);
	}
	 
	 function insertemp()
	{
      $data=$_POST;
      $data=$_POST;
      //print_r($data);
      //if using helper
      //$data=$this->input->post();
      //send the data to the insertemp function in the model
      $this->articlemodel->insertemp($data);
      //after insert, redirect back to main page
      //header('Location: http://localhost/CI2/index.php/article/index');
      //using url helper is easier, ie
      //redirect('blog/index');
 }
}
?>
