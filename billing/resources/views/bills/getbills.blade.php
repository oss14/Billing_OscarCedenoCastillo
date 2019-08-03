@extends('layouts.mytemplate')

@section('main')

<br>
<div>
    <div class=" d-flex justify-content-center">
        <h1 class="display-4">Detalles de las Facturas</h1>
    </div>
</div>
    
    <div class="text-right">
        <a class="btn btn-primary" href="/bills">Regresar</a>
    </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>N° de Factura</td>
          <td>Código del Producto</td>
          <td>Id Cajero</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->id_bill}}</td>
            <td>{{$bill->id_product}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->total_bill}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection