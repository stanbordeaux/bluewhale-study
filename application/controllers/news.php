<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| NEWS Controller
| -------------------------------------------------------------------
| Basic news controller: 
| The associated database files:
| 
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
*/
class News extends Controller {

  function News()
  {
      parent::Controller();
      $this->load->model('news_model');
  }
  
  
  function get_news_topic()
  {
  
      $data['news_topic']=$this->news_model->get_all_news();
      
  	 // $this->load->view('/content/news_topic', $data);  
        $data['content_main'] = '/content/news_topic';
		$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data); 
  }
  function get_side_news_topic()
  {
           $data['res']=$this->news_model->get_side_topic();
      
  	 // $this->load->view('/content/news_topic', $data);  
      //  $data['content_main'] = '/content/news_side_topic';
		//	$data['subnav_items'] = '/subnav/subnav_community';
         //   $data['rightcol_main'] = '/rightcol/rcol_community';
		//	$this->load->view('/templates/bws_tpl_2col', $data);  
  }
  function get_news_content()
  {
    $this->db->where('id',$this->uri->segment(3));
	$data['query']=$this->db->get('news');
             
              $data['content_main'] = '/content/news_content';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data); 
  }
  
    function post_news()
    {
        if($this->quickauth->logged_in())
        {
            $data['main_content'] = '/dashboard/news_editor';
            $this->load->view('/dashboard/dashboard_templ', $data);
        }
        else
        {
            redirect('bws/index', 'refresh');        
        }
    }  
  
  function add_news()
  {
            $data['content_main'] = '/content/news_add';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data); 
  }
  function insert_news()
  {
            
            $data=$_POST;
            $this->news_model->insert_news($data);
            
            $data['res']=$this->news_model->get_topic();
      
  	 // $this->load->view('/content/news_topic', $data);  
        $data['content_main'] = '/content/news_topic';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data); 
            
  }
  
  //this comes from the posts_list table of the dashboard
  function update_news($id = NULL)
  {
    if($this->quickauth->logged_in())
    {
        if($id == NULL)
        {
            $id = $this->input->post('id');
            $this->news_model->update_news_item($id);
            redirect('news/manage_news', 'refresh');
            
        }
        
        
        
    }
    redirect('bws/index', 'refresh');
  }
    
    //Add news item to database called from dashboard news_editor.php
    function new_post()
    {
        if($this->quickauth->logged_in())
        {
            if($this->input->post('title') != "");
            {
                $this->news_model->add_news_item();
                redirect('news/manage_news', 'refresh');
            }
        }
        else
        {
            redirect('bws/index', 'refresh');
        }
        
    }
    
   //called from dashboard/navigation/manage news
    function manage_news()
    {
        if ($this->quickauth->logged_in())
        {
            $data['posts'] = $this->news_model->get_all_news();
            $data['main_content'] = '/dashboard/posts_list';
            $this->load->view('/dashboard/dashboard_templ', $data);
        }
        
    }
   
    function edit_post($id)
    {
         if ($this->quickauth->logged_in())
         {
            $data['posts'] = $this->news_model->get_news($id);
            $data['main_content'] = '/dashboard/edit_news';
            $this->load->view('/dashboard/dashboard_templ', $data);
         }
         else
         {
            echo "no data here<br />";
         }
         
    }
 
}  
/* End of file news.php */
/* Location: ./application/controllers/news.php */