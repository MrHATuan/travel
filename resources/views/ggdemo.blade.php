
<style type="text/css">
    #DivMap
    {
        border: 1px solid Black;
        width: 500px;
        height: 400px;
        margin-top: 30px;
        margin-left: 32%;
    }
</style>

<div style="font-size: 30px; margin: 15px; padding: 15px;">
    Get Direction In Google Map
</div>
<hr />
<br />

<div>
    <label for="txtFrom">Root From:</label>
    <input type="text" id="txtFrom" name="txtFrom" required="required" placeholder="Location From"size="40" />
    &nbsp; &nbsp; &nbsp;
    <label for="txtTo">Root To:</label>
    <input type="text" id="txtTo" name="txtTo" required="required" placeholder="Location To"size="40" />
    <br />
    <br />
    <input type="submit" />&nbsp; &nbsp;
    <input type="reset" />&nbsp; &nbsp;
    <p id="lblError" style="color: Red; font-size: 17px;" />
</div>

<div id="DivMap">
</div>

{{-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> --}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
{{-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script> --}}
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3MJBtrdlI7PTnyNaaCVCwE4O2HlIhApQ" async defer></script>
<script>
    //For TextBox Search..............
    google.maps.event.addDomListener(window, 'load', function () {
        var places = new google.maps.places(document.getElementById('txtFrom'));
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
        });
        var places1 = new google.maps.places(document.getElementById('txtTo'));
        google.maps.event.addListener(places1, 'place_changed', function () {
            var place1 = places1.getPlace();
        });
    });

    function calculateRoute(rootfrom, rootto) {
        // Center initialized to Naples, Italy
        var myOptions = {
            zoom: 10,
            center: new google.maps.LatLng(40.84, 14.25),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("DivMap"), myOptions);

        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
            origin: rootfrom,
            destination: rootto,
            travelMode: google.maps.DirectionsTravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
        directionsRequest,
        function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                new google.maps.DirectionsRenderer({
                    map: mapObject,
                    directions: response
                });
            }
            else
                $("#lblError").append("Unable To Find Root");
        }
    );
    }

    $(document).ready(function () {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
            $("#lblError").text("Your browser doesn't support the Geolocation API");
            return;
        }
        $("#calculate-route").submit(function (event) {
            event.preventDefault();
            calculateRoute($("#txtFrom").val(), $("#txtTo").val());
        });
    });
</script>




<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.761275679691!2d105.83774731493217!3d21.002204386012757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7a76c79c0f%3A0xa37d3ed4526ea954!2sBach+Mai+Hospital!5e0!3m2!1sen!2s!4v1459915967128" frameborder="0" style="border: 0;" width="600" height="450" allowfullscreen=""></iframe></p>