<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mapapp extends Controller
{
	function __construct()
	{
		parent::Controller();
		
		//you can autoload your models but I reckon this way allows quicker error checking
		$this->load->model( 'sightings_m' );
		
	}
	
	//basic index page 
	function index()
	{
		$this->load->view('templates/phpsqlinfo_add04');
	}
	
	function view( $type = NULL )
	{
		$data[ 'locations' ] = $this->sightings_m->get();
		
		if ( $type == "ajax" ) 
		{
			$this->load->view( 'locations_view',  $data ) ;
		}
		else
		{
			$this->load->view( '/templates/sightings_view' ) ;
		}
	}
	
	
   function test_form()
    {
    	
    		// Gets data from URL parameters
  //$mylat = $_POST['myPosition'];
//  		$data[ 'name' ] = $_GET[ 'fname' ] ;
//		$data[ 'obLat' ] = $_GET[ 'lat' ] ;
//		$data[ 'obLng' ] = $_GET[ 'lng' ] ;
	$this->model->sightings_m('put_lat_lng');
            
            		//$lat = $_POST[ 'mylatlng' ] ;
                //$sighter = $_POST[ 'fname' ] ;
              //  echo 'Hello ' .$sighter.  ' thanks for the sighting<br />';
                //echo 'your latitude is: ' .$mylat.  ' <br />';
                  
    }
    
	//If a form has been submitted better insert the data in the table
	function add_sighting()
	{
		// Gets data from URL parameters
		$data['fname'] = $_POST['fname'];
		$data['lname'] = $_POST['lname'];
		$data['obLat'] = $_POST['obLat'];
		$data['obLng'] = $_POST['obLng'];
		//$data['type'] = $_POST['type'];
		
		if (isset($_POST['fname']))
		{
			$this->sightings_m->add_lat_lng($data);
			//redirect('mapapp/index/', 'refresh');
		}

	}


	function test_ajax()
	{
		$data = array();
		if (isset($_POST['fname']))
		{
			$data['name'] = $_POST['fname'] ;
			$data['pos'] = $_POST['lat'];
			$this->load->view('testmap01', $data);
		}
		else
		{
			echo "<h1>Not Here</h1>";
		}
	}		
	//Since we inserted some data somewhere lets get it out and have a look
	function do_map()
	{
		$data[ 'lat_lng'] = $this->sightings_m->get_lat_lng();
		$this->load->view('testxml03', $data);
	}
}
/* End of file mapapp.php */
/* Location: ./system/application/controllers/mapapp.php */