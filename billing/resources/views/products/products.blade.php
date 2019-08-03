@extends('layouts.mytemplate')

@section('main')

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
<div class="col-sm-12">

<div class="text-center">
  <h1 class="display-3">Productos</h1>
</div>     

    <div >
    <a class="btn btn-primary" href="/home"> Regresar a Home </a>
    </div>

    <div class="text-right">
    <a style="margin: 19px;" href="{{ route('products.create')}}" class="btn btn-primary">Nuevo Producto</a>
    </div>  

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Código del Producto</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio del Producto</td>
          <td colspan = 2>Funciones a Ejecutar</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->id_product}}</td>
            <td>{{$product->name_product}}</td>
            <td>{{$product->detail_product}}</td>
            <td>{{$product->price_product}}</td>

            <td>
                <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Modificar</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection