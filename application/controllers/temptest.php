<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Temptest extends Controller {

	function temptest()
	{
		parent::Controller();	
        $this->load->library('template');
        
	}


	
	//This is the basic home page 
	function index()
	{
        $this->template->render();
	}

			
/* The following set of functions control the pages under the RESEARCH SECTION */
			
    function research()
    {
        if ($this->uri->segment(3) == 'methods')
        {
            $data['content_main'] = '/content/methods_main';
        }
        else if ($this->uri->segment(3) == 'bonney_blue')
        {
            $data['content_main'] = '/content/bonney_blue_main';
        }
        else
        {
            $data['content_main'] = 'content/methods_main';
        }
          
        $data['res'] = $this->news_model->get_side_topic();
        $data['subnav_items'] = '/subnav/subnav_research';
        $data['rightcol_main'] = '/rightcol/rcol_research';
        $this->load->view('/templates/bws_tpl_2col', $data);
    }
		
		
		
		function articles()
		{
		 $data['res'] = $this->news_model->get_side_topic();
        	$data['content_main'] = '/content/articles_main';
			$data['subnav_items'] = '/subnav/subnav_research';
            $data['rightcol_main'] = '/rightcol/rcol_research';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function publications()
		{
            $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/publications_main';
			$data['subnav_items'] = '/subnav/subnav_research';
            $data['rightcol_main'] = '/rightcol/rcol_research';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function sightings_archive()
		{
			$data['content_main'] = '/content/sightings_archive_main';
			$data['subnav_items'] = '/subnav/subnav_research';
            $data['rightcol_main'] = '/rightcol/rcol_research';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
	
		
		function research_summary()
			{
				 $data['res'] = $this->news_model->get_side_topic();
                $data['content_main'] = '/content/research_summary_main';
				$data['subnav_items'] = '/subnav/subnav_research';
                $data['rightcol_main'] = '/rightcol/rcol_research';
				$this->load->view('/templates/bws_tpl_2col', $data);
			}

		function collaborations()
		{
			 $data['res'] = $this->news_model->get_side_topic();
            $data['content_main'] = '/content/collaborations_main';
			$data['subnav_items'] = '/subnav/subnav_research';
            $data['rightcol_main'] = '/rightcol/rcol_research';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
        
        
  
        
/* The following set of functions control the pages under the COMMUNITY SECTION */
		function news()
		{
			
            $data['content_main'] = '/content/news_main';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
        
        function blue_blog()
		{
			
			anchor('http://bluewhalestudy.org/blueblog/');
			
		}
		
		function join_us()
		{
			$data['content_main'] = '/content/join_us_main';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function fieldtrips_and_workshops()
		{
			$data['content_main'] = '/content/fieldtrips_and_workshops_main';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}

		function photo_id_catalogue()
		{
			$data['content_main'] = '/content/photo_id_catalogue_main';
			$data['subnav_items'] = '/subnav/subnav_community';
            $data['rightcol_main'] = '/rightcol/rcol_community';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
/* The following set of functions control the pages under the BLUE WHALE INFO SECTION */
		
		function quick_facts()
		{
			 $data['res'] = $this->news_model->get_side_topic();
            $data['content_main'] = '/content/quick_facts_main';
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
		function bw_info()
		{
		  if ($this->uri->segment(3) == 'long_range_movements')
          {
            $data['content_main'] = '/content/long_range_movements_main';
          }
          else if ($this->uri->segment(3) == 'feeding')
          {
            $data['content_main'] = '/content/feeding_main';
          }
          else if ($this->uri->segment(3) == 'habitat')
          {
            $data['content_main'] = '/content/habitat_main';
          }
          else
          {
            $data['content_main'] = '/content/long_range_movements_main';
          }
             $data['res'] = $this->news_model->get_side_topic();
			
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
			function feeding()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/feeding_main';
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
			function habitat()
		{
		   $data['res'] = $this->news_model->get_side_topic();
			$data['content_main'] = '/content/habitat_main';
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
			function bluewhale_sounds()
		{
			 $data['res'] = $this->news_model->get_side_topic();
            $data['content_main'] = '/content/bluewhale_sounds_main';
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}	
			
			function where_do_they_go()
		{
		 $data['res'] = $this->news_model->get_side_topic();
        	$data['content_main'] = '/content/where_they_go_main';
			$data['subnav_items'] = '/subnav/subnav_bwinfo';
            $data['rightcol_main'] = '/rightcol/rcol_bwinfo';
			$this->load->view('/templates/bws_tpl_2col', $data);
			
		}
		
/* The following set of functions control the pages under the GALLERY SECTION */
		
			function image_collection()
		{
			
            //$data['res']=$this->Gallery_m->get_images();
            //$data['numrows']=$this->gallery_m->get_num_rows();
            $data['content_main'] = '/content/image_collection_temp';
			$data['subnav_items'] = '/subnav/subnav_bare';
            $data['rightcol_main'] = '/rightcol/rcol_gallery';
			$this->load->view('/templates/bws_tpl_2col', $data);
			$this->load->view('/content/gallery_header');
		}		
		
/*Any Footer functions*/

            function terms()
            {
                $data['content_main'] = '/content/terms';
                $data['subnav_items'] = '/subnav/subnav_bare';
                $this->load->view('/templates/bws_tpl_1col', $data);
            }        
        
/*This section sets up the mapping function */      
        		function sightings_map()
			{
				$data['content_main'] = '/sightings/sightings_map';
                $data['subnav_items'] = '/subnav/subnav_community';
                $data['metaname'] = 'viewport';
                $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
				$this->load->view('/templates/bws_tpl_2col', $data);
			}
			
/*Admin Login section*/
				function admin_login()
				{
					$data['content_main'] = '/content/admin_login';
                    $data['subnav_items'] = '/subnav/subnav_bare';
					$this->load->view('/templates/bws_tpl_1col', $data);
				}
                
                function admin_dshbd()
                {
                    //login - post input - dshbd function
                    //get user posted data
                   
                    //admin model - ...?
                    
                    //send user posted data to dashbd view
                    //check posted data for XSS hacks
                   // $data=$this->input->xss_clean($data);
                    //check posted data exists and run through XSS filter
                   // $username= $this->input->post('admin_username', TRUE);
                    //$pwd = $this->input->post('admin_pwd', TRUE);
                    //start session
                   // $this->session;
                     //quickauth - check valid user...?
                    //$this->quickauth->activate_user($data);
                    $data['content_main'] = '/admin/admin_tmp_dshbd';
                      $data['subnav_items'] = '/subnav/subnav_bare';
                    $this->load->view('/templates/bws_tpl_1col', $data);
                }


	function add_sighting()
	{
		
		if (isset($_POST['fname']))
		{
		  //echo "data sent<br />";
			$this->Sightings_m->add_lat_lng();
            $this->session->set_flashdata('message', 'Something happened');
            
			//redirect('mapapp/index/', 'refresh');
		}

	}			
}	


/* End of file Bws.php */
/* Location: ./system/application/controllersBws.php */