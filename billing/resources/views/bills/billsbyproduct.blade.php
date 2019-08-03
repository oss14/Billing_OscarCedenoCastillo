@extends('layouts.mytemplate')

@section('main')

<br>

<div class="d-flex justify-content-center">
    <h1 class="display-4">Facturas por Producto</h1>
</div>

<div class="text-right">
    <a class="btn btn-primary" href="/bills"> Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>N° de Factura</td>
          <td>Código del Producto</td>
          <td>Fecha de Compra</td>
          <td>ID Usuario</td>
          <td>Total Pagado</td>
          <td>Nombre del Producto</td>
          <td>Detalle del Producto</td>
          <td>Precio del Producto</td>
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->id_bill}}</td>
            <td>{{$bill->id_product}}</td>
            <td>{{$bill->created_at}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->total_bill}}</td>
            <td>{{$bill->name_product}}</td>
            <td>{{$bill->detail_product}}</td>
            <td>{{$bill->price_product}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
