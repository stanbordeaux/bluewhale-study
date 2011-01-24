<!DOCTYPE html >
  <head>
    <meta name="<?=$metaname; ?>" content="<?=$metacontent; ?>" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <?=$this->load->view('/script/set_google_map'); ?>
	<script src="http://www.google.com/jsapi"></script>
 	
	<script>google.load("jquery", "1.3.2")</script>
		 
	<script>
		$(document).ready(function()
		{
			$('#submit').click(function()
			{
				var fname1 = $('#fname1').val();
				var lname1 = $('#lname1').val();
				var obLat = $('#latitude').val();
                var obLng = $('#longitude').val();
				$.post( 'index.php/mapapp/add_sighting', {
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
		
	</script>    
  </head>

  <body style="margin:0px; padding:0px;" onload="initialize()">
  <div><a href="">Link Test</a></div>
    <div id="map_canvas" style="width: 500px; height: 300px"></div>
    <div id="message"></div>
    <div id="place"><p>Lat:<input type="text" id="latitude" value=""/></p>
    <p>Long:<input type="text" id="longitude" value=""/></p></div>
    
    <div>
    	<label for="fname">First Name: </label>  <input type="text" name="fname1" id="fname1" />
    	
    	<input type="text" name="lname1" id="lname1" />
      	<input type="submit" name="submit" id="submit" value="submit" />
    </div>
  </body>

</html>