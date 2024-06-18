    <div id="map" style="width:100%;height: 500px"></div>

    <!-- Load the Google Maps JavaScript API -->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw9HPxhdYmLJsF_xVXmEs_f2QwfaEoGho"></script>
    <!-- Add the script for the map -->
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of the initial center of the map (Australia)
            const initialLocation = { lat: 36.8121, lng: 34.6415 };
            // The map, centered at the initial location
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,  // Adjust the zoom level as needed
                center: initialLocation,
            });

            // Provided locations array
            console.log(@json($locations))
            const locations = @json($locations)
            // Add markers to the map
      const markers = locations.map((location) => {
        const marker = new google.maps.Marker({
        position: location,
        title: 'location.label',
        });

        // Create an info window
        const infoWindow = new google.maps.InfoWindow({
        content: `<a href="${location.url}"><h1 style="font-weight:bold;font-size:18pt">${location.title}</h1></a>`,
        });

        // Add click listener to open the info window
        marker.addListener('click', () => {
        infoWindow.open(map, marker);
        });

        return marker;
        });

            // Initialize marker clustering
            new MarkerClusterer(map, markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m',
            });
        }

        // Load the map
        window.onload = initMap;
    </script>
