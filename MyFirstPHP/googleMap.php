<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 50%;
        width: 50%;
      }
    </style>
  </head>
  <body>
  	<form id="userset">
  		lat:<input type="text" name="lat"></input>
  		lng:<input type="text" name="lng"></input>
  		<input type="button" value="go" onclick="changeLocation()">
  	</form>
    <div id="map"></div>
    <script>
    
    var map;
    var marker;
    var userset;
    
	function initMap() {

		userset = document.getElementById("userset");
		var lat = userset.elements[0].value;
		var lng = userset.elements[1].value;

		map = new google.maps.Map(document.getElementById('map'), {
			zoom: 4
		});
		map.setCenter(new google.maps.LatLng(lat, lng));
		
		marker = new google.maps.Marker({
			map: map
		});
		marker.setPosition(new google.maps.LatLng(lat, lng));
	}
	
	function changeLocation()
	{
		var lat = userset.elements[0].value;
		var lng = userset.elements[1].value;
		map.setCenter(new google.maps.LatLng(lat, lng));
		marker.setPosition(new google.maps.LatLng(lat, lng));
	}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgJffBTzpXzQU1JM1cfJAdsLOHquzJC70&signed_in=true&callback=initMap" async defer></script>
  </body>
</html>