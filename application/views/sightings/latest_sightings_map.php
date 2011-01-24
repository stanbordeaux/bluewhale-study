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

    /** set up the latest sightings map to be centered on the last validated whale  **/
    var latlng = new google.maps.LatLng(<?php echo $latWhale[($incidentalId)];?>, <?php echo $longWhale[($incidentalId)];?>);

    var myOptions = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    
    /**Set up the last 4 whale sightings starting from the last observation  **/
    var oldWhale1 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId)];?>, <?php echo $longWhale[($incidentalId)];?>);    
    var oldWhale2 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 1)];?>, <?php echo $longWhale[($incidentalId - 1)];?>);
    var oldWhale3 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 2)];?>, <?php echo $longWhale[($incidentalId - 2)];?>);
    var oldWhale4 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 3)];?>, <?php echo $longWhale[($incidentalId - 3)];?>);
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var oldWhaleIcon = '<?=base_url(); ?>images/whale2.png';
    var shadow = '<?=base_url(); ?>images/icon_shadow.png';
    
    /** now we position the whales using the blue whale icon **/
    var marker1 = new google.maps.Marker
    ({
        position: oldWhale1, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title:  "1st whale pos: <?=$latWhale[($incidentalId)]; ?>"

    });   

    var marker2 = new google.maps.Marker
    ({
        position: oldWhale2, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: " 2nd whale pos: <?=$latWhale[($incidentalId - 1)]; ?>"
    });  
        
    var marker3 = new google.maps.Marker
    ({
        position: oldWhale3, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: " 3rd whale pos: <?=$latWhale[($incidentalId - 2)]; ?>"
     });
  
 	    
    var marker4 = new google.maps.Marker
    ({
        position: oldWhale4, 
        map: map,
        icon: oldWhaleIcon,
        shadow: shadow,
        title: " 4th whale pos: <?=$latWhale[($incidentalId - 3)]; ?>"
    });  
}

</script>

</head>

<body onLoad="initialize()">
<div>
<h1>Latest Sightings</h1>
<p>Welcome to the latest validated sightings of the blue whale. </p>
<p>Whale positions are recorded by their latitude and longitude. The map below shows the position of the last four sightings.  Because whales move about some sightings may not be visible on the map. You can move the map about and zoom in or out to get a better view.</p>
</div>
 <div id="map_canvas" style="width: 500px; height: 300px; margin-top: 20px; margin-bottom: 20px; margin-left: 20px; border: solid #0080C0;"></div>
  
</body>

</html>