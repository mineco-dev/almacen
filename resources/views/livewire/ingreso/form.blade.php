<div class="grid grid-cols-3">
    <form action="" class="p-8 shadow-md rounded-md text-left col-start-2" method="POST">
        @csrf

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">No. de Ingreso</span>
            <input value="{{ old('no_ingreso') }}" type="number" name="no_ingreso" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <!-- Proveedor -->

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Empresa</span>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="MINECO" required disabled>
        </label>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Bodega
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="bodega" required name="bodega">
                    <option></option>
                    <option>Compra de Stock</option>
                    <option>Compra Directa</option>
                </select>
            </div>
        </div>

        <div class="block mb-2">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="grid-state">
                Dependencia
            </label>
            <div class="relative">
                <select class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="bodega" required name="bodega">
                    <option></option>
                    <option>Dependencia 1</option>

                </select>
            </div>
        </div>

        <!-- Solicitante -->

        <!-- Programa -->

        <!-- Actividad -->

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Serie Factura</span>
            <input value="{{ old('serie_factura') }}" type="tel" name="serie_factura" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required pattern="[0-9]{8}">
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">No. Factura</span>
            <input value="{{ old('no_factura') }}" type="tel" name="no_factura" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required pattern="[0-9]{8}">
        </label>
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Fecha Factura</span>
            <input value="{{ old('fecha_factura') }}" type="email" name="fecha_factura" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>
        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Fecha de Ingreso al sistema</span>
            <input value="{{ old('fecha_sistema') }}" type="email" name="fecha_sistema" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required>
        </label>

        <label class="block mb-2">
            <span class="block text-gray-700 text-sm font-bold mb-2">Observaciones</span>
            <textarea type="text" name="observaciones" class="leading-tight shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="" required></textarea>
        </label>




        @if ($errors->any())
        <div class="text-red-500 text-sm">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2" value="Crear">



    </form>
</div>