<html>

<head>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">

  function initialize() {

    var latlng = new google.maps.LatLng(-38.3, 141.7);

    var myOptions = {

      zoom: 9,

      center: latlng,

      mapTypeId: google.maps.MapTypeId.ROADMAP

    }

    

    var oldWhale1 = new google.maps.LatLng(-38.25, 141.72);    
    
    var oldWhale2 = new google.maps.LatLng(-38.26, 141.8);

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    
    var oldWhaleIcon = 'http://cit3.ldl.swin.edu.au/~vital/bws/images/whale1.png';
    var marker1 = new google.maps.Marker({

      position: oldWhale1, 

      map: map,
      
      icon: oldWhaleIcon,
      
      
      title: "Latest Position"

});   

	

   	    var marker2 = new google.maps.Marker
         ({

             position: oldWhale2, 

             map: map,
             
             icon: oldWhaleIcon,
       
             title: "I am last Whale"
         });  
        


}



</script>

</head>

<body onload="initialize()">
<div>
<h1>Your Latest Sighting</h1>
<p>Thank you for your sighting information. Your observed sighting has been placed on the map. </p>
<p>We have also provided the most recently validated Blue Whale sightings to show how your sighting compares with our records. </p>
</div>
 <div id="map_canvas" style="width: 500px; height: 300px; margin-top: 20px; margin-bottom: 20px; margin-left: 20px; border: solid #0080C0;"></div>

</body>

</html>