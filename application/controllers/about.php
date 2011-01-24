<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends Controller {

	function About()
	{
		parent::Controller();	
        $this->usertracking->track_this();
	}


	

/* The following set of functions control the pages under the ABOUT SECTION */
	    function about_us()
		{
		  
		  if ($this->uri->segment(3) == 'what_we_do')
          {
            $data['content_main'] = '/content/whatwedo_main';
          }
          else if ($this->uri->segment(3) == 'partners')
          {
            $data['content_main'] = '/content/partners_main';
          }
          else if ($this->uri->segment(3) == 'donations')
          {
            $data['content_main'] = '/content/donations_main';
          }
          else if ($this->uri->segment(3) == 'contact')
          {
            $data['content_main'] = '/content/contact_main';
          }
          else
          {
            $data['content_main'] = '/content/about_us_main';
          }
		   
			$data['res'] = $this->news_model->get_side_topic();
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data);
		}
        
        function about_pete()
        {
             $data['res'] = $this->news_model->get_side_topic();
            $data['content_main'] = '/content/about_us_pete';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data); 
        }
        
        function about_margie()
        {
             $data['res'] = $this->news_model->get_side_topic();
            $data['content_main'] = '/content/about_us_margie';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data); 
        }
		
		function what_we_do()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/whatwedo_main';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
		function partners()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/partners_main';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function donations()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/donations_main';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function contact()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/contact_main';
			$data['subnav_items'] = '/subnav/subnav_about';
            $data['rightcol_main'] = '/rightcol/rcol_about';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
	}
