<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //devuelve una vista que contenga un formulario 
        return view('products.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_product'=>'required',
            'name_product'=>'required',
            'detail_product'=>'required',
            'price_product'=>'required'
        ]);


        $product = new Product([
            'id_product' => $request->get('id_product'),
            'name_product' => $request->get('name_product'),
            'detail_product' => $request->get('detail_product'),
            'price_product' => $request->get('price_product')
        ]);
        $product->save();

        return redirect('/products')->with('success', 'Producto guardado con exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::find($id);
        return view('products.updateproduct', compact('product')); 
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
        $request->validate([
            'id_product'=>'required',
            'name_product'=>'required',
            'detail_product'=>'required',
            'price_product'=>'required'
        ]);

        $product = Product::find($id);
        $product->id_product =  $request->get('id_product');
        $product->name_product = $request->get('name_product');
        $product->detail_product = $request->get('detail_product');
        $product->price_product = $request->get('price_product');
        $product->save();

        return redirect('/products')->with('success', 'Producto Modificado con Éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('success', 'Producto Eliminado Correctamente!');
    }
}
