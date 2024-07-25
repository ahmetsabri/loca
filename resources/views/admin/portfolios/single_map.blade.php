<div id="map" style="width:100%;height:450px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw9HPxhdYmLJsF_xVXmEs_f2QwfaEoGho"></script>
<script>
    function initMap () {

                const a = {{ $model?->lat_lon[0]}};
                const b = {{ $model?->lat_lon[1]}};
                const initialLocation = { lat: a, lng: b };



             const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 12, // Adjust the zoom level as needed
                        center: initialLocation,
                        });


                    let marker = new google.maps.Marker({
                        position: initialLocation,
                        map: map
                        });

            }
            window.onload = initMap;
</script>
