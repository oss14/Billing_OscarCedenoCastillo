@extends('layouts.mytemplate') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modificación del Producto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="id_product">Código del Producto:</label>
                <input type="text" class="form-control" name="id_product" value={{ $product->id_product }} />
            </div>

            <div class="form-group">
                <label for="name_product">Nombre del Producto:</label>
                <input type="text" class="form-control" name="name_product" value={{ $product->name_product }} />
            </div>

            <div class="form-group">
                <label for="detail_product">Detalle del Producto:</label>
                <input type="text" class="form-control" name="detail_product" value={{ $product->detail_product }} />
            </div>
            <div class="form-group">
                <label for="price_product">Precio del Producto:</label>
                <input type="text" class="form-control" name="price_product" value={{ $product->price_product }} />
            </div>

            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>
</div>
@endsection