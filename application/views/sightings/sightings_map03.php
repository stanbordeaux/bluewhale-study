<!DOCTYPE html >
  <head>
    <meta name="<?=$metaname; ?>" content="<?=$metacontent; ?>" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    var marker;
    var infowindow;

    function initialize() {
      var latlng = new google.maps.LatLng(-38.25, 141.72);
      var options = {
        zoom: 9,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
     var html = "final";
    infowindow = new google.maps.InfoWindow({
     content: html    });
 
    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          draggable: true,
          map: map
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
        google.maps.event.addListener(marker, 'dragend', function(){
   var coord = marker.getPosition().toUrlValue();
   var mypos = marker.getPosition();
   var mylat = mypos.lat();
   var mylng = mypos.lng();
   $("coordinates").value = coord;
   document.getElementById("latitude").value = mylat;
   document.getElementById("longitude").value = mylng;
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
    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/jquery.asmselect.css" />
    
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>includes/demos.css" />
    <script src="http://www.google.com/jsapi"></script>
    
    <script type="text/javascript" src="<?=base_url();?>includes/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/jquery.asmselect.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>includes/ui.core.js"></script>
    
    <script type="text/javascript" src="<?=base_url();?>includes/ui.datepicker.js"></script>
    
    
    
      <script type="text/javascript">
 
  $(document).ready(function(){
    $("#datepicker").datepicker();
  });

  </script>
	
  
	<script type="text/javascript">
    //load jquery
     google.load("jquery", "1.3.2");
     google.load("jqueryui", "1.7.2");
    
    
		$(document).ready(function()
		{
			$('#submit').click(function()
			{
				var fname1 = $('#fname1').val();
				var lname1 = $('#lname1').val();
				var obLat = $('#latitude').val();
                var obLng = $('#longitude').val();
				$.post( '<?=base_url(); ?>url index.php/sightings/add_sighting', {
					fname: fname1,
					lname: lname1,
					obLat: obLat,
                    obLng: obLng
				}, function()
				{
		      		alert('data loaded');
				});
				return false;
			});
			
		});
        $(document).ready(function()
        {
        $("a").click(function()
        {
            alert('hello shithead');
        });
		});
        
        $(document).ready(function() {
$("select[multiple]").asmSelect({
addItemTarget: 'top'
});
}); 
        
        
 
	</script>   
  </head>

  <body style="margin:0px; padding:0px;" onload="initialize()">
  <div><a href="">Link Test</a></div>
    <div id="map_canvas" style="width: 500px; height: 300px"></div>
    <div id="message"></div>
    <div id="place"><p>Lat:<input type="text" id="latitude" value=""/></p>
    <p>Long:<input type="text" id="longitude" value=""/></p></div>
    <label>Estimated direction to whales?: </label>
    <div>
            <select multiple="multiple" class="asmselect" size="1">
               	<option value="south">South</option>
               	<option value="southwest">Southwest</option>
               	<option value="west">West</option>
               	<option value="northwest">Northwest</option>
               	<option value="north">North</option>
               	<option value="northeast">Northeast</option>
               	<option value="east">East</option>
               	<option value="southeast">Southeast</option>
            </select><br />
    </div>
    <div class="blue_sq_bg">
    	<label for="fname">First Name: </label>  <input type="text" name="fname1" id="fname1" />
    	
    	<input type="text" name="lname1" id="lname1" />
      	<input type="submit" name="submit" id="submit" value="submit" />
          <label>What did you see?: </label>
           <select multiple="multiple" id="sightcue" class="asmselect" size="1" title="Please select any matching sight cues">
            <option value="1">Blow/Spout</option>
           	    <option value="2">Splash</option>
               	<option value="3">Body of whale</option>
                <option value="4">Side fin</option>
                <option value="5">Tail/Dive</option>
                <option value="6">Colour underwater</option>
                <option value="7">Associated wildlife</option>
                <option value="8">Other</option>
            </select>
    </div>
    <div>
    <form>
    <input id="date" type="textbox"/>
    <div id="calendar"></div>
</form>
 

</div>

<div class="demo"> 
 
<p>Date: <input type="text" id="datepicker" class="ui-datepicker"/></p> 
 
</div><!-- End demo --> 
 
<div class="demo-description"> 
 
<p>The datepicker is tied to a standard form input field.  Focus on the input (click, or use the tab key) to open an interactive calendar in a small overlay.  Choose a date, click elsewhere on the page (blur the input), or hit the Esc key to close. If a date is chosen, feedback is shown as the input's value.</p> 
 
</div><!-- End demo-description --> 
  </body>

</html>