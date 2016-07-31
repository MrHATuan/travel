

<style>
  #right-panel {
    font-family: 'Roboto','sans-serif';
    line-height: 20px;
  }
  #map {
    height: auto;
    float: left;
    width: 660px;
    height: 400px;
    margin: 10px
  }
  #right-panel {
    border-width: 2px;
    height: auto;
    float: left;
    text-align: left;
  }
  #directions-panel {
    margin-top: 10px;
    background-color: #FFEE77;
    padding: 10px;
  }
</style>

{{-- main --}}
@if(count($point) != 0)
  <div class="col-md-7 col-md-offset-1">
    <div id="map"></div>
  </div>
  <div class="col-md-4">
    <div id="right-panel">
          <input type="hidden" name="soluong" id="point" value="{{ count($point) }}">
          <?php
            $i=0;
          ?>
          @foreach($point as $data)
              <input type="hidden" name="diadiem" id="point{{$i}}" value="{{ $data["come_place"] }}">
              <?php
                $i=$i+1;
              ?>
          @endforeach
        <div id="directions-panel"></div>
    </div>
  </div>
@endif


    {{-- script --}}
<script>

  function initMap() {
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 6,
      center: {lat: 41.85, lng: -87.65}
    });
    directionsDisplay.setMap(map);

    calculateAndDisplayRoute(directionsService, directionsDisplay);
  }

  function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    var count = $('#point').val();
    // waypoint là 1 array //
    var waypts = [];
    var checkboxArray = [];
    for(var i = 1; i < count; i++){
      var a =i-1;
      checkboxArray[a] = $('#point'+i).val();
    }
    for (var i = 0; i < checkboxArray.length; i++) {
      // if (checkboxArray.options[i].selected) {
        waypts.push({
          location: checkboxArray[i],
          stopover: true
        });
      // }
    }
      // get route 
    directionsService.route({
      origin: document.getElementById('point0').value,
      destination: document.getElementById('point0').value,
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
        var route = response.routes[0];
        var summaryPanel = document.getElementById('directions-panel');
        summaryPanel.innerHTML = '';
        // For each route, display summary information.
        for (var i = 0; i < route.legs.length; i++) {
          var routeSegment = i + 1;
          summaryPanel.innerHTML += '<b>LỘ TRÌNH: ' + routeSegment +
              '</b><br>';
          summaryPanel.innerHTML += route.legs[i].start_address + '<br> đến <br> ';
          summaryPanel.innerHTML += route.legs[i].end_address + '<br> Khoảng cách: ';
          summaryPanel.innerHTML += route.legs[i].distance.text + '<br>';
        }
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }
</script>

<script async defer 
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3MJBtrdlI7PTnyNaaCVCwE4O2HlIhApQ&callback=initMap">
</script>
