<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


//This gets the array of lat longs and sets up the various positions for observers and whales 
$incidentalId = $incidentalId['incidentalId'];

foreach ( $lat_lng as $key => $pos )
{
   
    
    for ( $i = 1; $i <= $incidentalId; $i++ ) 
	{
		$latObserver[ $i ] = $pos[ $i ][ 'latObserver' ] ;

        $longObserver[ $i ] = $pos[ $i ][ 'longObserver' ] ;
            
        $latWhale[ $i ] = $pos[ $i ][ 'latWhale' ] ;
            
        $longWhale[ $i ] = $pos[ $i ][ 'longWhale' ] ;
    }

}
?>
<!DOCTYPE html>
<head>
   
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
       
    <!-- Load the jQuery and javaScript calls-->
    <?=$this->load->view('/templates/header'); ?> 
    <?=$this->load->view('/templates/bws_map_js'); ?>
    <?=$this->load->view('/templates/bws_functions_js'); ?> 

</head>

<!-- Remember to get the page ready to put the google map -->
<body onload="initialize()">

<h1>Latest Sighting</h1>
<p>Thank you for your sighting information. Your observed sighting has been placed on the map. </p>
<p>We have also provided the most recently validated Blue Whale sightings to show how your sighting compares with our records. </p>
<div id="map_canvas" style="width:80%; height:80%"></div>
