
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <center>
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <center>
                <p class="font-bold">Busqueda Nutriologos En Tu Zona</p>
                <p class="text-sm">La nutriología es la ciencia que estudia el proceso de alimentación y sus efectos en el metabolismo, en el estado de salud y en la composición corporal y su relación con los procesos químicos.</p>
                </center>
        </div>
        <br>
        <br>
    </center>
    <div class="flex mb-4">
        <div class="w-1/2 h-12">
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                    <p class="text-sm">Nutriologa Alma Dorantes.Tabasco s/n esq, Tamaulipas</p>
                    </div>
                </div>
            </div>
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                    <p class="text-sm">Sandra Nutrióloga López,Plaza Cuna Mágica.</p>
                    </div>
                </div>
            </div>
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                    <p class="text-sm">Innovacion Protein Cool,Rinconada del mercado independencia Lc #2.</p>
                    </div>
                </div>
            </div>
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                    <p class="text-sm">Salud Integral,Oaxaca 17 .</p>
                    </div>
                </div>
            </div>
           
            
        </div>
        <div class="w-full bg-gray-500 h-12" style="height: 450px;">
        <div id="map" style="width: 100%; height: 100%;"></div>
        </div>
    </div>
    @livewire('footer')
    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'GrGhhZ7bqifQHdC00kDZMufCZ95US7uo';
        var baseLayer = L.mapquest.tileLayer('map');
    
        L.mapquest.geocoding().geocode('Dolores Hidalgo Cuna de la Independencia Nacional, Guanajuato, Mexico', createMap);

        function createMap(error, response) {
          var location = response.results[0].locations[0];
          var latLng = location.displayLatLng;
          var map = L.mapquest.map('map', {
            center: latLng,
            layers: L.mapquest.tileLayer('hybrid'),
            zoom: 17
          });
          L.control.layers({
          'Map': baseLayer,
          'Hybrid': L.mapquest.tileLayer('hybrid'),
          'Satellite': L.mapquest.tileLayer('satellite'),
          'Light': L.mapquest.tileLayer('light'),
          'Dark': L.mapquest.tileLayer('dark')
        }).addTo(map);
        
        

        var customPopup = L.popup({ closeButton: false })
        .setLatLng(latLng)
            .setContent('<strong>' + location.adminArea5 + ', ' + location.adminArea3 + '</strong> is located here.')
            .openOn(map);
        }
        
        
        L.control.zoom({
          position: 'topright'
        }).addTo(map);

        L.mapquest.directionsControl({
          routeSummary: {
            enabled: false
          },
          narrativeControl: {
            enabled: true,
            compactResults: false
          }
        }).addTo(map);
      
      }

    </script>
</x-app-layout>