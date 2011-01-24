<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * @author Stan Bordeaux 6336485
 * 
 * @copyright 19/11/2009
 */

class Sightings_m extends Model {

    function __construct() {
        parent::Model();
    }
    
    //Add sightings data from users input
    
     /**
 * function add_sightCue()
 *      {
 *         $new_sightCue_id = $this->db->insert_id();
 *         if ($this->input->('sight_cue'))
 *         {
 *             foreach ($this->input->('sight_cue') as $value)
 *             {
 *                 $data = array('sighting_id'=>$new_sightCue_id, 
 *                               'sightCue_id'=>$value);
 *                 $this->db->insert('sightings_cues', $data);
 *             }
 *         }
 *      } 
 */
    
    //this gets the incidental sightings post data 
    function add_lat_lng()
 	{
        //Better grab all the post data and initialise
        $reportType = $this->input->post('reportType');
        $obDate = $this->input->post('obDate');
        $direction = $this->input->post('direction');
        $distance = $this->input->post('distance');
        $numWhale = $this->input->post('numWhale');
        $confidence = $this->input->post('confidence');
        $lenTime = $this->input->post('lenTime');
        $weather = $this->input->post('weather');
        $comments = $this->input->post('comments');
        $latObserver = $this->input->post('latObserver');
        $longObserver = $this->input->post('longObserver');
        $new_incidentalId = $this->input->post('new_sightId');
        $sea_state = $this->input->post('new_sightId');
        $swell = $this->input->post('swell');
        $behaviour = $this->input->post('behaviour');
        $oth_wild_feat = $this->input->post('oth_wild_feat');

        //Grab the sight cues and insert into sightings_cues : 
        //remember that sightCues is an array of multiple selections in the form
        //$sightCues = array();
        //$sightCues = $this->input->post('sight_cue');
        //if (count($sightCues))
       // {
         //   foreach ($sightCues as $value)
        //    {
        //        $data = array('sighting_id'=>$new_incidentalId, 
         //                     'sightCue_id'=>$value);
        //        $this->db->insert('sightings_cues', $data);
      //      }
        //}
        
        //Grab the features cues and insert into sightings_cues : 
        //remember that featuresCues is an array of multiple selections in the form
        //this is only for vessel sighting
        //if ($this->input->post('reportType')== 'vessel')
//        {
//            $featureCues = array();
//            $featureCues = $this->input->post('id_cue');
//            if (count($featureCues))
//            {
//                foreach ( $featureCues as $value)
//                {
//                    $data = array('feature_id'=>$new_incidentalId, 
//                                  'feature_cue_id'=>$value);
//                    $this->db->insert('featurecues', $data);
//                }
//            }
//        }
//        
//        //Grab the behaviours and insert into behaviours : 
//        //remember that behaviour is an array of multiple selections in the form
//        $behaviour = array();
//        $behaviour = $this->input->post('behaviour');
//        if (count($behaviour))
//        {
//            foreach ( $behaviour as $value)
//            {
//                $data = array('behaviour_id'=>$new_incidentalId, 
//                              'behaviour_type'=>$value);
//                $this->db->insert('behaviours', $data);
//            }
//        }
//        
//        //Grab the oth_wild_feat and insert into oth_wild_feat : 
//        //remember that behaviour is an array of multiple selections in the form
//        
//        if ($this->input->post('reportType')== 'vessel')
//        {
//            $oth_wild_feat = array();
//            $oth_wild_feat = $this->input->post('oth_wild_feat');
//            if (count($oth_wild_feat))
//            {
//                foreach ( $oth_wild_feat as $value)
//                {
//                    $data = array('wild_feat_id'=>$new_incidentalId, 
//                                  'wild_feat_type'=>$value);
//                    $this->db->insert('oth_wild_feat', $data);
//                }
//            }
//        }
        
        //OK lets compute the whale lat and long of the new observation
      
       //EW Displacement meters
       $ew_disp_mts = sin(deg2rad($direction))*($distance);
       
       //NS Displacement meters
       $ns_disp_mts = cos(deg2rad($direction))*($distance);
       
       //NS Displacement degrees
       $ns_disp_deg =  (($ns_disp_mts/1000)/(2*pi()*6364.963))*360;
        
       //Derived whale lat
       $latWhale = $latObserver + $ns_disp_deg;
       
       //EW Displacement dsegrees
       $ew_disp_deg = (($ns_disp_mts/1000)/(2*pi()*6364.963*cos(rad2deg($latWhale))))*360;
       
       //Derived whale long
       $longWhale = $longObserver + $ew_disp_deg;

        //finally lets insert all the data into the incidental table
           $data = array (
            'incidentalId' => $new_incidentalId,
            'reportType' => $reportType,
            'obDate' => $obDate,
            'direction' => $direction,
            'distance' => $distance,
            'numWhale' => $numWhale,
            'confidence' => $confidence,
            'distance' => $distance,
            'lenTime' => $lenTime,
            'weather' => $weather,
            'comments' => $comments,
            'latObserver' => $latObserver,
            'longObserver' => $longObserver,
            'latWhale' => $latWhale,
            'longWhale' => $longWhale            
            );
 	    
		 $this->db->insert('incidental', $data);
	 }
     
