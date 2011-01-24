<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Google Maps JavaScript API v3 Example: Map Simple</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    var marker;
    var infowindow;

    function initialize() {
      var latlng = new google.maps.LatLng(-38.22, 141.11);
      var options = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
     var html = "<table>" +
                 "<tr><td>Name:</td> <td><input type='text' id='fname'/> </td> </tr>" +
                 "<tr><td>Last Name:</td> <td><input type='text' id='lname'/></td> </tr>" +
                 "<tr><td></td><td><input type='button' value='Save & Close' onClick='saveData()' /></td></tr>";
    infowindow = new google.maps.InfoWindow({
     content: html    });
 
    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
    });
    }

    function saveData() {
      var fname = escape(document.getElementById("fname").value);
      var lname = escape(document.getElementById("lname").value);
      var latlng = marker.getPosition();
 
      var url = "phpsqlinfo_addrow.php?fname=" + fname + "&lname=" + lname +
                "&lat=" + latlng.lat() + "&lng=" + latlng.lng();
      downloadUrl(url, function(data, responseCode) {
        if (responseCode == 200 && data.length <= 1) {
          infowindow.close();
          document.getElementById("message").innerHTML = "Location added.";
        }
      });
    }

    function closeInfo() {
    	      var fname = escape(document.getElementById("fname").value);
      var lname = escape(document.getElementById("lname").value);
    	  var latlng = marker.getPosition();
    	  var lat = latlng.lat();
    	  var lng = latlng.lng();
    	  var lname = doc
          infowindow.close();
          }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
    </script>
    
	<script src="http://www.google.com/jsapi"></script>
 	
	<script>google.load("jquery", "1.3.2")</script>
		 
	<script>
		$(document).ready(function()
		{
			$('#submit').click(function()
			{
				var fname1 = $('#fname1').val();
				var lname1 = $('#lname1').val();
				var marker = map.marker.getPosition();
				
				$.post( 'index.php/mapapp/add_sighting', {
					fname: fname1,
					lname: lname1,
					marker: marker
				}, function()
				{
		      		alert('data loaded');
				});
				return false;
			});
			
		});	
 
</script>    
  </head>

  <body style="margin:0px; padding:0px;" onload="initialize()">
  <div><a href="">Link Test</a></div>
    <div id="map_canvas" style="width: 500px; height: 300px"></div>
    <div id="message"></div>
    
    <div>
    	<label for="fname">First Name: </label>  <input type="text" name="fname1" id="fname1" />
    	
    	<input type="text" name="lname1" id="lname1" />
      	<input type="submit" name="submit" id="submit" value="submit" />
    </div>
  </body>

</html>