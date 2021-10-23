<x-app-layout>
<div class="mt-10 sm:mt-0">
    <div class="justify-center md:grid md:grid-cols-1 md:gap-6">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Asociar Producto a Sucursal</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        <em>Seleccione el producto y su sucursal</em>
                    </p>
                </div>
            </div>

            <div class="relative inline-flex">

            {!! Form::open(['route' => 'sucursales.store', 'method'=>'post']) !!}

                <div class="shadow overflow-hidden sm:rounded-md bg-white">
                    <x-jet-validation-errors class="mb-4"></x-jet-validation-errors>
                </div>
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white xl:p-12">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                {{Form::label('productlist','Nombre Producto',['class'=>'block text-sm font-medium text-gray-700'])}}
                                {{Form::select('productlist', ['' =>'Seleccione','PROD-1' => 'Baston trekking', 'PROD-2' => 'Carpa','3' => 'Mochila 60LT'],'',['class'=>'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'])}}
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                {{Form::label('sucursallist','Sucursal',['class'=>'block text-sm font-medium text-gray-700'])}}
                                {{Form::select('sucursallist', ['' =>'Seleccione','1' => 'Parque Arauco', '2' => 'Los Leones','3' => 'Mall Sport'],'',['class'=>'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'])}}
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    {{Form::submit('Asociar Producto',['class'=>'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'])}}
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</x-app-layout>
