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
  
  <div class="d-flex justify-content-center">
    <h1 class="display-3">Usuarios</h1>
  </div>
    

    <div >
      <a class="btn btn-primary" href="/home"> Regresar a Home </a>
    </div>
    
    <br>
  
    <table class="table table-striped">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nombre del Usuario</td>
          <td>Correo del Usuario</td>
          <td colspan = 2>Funciones a Ejecutar</td>
        </tr>
      </thead>
    
      <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Modificar</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
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