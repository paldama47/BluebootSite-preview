$('document').ready(function() {
	/*var options = { videoId: 'e4Is32W-ppk', start: 3 };
	$('#wrapper').tubular(options);*/
	// f-UGhWj1xww cool sepia hd
	// 49SKbS7Xwf4 beautiful barn sepia
	/* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
});

function on_load(iframe) {
  try {
    // Displays the first 50 chars in the innerHTML of the
    // body of the page that the iframe is showing.
    // EDIT 2012-04-17: for wider support, fallback to contentWindow.document
    var doc = iframe.contentDocument || iframe.contentWindow.document;
    alert(doc.body.innerHTML.substring(0, 50));
  } catch (e) {
    // This can happen if the src of the iframe is
    // on another domain
    alert('exception: ' + e);
  }
}

function initializeMap() {
	var drag = true;
	if (screen.width < 600)
		drag = false;
	var cnt = new google.maps.LatLng(3.008845277554887, -73.55345489620174);
	var mapCanvas = document.getElementById('map-canvas');
	var mapOptions = {
	  scrollwheel: false,
	  center: cnt,
	  zoom: 3,
	  draggable: drag,
	  mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	var map = new google.maps.Map(mapCanvas, mapOptions);

	// Uruguay
	var request = {
		placeId: 'ChIJO6IAnRWBn5URhYlaHmJVWrQ'
	};

	var infowindow = new google.maps.InfoWindow();
	var service = new google.maps.places.PlacesService(map);

	var marker = null;

	service.getDetails(request, function(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent(place.name);
				infowindow.open(map, this);
			});
		}
	});
	
	// USA
	request = {
		placeId: 'ChIJezmPHY2h2YgRY8YNxuyx_6w'
	};	
	var marker = null;
	service.getDetails(request, function(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent("BlueBoot Business Software");
				infowindow.open(map, this);
			});
		}
	});
	
	// Chile
	request = {
		placeId: 'ChIJl1YhdjnMYpYRh7qYow_An50'
	};	
	var marker = null;
	service.getDetails(request, function(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent("BlueBoot Business Software");
				infowindow.open(map, this);
			});
		}
	});
	
	// Brazil
	request = {
		placeId: 'EkFSLiBTZXRlIGRlIEFicmlsIC0gUmVww7pibGljYSwgU8OjbyBQYXVsbyAtIFNQLCAxMzE1MC0wMDUsIEJyYXppbCIuKiwKFAoSCYXBwAFSWM6UEUdl7qtDrNgcEhQKEgk7XznAUVjOlBEC849_qqVu8w'
	};	
	var marker = null;
	service.getDetails(request, function(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent("BlueBoot Business Software");
				infowindow.open(map, this);
			});
		}
	});
	
	// Argentina
	request = {
		placeId: 'ChIJpR-GiAsJfpYRB8zZbcMuCM8'
	};	
	var marker = null;
	service.getDetails(request, function(place, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			marker = new google.maps.Marker({
				map: map,
				position: place.geometry.location
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.setContent("BlueBoot Business Software");
				infowindow.open(map, this);
			});
		}
	});

	// Center map
	if ('@Model.CoordinatesLatitude' != '0.0' && '@Model.CoordinatesLongitude' != '0.0') {
		marker.setPosition(cnt);
	}

}