function initialize() {

    var latlng = new google.maps.LatLng(-38.25, 141.72);

    var myOptions = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.HYBRID
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
