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



<html>

<head>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
function initialize() {

    var latlng = new google.maps.LatLng(-38.25, 141.72);

    var myOptions = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
    
    /**Set up the new addition and the last 3 whale sightings starting from the last observation  **/
    var newObserver = new google.maps.LatLng(<?php echo $latObserver[($incidentalId)];?>, <?php echo $longObserver[($incidentalId)];?>);  
    var newWhale= new google.maps.LatLng(<?php echo $latWhale[($incidentalId)];?>, <?php echo $longWhale[($incidentalId)];?>);    
    var oldWhale1 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 1)];?>, <?php echo $longWhale[($incidentalId - 1)];?>);
    var oldWhale2 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 2)];?>, <?php echo $longWhale[($incidentalId - 2)];?>);
    var oldWhale3 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 3)];?>, <?php echo $longWhale[($incidentalId - 3)];?>);
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var newWhaleIcon = '<?=base_url(); ?>images/whale1.png';
    var oldWhaleIcon = '<?=base_url(); ?>images/whale2.png';
    var shadow = '<?=base_url(); ?>images/icon_shadow.png';
    var obsIcon = '<?=base_url(); ?>images/person.png';
    
    /** now we position the whales using the blue whale icon **/
    var marker1 = new google.maps.Marker
    ({
        position: newWhale, 
        map: map,
        icon: newWhaleIcon,
        shadow: shadow,
        title:  "New Whale Sighting"

    });   

    var marker2 = new google.maps.Marker
    ({
        position: oldWhale1, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: "Validated sighting 1"
    });  
        
    var marker3 = new google.maps.Marker
    ({
        position: oldWhale2, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: "Validated sighting 2"
     });
     
     var marker4 = new google.maps.Marker
    ({
        position: oldWhale3, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: "Validated sighting 3"
     });
  
 	    
    var marker5 = new google.maps.Marker
    ({
        position: newObserver, 
        map: map,
        icon: obsIcon,
        shadow: shadow,
        title: " The observer position <?=$latObserver[$incidentalId]; ?>"
    });  
}

</script>

</head>

<body onLoad="initialize()">
<div>
<h1>Your Sighting</h1>
<h2>Thank you for reporting your sighting.</h2>

<h4>Please note that before we can add your sighting to our database we need to validate it.  You may be contacted in the next few days by one of our researchers who may ask you some follow up information.</h4>

<p>Your whale observation has been added to the map.  The orange whale icon <img src="<?=base_url(); ?>images/whale1.png" /> and the orange man <img src="<?=base_url(); ?>images/person.png" />represent your sighting.  The other blue whale icons <img src="<?=base_url(); ?>images/whale2.png" /> represent previously validated sightings. You can see your sighting in relation to previous recorded sightings.</p>

<p>Because whales move about some whales may not be visible on the map. You can move the map about and zoom in or out to get a better view.</p>

</div>
 <div id="map_canvas" style="width: 500px; height: 300px; margin-top: 20px; margin-bottom: 20px; margin-left: 20px; border: solid #0080C0;"></div>
  
</body>

</html>