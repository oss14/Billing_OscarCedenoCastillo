@extends('layouts.app')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Un Nuevo Producto</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.store') }}">
          @csrf
          <div class="form-group">    
              <label for="id_product">Código del Producto:</label>
              <input type="text" class="form-control" name="id_product"/>
          </div>

          <div class="form-group">
              <label for="name_product">Nombre del Producto:</label>
              <input type="text" class="form-control" name="name_product"/>
          </div>

          <div class="form-group">
              <label for="detail_product">Detalle del Producto:</label>
              <input type="text" class="form-control" name="detail_product"/>
          </div>
          <div class="form-group">
              <label for="price_product">Precio del Producto:</label>
              <input type="text" class="form-control" name="price_product"/>
          </div>          
          <button type="submit" class="btn btn-primary">Agregar Producto</button>
      </form>
  </div>
</div>
</div>
@endsection