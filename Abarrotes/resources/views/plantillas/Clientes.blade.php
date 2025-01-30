@extends('app')
@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="apartados">
  <div class="apartado-pedidos">
    <form id="formulario-pedido">
      <div id="campos-dinamicos">
        <p class="mensaje-arrastrar">Arrastra los productos aquí</p>
      </div>
    </form>
  </div>
  <div class="apartado-catalogo">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Costo</th>
        </tr>
      </thead>
      <tbody>
        <tr draggable="true" id="producto-1">
          <th scope="row">1</th>
          <td>Producto 1</td>
          <td>$10.00</td>
        </tr>
        <tr draggable="true" id="producto-2">
          <th scope="row">2</th>
          <td>Producto 2</td>
          <td>$15.00</td>
        </tr>
        <tr draggable="true" id="producto-3">
          <th scope="row">3</th>
          <td>Producto 3</td>
          <td>$20.00</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="apartado-boton">
  <button class="btn boton-hacer_pedido" type="submit">Hacer pedido</button>
</div>
<script src="JS/script.js"></script>
@endsection