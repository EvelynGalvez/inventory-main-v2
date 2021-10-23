<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('products.index') ->with(compact('request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->validated(); //Le pasa a input todos los valores que están validados (que pasaron la condición)
        dd("El producto creado es:" ,$input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = '1';
        $codigo = '111';
        $nombre = 'Bastón Trekking';
        $categoria = 'Trekking';
        $sucursal = 'Los Leones';
        $descripcion = 'Bastón de trekking ultraliviano';
        $cantidad = '10';
        $precio = '10000';

        return view('products.show') ->with(compact('id', 'codigo', 'nombre', 'categoria', 'sucursal', 'descripcion', 'cantidad', 'precio' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = '1';
        $codigo = '111';
        $nombre = 'Bastón Trekking';
        $categoria = 'Trekking';
        $sucursal = 'Los Leones';
        $descripcion = 'Bastón de trekking ultraliviano';
        $cantidad = '10';
        $precio = '10000';

        return view('products.edit') ->with(compact('id', 'codigo', 'nombre', 'categoria', 'sucursal', 'descripcion', 'cantidad', 'precio' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Registro eliminado', 'El registro ' . $id . ' fue eliminado exitosamente');
        return redirect('/products');
    }
}
