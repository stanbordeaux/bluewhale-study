    <!-- This is the google map application.  Some of the functions here are not used or need reworking but
         there is a skeleton of most things -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    var marker;
    var infowindow;

    function initialize() {
       /* The map is centered at Portland Victoria.  We can pass any coordinates via PHP */ 
     
      var latlng = new google.maps.LatLng(-38.25, 141.72);
      var options = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
     var html = "<p>Thank You</p><p>Only the last position of the marker will be recorded!</p>";
    infowindow = new google.maps.InfoWindow({
     content: html    });
     
        var newObs = new google.maps.LatLng(<?php echo $latWhale[($incidentalId)];?>, <?php echo $longWhale[($incidentalId)];?>);
    var newWhale = new google.maps.LatLng(<?php echo $latWhale[($incidentalId-1)];?>, <?php echo $longWhale[($incidentalId-1)];?>);    
    
    var oldWhale1 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 2)];?>, <?php echo $longWhale[($incidentalId - 2)];?>);

    var oldWhale2 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 3)];?>, <?php echo $longWhale[($incidentalId - 3)];?>);
    
    var oldWhale3 = new google.maps.LatLng(<?php echo $latWhale[($incidentalId - 4)];?>, <?php echo $longWhale[($incidentalId - 4)];?>);
    
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    
    var obsIcon = '<?=base_url(); ?>images/person.png';
    var marker1 = new google.maps.Marker({

      position: newObs, 

      map: map,
      
      icon: obsIcon,
      
      
      title: "Latest Position"

});   

	
         var newWhaleIcon = '<?=base_url(); ?>images/whale1.png';
 	    var marker2 = new google.maps.Marker
         ({

             position: newWhale, 

             map: map,
             
             icon: newWhaleIcon,
       
             title: "I am last Whale"
         });  
        
        var oldWhaleIcon = '<?=base_url(); ?>images/whale2.png';
 	    var marker3 = new google.maps.Marker({

       position: oldWhale1, 

       map: map,
       
       icon: oldWhaleIcon,
       
       title: "2nd Obs"
 });
  
 	    var marker4 = new google.maps.Marker({

       position: oldWhale2, 

       map: map,
       
       icon: oldWhaleIcon,
       
       title: "2nd whale"


 });  
}
    </script>
