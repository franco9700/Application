@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-4">
      <div class="row">
        <div class="col">
          <h1>{{ $product->name }}</h1>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col">
          {{ $product-> description}}
        </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2 col-sm-6">
              <h5>Precio:</h5>
          </div>
          <div class="col-lg-2 col-sm-6">
              <p>${{ $product->price }}</p>
          </div>
          <div class="col-lg-2 col-sm-6">
              <h5>Stock:</h5>
          </div>
          <div class="col-lg-2 col-sm-6">
              <p>{{ $product->stock }}</p>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <h5>Category:</h5>
          </div>
          <div class="col">
              <p>{{ $product->category->description }}</p>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <h5>Subsidiary:</h5>
          </div>
          <div class="col">
              <p>{{ $product->subsidiary->name }}</p>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-4">
              <h5>Address:</h5>
          </div>
          <div class="col">
              <p>{{ $product->subsidiary->address_address}}</p>
          </div>
      </div>
    </div>
    <div class="col">
      <div id="address-map-container" style="width:500px;height:400px; ">
          <div style="width: 100%; height: 100%" id="map"></div>
      </div>
    </div>
  </div>
</div> 

@endsection

@section('scripts')

<script>
    function initMap() {
        var markerArray = [];

        // Instantiate a directions service.
        var directionsService = new google.maps.DirectionsService;

        // Create a map and center it on Manhattan.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 29.0948207, lng: -110.9692202}
        });

        // Create a renderer for directions and bind it to the map.
        var directionsDisplay = new google.maps.DirectionsRenderer({map: map});

        // Instantiate an info window to hold step text.
        var stepDisplay = new google.maps.InfoWindow;

        // Display the route between the initial start and end selections.
        calculateAndDisplayRoute(
            directionsDisplay, directionsService, markerArray, stepDisplay, map);

      }

      function calculateAndDisplayRoute(directionsDisplay, directionsService,
          markerArray, stepDisplay, map) {
        // First, remove any existing markers from the map.
        for (var i = 0; i < markerArray.length; i++) {
          markerArray[i].setMap(null);
        }

        var product = {!! json_encode($product) !!};

        var product_lat = product.subsidiary.address_latitude;
        var product_lng = product.subsidiary.address_longitude;

        // Retrieve the start and end locations and create a DirectionsRequest using
        // WALKING directions.
        directionsService.route({
          origin:{lat: 29.0982743, lng: -110.99659500000001},
          destination: {lat: product_lat, lng: product_lng},
          travelMode: 'DRIVING'
        }, function(response, status) {
          // Route the directions and pass the response to a function to create
          // markers for each step.
          if (status === 'OK') {
            directionsDisplay.setDirections(response);
            showSteps(response, markerArray, stepDisplay, map);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

      function showSteps(directionResult, markerArray, stepDisplay, map) {
        // For each step, place a marker, and add the text to the marker's infowindow.
        // Also attach the marker to an array so we can keep track of it and remove it
        // when calculating new routes.
        var myRoute = directionResult.routes[0].legs[0];
        for (var i = 0; i < myRoute.steps.length; i++) {
          var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
          marker.setMap(map);
          marker.setPosition(myRoute.steps[i].start_location);
          attachInstructionText(
              stepDisplay, marker, myRoute.steps[i].instructions, map);
        }
      }

      function attachInstructionText(stepDisplay, marker, text, map) {
        google.maps.event.addListener(marker, 'click', function() {
          // Open an info window when the marker is clicked on, containing the text
          // of the step.
          stepDisplay.setContent(text);
          stepDisplay.open(map, marker);
        });
      }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>

@endsection
