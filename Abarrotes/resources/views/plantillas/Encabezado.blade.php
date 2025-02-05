<link rel="stylesheet" href="{{asset('css/styleLuis.css')}}">
<header>
  <div class="CONTENEDOR-HEADER">
    <figure class="CONTENEDOR-LOGO">
      <img src="{{asset('img/LOGO.png')}}" alt="logo" />
    </figure>
    <nav>
      <div class="CONTENEDOR-NAV">
        <a href="{{route('Clientes')}}">
          <img src="{{asset('img/CLIENTES.ico')}}">Productos</a>
        <a href="{{route('Pedidos')}}">
          <img src="{{asset('img/PEDIDOS.ico')}}">Pedidos</a>
        <a href="{{route('login')}}">
          <img src="{{asset('img/SALIR.ico')}}">Salir
        </a>
      </div>
    </nav>
  </div>
</header>