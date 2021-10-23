<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Crear Producto
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 xl:px-0">

        </div>

    </x-slot>

    {!! Form::open(['route' => 'products.store']) !!}

    <x-jet-validation-errors class="mb-4"/>

    {{Form::label('id', 'ID Producto', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('id', null, ['style' => 'width:80px; margin-top: 30px;' ])}}

    {{Form::label('codigo', 'Codigo del Producto', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('codigo', null, ['style' => 'width:120px; margin-top: 30px;'])}}

    {{Form::label('nombre', 'Nombre del Producto', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('nombre', null, ['style' => 'width:200px; margin-top: 30px;' ])}}

    {{Form::label('categoria', 'Categoría', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('categoria', null, ['style' => 'width:200px; margin-top: 30px;' ])}}

    {{Form::label('sucursal', 'Sucursal', ['style' => 'margin-left: 5px;' ])}}
    {{Form::select('sucursal', ['1' => 'Los Leones', '2' => 'Parque Arauco', '3' => 'Mall Sport'], null, ['placeholder' => 'Selecciona sucursal...'], ['style' => 'width:200px; margin-top: 30px;'])}}

    <br>

    {{Form::label('descripcion', 'Descripcion', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('descripcion', null, ['style' => 'width:200px; margin-top: 30px;' ])}}

    {{Form::label('cantidad', 'Cantidad', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('cantidad', null, ['style' => 'width:200px; margin-top: 30px;' ])}}

    {{Form::label('precio', 'Precio venta', ['style' => 'margin-left: 5px;' ])}}
    {{Form::text('precio', null, ['style' => 'width:200px; margin-top: 30px;' ])}}

    {{Form::submit('Crear Producto', ['style' => 'width:120px; margin-left: 15px;'])}}

    //
    {!! Form::close() !!}


</x-app-layout>
