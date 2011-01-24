<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| SIGHTINGS Controller
| -------------------------------------------------------------------
| Basic Sightings controller: 
| The associated database files:
|
| 
| -------------------------------------------------------------------
| Instructions
| -------------------------------------------------------------------
*/

/**
 * @author Stan Bordeaux 6336485
 * 
 * @copyright 19/11/2009
 */

class Sightings extends Controller
{
	function Sightings()
	{
		parent::Controller();	
        $this->usertracking->track_this();
	}
    
 
    /*This section sets up the comnmunity links function */      
	function community()
	{
	   if ($this->uri->segment(3) == 'report_sighting')
       {
            $data['content_main'] = '/sightings/report_sighting_map';
       }
       else if ($this->uri->segment(3) == 'sighting_archive')
       {
            $data['content_main'] = '/sightings/previous_sight_map';
       }
       else if ($this->uri->segment(3) == 'get_news_topic')
       {
           $data['news_topic'] = $this->news_model->get_all_news();
           $data['content_main'] = '/content/news_topic';
       }
       else
       {
            $data['content_main'] = '/sightings/report_sighting_map';
       }
       
       
        $data['lat_lng'] = $this->sightings_m->get_lat_lng();
	    $data['incidentalId'] = $this->sightings_m->get_incidental_id();
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
	}
	
	
    
	//If a form has been submitted better insert the data in the table
	function add_sighting()
	{
		//If post data exists we better add it to the database
		if ($this->input->post('reportType'))
		{
            $this->load->library('email');
            
			$this->sightings_m->add_lat_lng();
            $config['protocol'] = 'smpt';
            //$config['mailpath'] = '/usr/sbin/sendmail';
            //$config['charset'] = 'iso-8859-1';
            $config['smpt_host'] = 'mail.stanbordeaux.com';
            $config['smpt_user'] = 'sta49431';
            $config['smpt_pass'] = 'b00nyb0rd053';
    
            $this->email->initialize($config);
            
            $this->email->from('admin@stanbordeaux.com', 'Admin');
            $this->email->to('stan.bordeaux@gmail.com');
            //$this->email->cc('another@another-example.com');
            //$this->email->bcc('them@their-example.com');
            
            $this->email->subject('Sighting Posted');
            $this->email->message('Somebody sent us something.');
            
            $this->email->send();            
		}
        redirect('sightings/new_sighting', 'refresh');

	}
    
    function get_all_sightings()
    {
        if($this->session->userdata('logged_in'))
        {
            $data['sightings'] = $this->sightings_m->get_sightings();
            
        }
    }
    
    //this is the form for land based sightings
    function get_land_form()
    {
        $data['incidentalId'] = $this->sightings_m->get_incidental_id();
        $data['content_main'] = '/forms/land_sight_frm';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
    }
    
    //this is the form for vessel based sightings
    function get_vessel_form()
    {
        $data['incidentalId'] = $this->sightings_m->get_incidental_id();
        $data['content_main'] = '/forms/vessel_sight_frm';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
    }
    
    //this presents the map of previous sightings
    function sighting_archive()
    {
        $data['lat_lng'] = $this->sightings_m->get_lat_lng();
        $data['incidentalId'] = $this->sightings_m->get_incidental_id();
        $data['content_main'] = '/sightings/previous_sight_map';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
        
    }
	//View the latest 3 whale sightings
	function latest_sighting()
	{
        $data[ 'lat_lng'] = $this->sightings_m->get_lat_lng();
        $data['incidentalId'] = $this->sightings_m->get_incidental_id();
	    $data['content_main'] = '/sightings/previous_sight_map';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
	}

	//this is the new sighting 
	function new_sighting()
	{
        $data[ 'lat_lng'] = $this->sightings_m->get_lat_lng();
        $data['incidentalId'] = $this->sightings_m->get_incidental_id();
        $data['content_main'] = '/sightings/add_sightings_map';
        $data['subnav_items'] = '/subnav/subnav_community';
        $data['rightcol_main'] = '/rightcol/rcol_community_report';
        $data['metaname'] = 'viewport';
        $data['metacontent'] = 'initial-scale=1.0, user-scalable=no';
    	$this->load->view('/templates/bws_tpl_2col', $data);
	}
	

    function validate_sightings()
    {
        if ($this->quickauth->logged_in())
        {
            $data['sightings'] = $this->sightings_m->get_all_incidental();
            $data['main_content'] = '/dashboard/validate_sightings';
            $this->load->view('/dashboard/dashboard_templ', $data);
        }
    }
    
    
    public function edit_sighting($id = null)
	{
		if ($id == null)
		{
			$id = $this->input->post('indidentalId');
		}

		
        /**we could set xss_clean for one of the validation rules directly here as in 
		*$this->form_validation->set_rules('reportType', 'Report Type', 'max_length[10]|xss_clean');
        *but the global setting for xss_clean has been enabled in the config
        */
        $this->form_validation->set_rules('reportType', 'Report Type', 'max_length[10]');
		$this->form_validation->set_rules('validated', 'validated', 'required|min_length[1]|max_length[3]');
						
		$this->form_validation->set_error_delimiters('', '<br />');
			
		$data['sighting'] = $this->sightings_m->get_sighting_id($id);
		$this->validation->reportType 	= $data['sighting']['reportType'];
		$this->validation->validated 	= $data['sighting']['validated'];
			
		if ($this->form_validation->run() == TRUE)
		{
			$this->sightings_m->edit_sighting($id);
			$this->session->set_flashdata('message', 'successfully_edited');

			redirect('sightings/validate_sightings', 'refresh');
		}

		$data['main_content'] = 'dashboard/validate_sightings';
			
		$this->load->view('dashboard/dashboard_templ', $data);
	}
    
    function drop_sighting($id = null)
    {
        $this->db->where('id', $id);
			
		$this->db->delete('incidental');
    }
    
	//Load incidental sightings into table for Admin to validate
	function inc_sightings_valid()
	{
		$data['res']=$this->sightings_m->get_inc_sightings();
        $data['content_main'] = '/admin/admin_inc_sightings_valid';
        $data['subnav_items'] = '/subnav/subnav_bare';

        $this->load->view('/templates/bws_tpl_1col', $data);
	}
	
	function inc_edit_sighting()
	{
		$data['content_main'] = '/admin/edit_sighting';
		$data['subnav_items'] = '/subnav/subnav_bare';
		$data['query']=$this->sightings_m->get_sighting();
		$this->load->view('/templates/bws_tpl_1col', $data);
	}
	
	function update_sighting()
	{
		$data=$_POST;
		$this->empsmodel->updateemp($data);
		redirect('emps/employees', 'refresh');
	}
	
	function delete_sighting()
	{
		$this->sightings_m->delete_sighting();
		redirect('sightings/inc_sightings_valid');
	}
 }
/* End of file sightings.php */
/* Location: ./system/application/controllers/sightings.php */