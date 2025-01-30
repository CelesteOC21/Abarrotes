@extends('app')
@section('content')
<link rel="stylesheet" href="{{asset('css/styleJessiel.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="BODY">
  <div class="container-titulo">
    <h2 class="titulo-pedidos">Gestión de pedidos</h2>
  </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#" id="btnProceso">En proceso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" id="btnProceso">Entregado</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Número de pedido..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </nav>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title" id="tituloPedido">Pedido #1</h5>
      <p class="card-text" id="textoPedido">Contiene:</p>
      <a href="#" class="btn btn-danger">Cancelar pedido</a>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title" id="tituloPedido">Pedido #2</h5>
      <p class="card-text" id="textoPedido">Contiene:</p>
      <a href="#" class="btn btn-danger">Cancelar pedido</a>
    </div>
  </div>
</div>

@endsection