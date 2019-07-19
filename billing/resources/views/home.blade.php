@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    </div>
</div>



<head>
  <title>Mi Carrusel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.qualtrics.com/blog/wp-content/uploads/2018/08/shutterstock_1068141515.jpg" alt="Books" width="1100" height="500">
      <div class="carousel-caption">
        <a class="btn btn-primary btn-lg" href="{{ route('products.index')}}">Productos</a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://hr-pulse.org/wp-content/uploads/2014/06/business-people-working-together-istock_000017346252medium.jpg" alt="Usuarios" width="1100" height="500">
      <div class="carousel-caption">
        <a class="btn btn-primary btn-lg" href="{{ route('users.index') }}">Usuarios</a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="https://images.wallpaperscraft.com/image/table_paper_pens_writing_67592_1680x1050.jpg" alt="Facturas" width="1100" height="500">
      <div class="carousel-caption">
        <a class="btn btn-primary btn-lg">Facturas</a>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>

@endsection
