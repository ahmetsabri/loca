<!-- Modal toggle -->
<button data-modal-target="default-modal" data-modal-toggle="default-modal"
    class="block text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800 mt-6 w-full"
    type="button">
    Konum
</button>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Konum 📍
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 ">
            <div id="map" class="w-full h-52"></div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Tamam
                </button>
            </div>
        </div>
    </div>
</div>
    <input type="hidden" name="location" value="@if(isset($model)) {{ $model->location }} @endif" id="location">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw9HPxhdYmLJsF_xVXmEs_f2QwfaEoGho"></script>
    <script>
            function initMap () {

                @if(isset($model?->location))
                const a = {{ $model?->lat_lon[0]}};
                const b = {{ $model?->lat_lon[1]}};
                const initialLocation = { lat: a, lng: b };

                @else
                const initialLocation = { lat: 36.8121, lng: 34.6415 };
                @endif

             const map = new google.maps.Map(document.getElementById("map"), {
                        zoom: 12, // Adjust the zoom level as needed
                        center: initialLocation,
                        });


                    let marker = new google.maps.Marker({
                        position: initialLocation,
                        map: map
                        });

                map.addListener("click", (event) => {
                    const clickedLocation = event.latLng;

                    if (marker) {
                        marker.setMap(null);
                    }
                    marker = new google.maps.Marker({
                        position: clickedLocation,
                        map: map,
                    });
                  document.getElementById("location").value = clickedLocation.toString();
                });
            }
            window.onload = initMap;
    </script>
