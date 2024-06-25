<div id="map" style="width:600px;height:450px;"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw9HPxhdYmLJsF_xVXmEs_f2QwfaEoGho"></script>
    <script>
        function initMap() {
            var location = {lat: 37.7749, lng: -122.4194}; // Coordinates of San Francisco
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>

