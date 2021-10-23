<x-app-layout>
    <!-- component -->
    <div class="flex justify-center items-center w-full bg-blue-400">
        <div class="w-1/2 bg-white rounded shadow-2xl p-8 m-4" style="padding: 30px">
            <h1 class="block w-full text-center text-gray-800 text-2xl font-bold mb-6">Ver Producto</h1>
            <form action="/" method="post">
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="first_name">ID Producto</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="first_name" id="first_name" value="{{$id}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Código Producto</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$codigo}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Nombre Producto</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$nombre}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Categoría</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$categoria}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Sucursal</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$sucursal}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Descripción</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$descripcion}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Cantidad</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$cantidad}}" readonly>
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="last_name">Precio</label>
                    <input class="border py-2 px-3 text-grey-800" type="text" name="last_name" id="last_name" value="{{$precio}}" readonly>
                </div>

            </form>

        </div>
    </div>

</x-app-layout>
