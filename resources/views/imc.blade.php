<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
      <center>
      <p class="font-bold">CALCULAR INDICE DE MASA CORPORAL</p>
      <p class="text-sm">El índice de masa corporal es una razón matemática que asocia la masa y la talla de un individuo, ideada por el estadista belga Adolphe Quetelet, por lo que también se conoce como índice de Quetelet..</p>
      </center>
</div>
    {{-- <center>
        
        <br>
        <br>
        <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="peso">
              Peso 
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="peso" type="number" required name="price" min="0" value="0" step="any" placeholder="Peso">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="altura">
              Altura
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="altura" type="number" required name="price" min="0" value="0" step="any" placeholder="Altura">
        
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="btnCalcular">
              Calcular IMC
            </button>
          </div>
        </form>
        <div class="flex mb-4">
          <div class="w-1/3 h-12"></div>
          <div class="w-1/3  h-12">
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3" role="alert">
              <p class="font-bold" id="datos">IMC.</p>
            </div>
          </div>
          <div class="w-1/3 h-12"></div>
        </div>
        <br>
        <br>
        <p class="text-center text-gray-500 text-xs">
          &copy;2020 UTNG. All rights reserved.
        </p>
      </div>
      
    </center> --}}
    <script src="/js/imc.js"></script>
    <div class="yz-widget" data-calculator-type="daily_need" data-language="es" data-unit-system="metric" data-background-color="#EEEEEE" data-text-color="#212121" data-primary-color="#03A9F4" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#FFC107"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/es/calculadora-calorias-diarias">YAZIO</a></span></div>
  <script src="https://widget.yazio.com/calculator.js" async></script>
  @livewire('footer')
</x-app-layout>



