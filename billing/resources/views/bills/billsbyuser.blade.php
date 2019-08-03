@extends('layouts.mytemplate')

@section('main')

<br>
<div class="d-flex justify-content-center">
    <h1 class="display-4">Facturas por Usuarios</h1>
</div>

<div class="text-right">
    <a class="btn btn-primary" href="/bills">Regresar</a>
</div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
          <td>ID Factura</td>
          <td>Correo Cajero</td>
          <td>Nombre del Cajero</td>
          <td>ID Cajero</td>
          <td>Precio total</td>  
        </tr>
    </thead>
    <tbody>
    @foreach($dataBill as $bill)
        <tr>
            <td>{{$bill->id}}</td>
            <td>{{$bill->email}}</td>
            <td>{{$bill->name}}</td>
            <td>{{$bill->id_user}}</td>
            <td>{{$bill->total_bill}}</td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