     function get_all_incidental()
     {
        $data = array();
        $query = $this->db->get('incidental');
        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[] = $row;
            }
        }
        $query->free_result();
        return $data;
     }
     
        public function get_sightings()
        {
		  $this->db->select();
			
		  $query = $this->db->get('incidental');
			
		  if ($query->num_rows() > 0)
		  {
			return $query->result_array();
		  }
	}
   	//Get latitudes and longitudes
	public function get_lat_lng()
	{
		//Select the latitude and longitude from table: sightings
		$data = array();
		$temp = array();
		
		$this->db->select('incidentalId, latObserver, longObserver, latWhale, longWhale');
		$query = $this->db->get('incidental');
		
		if ( $query->num_rows() > 0 )
		{
			foreach ( $query->result_array() as $row )
			{
				$temp[ $row[ 'incidentalId' ] ] = array
				(
                    "latObserver" => $row[ 'latObserver' ],
					"longObserver" => $row[ 'longObserver' ],
                    "latWhale" => $row['latWhale'],
                    "longWhale" => $row['longWhale']
				);
			}
		}
		
		$data[] = $temp;
		$query->free_result();
		return $data;	
	}

    //need to get the last id entered in the incidental table
    
   public function get_sighting_id($id)
	{
		$this->db->select();
		$this->db->where('id', $id);
			
		$query = $this->db->get('incidental', 1);
			
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
	}
    
    function get_incidental_id()
    {
        $data = array();
        $this->db->select('incidentalId');
        $this->db->order_by('incidentalId', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('incidental');
        if ($query->num_rows() > 0)
        {
            $data = $query->row_array();
        }
        
        $query->free_result();
        return $data;
     
    }
    
    //here we need to get the sight cues for the checkboxes in the incidental sightings form
    function get_sightCues()
    {
        $data = array();
        $this->db->select('id, sightCue ');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('sight_cues');
        
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[$row['id']] = $row['sightCue'];
            }
        }
        
        $query->free_result();
        return $data;

    }
    
    //here we need to get the feature cues for the checkboxes in the incidental sightings form
    function get_featureCues()
    {
        $data = array();
        $this->db->select('id, featureCue ');
        $this->db->order_by('id', 'asc');
        $query = $this->db->get('feature_cues');
        
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result_array() as $row)
            {
                $data[$row['id']] = $row['featureCue'];
            }
        }
        
        $query->free_result();
        return $data;

    }
    
    
//Get all incidental sightings for Admin to validate
	function get_inc_sightings()
	{
		$query = $this->db->get('incidental');
        return $query->result();
	}
	
	//get individual sighting 
	function get_sighting()
	{
		$this->db->where('incidRN',$this->uri->segment(3));
		$query=$this->db->get('incidental');
		return $query->result();
	}
	
	function delete_sighting()
	{
		$this->db->where($this->uri->segment(3));
		$this->db->delete('incidental');
	}
    
    public function edit_sighting($id)
	{
		$data = array
					(
						'reportType' => $this->input->post('reportType'),
						'validated' => $this->input->post('validated'),
					);
			
		$this->db->where('id', $id);
		$this->db->update('incidental', $data);
	}
}