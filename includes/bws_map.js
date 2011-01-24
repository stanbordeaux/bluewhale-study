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
        mapTypeId: google.maps.MapTypeId.HYBRID
      }
      var map = new google.maps.Map(document.getElementById("map_canvas"), options);
     var html = "<p>Thank You</p><p>Only the last position of the marker will be recorded!</p>";
    infowindow = new google.maps.InfoWindow({
     content: html    });
     
     var obsIcon = '<?=base_url(); ?>images/person.png';
    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          icon: obsIcon,
          draggable: true,
          map: map
        });
        google.maps.event.addListener(marker, "click", function() {
          infowindow.open(map, marker);
        });
        
        /* This marks the end of the dragged marker we will take these coordinates and pass them as observer location */
        google.maps.event.addListener(marker, 'dragend', function()
        {
           var coord = marker.getPosition().toUrlValue();
           var mypos = marker.getPosition();
           var mylat = mypos.lat();
           var mylng = mypos.lng();
           $("coordinates").value = coord;
           document.getElementById("latObserver").value = mylat;
           document.getElementById("longObserver").value = mylng;
            });
        });
    }

    function saveData() 
    {
      var fname = escape(document.getElementById("fname").value);
      var lname = escape(document.getElementById("lname").value);
      var latlng = marker.getPosition();
 
      var url = "phpsqlinfo_addrow.php?fname=" + fname + "&lname=" + lname +
                "&lat=" + latlng.lat() + "&lng=" + latlng.lng();
      downloadUrl(url, function(data, responseCode) 
      {
        if (responseCode == 200 && data.length <= 1) 
        {
          infowindow.close();
          document.getElementById("message").innerHTML = "Location added.";
        }
      });
    }

    function closeInfo() 
    {
      var fname = escape(document.getElementById("fname").value);
      var lname = escape(document.getElementById("lname").value);
      var latlng = marker.getPosition();
      var lat = latlng.lat();
      var lng = latlng.lng();
      var lname = doc
      infowindow.close();
    }

    function downloadUrl(url, callback)
    {
      var request = window.ActiveXObject ?
      new ActiveXObject('Microsoft.XMLHTTP') :
      new XMLHttpRequest;

      request.onreadystatechange = function() 
      {
        if (request.readyState == 4)
        {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    </script>
