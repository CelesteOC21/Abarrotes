@extends('index')
@section('content')
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
    const productosSeleccionados = document.getElementById("campos-dinamicos");
    const mensajeArrastrar = document.querySelector(".mensaje-arrastrar");

    // Selecciona todas las filas de la tabla que son arrastrables
    const filas = document.querySelectorAll(".apartado-catalogo tbody tr");

    filas.forEach((fila) => {
        fila.addEventListener("dragstart", (e) => {
            // Guarda el ID y los datos del producto que se está arrastrando
            const producto = {
                id: fila.id,
                nombre: fila.children[1].textContent,
                costo: fila.children[2].textContent,
            };
            e.dataTransfer.setData("application/json", JSON.stringify(producto));
        });
    });

    // Área de soltar
    const formulario = document.getElementById("formulario-pedido");

    formulario.addEventListener("dragover", (e) => {
        e.preventDefault(); // Permite soltar el elemento
    });

    formulario.addEventListener("drop", (e) => {
        e.preventDefault();
        const producto = JSON.parse(e.dataTransfer.getData("application/json")); // Obtiene los datos del producto

        if (producto) {
            // Oculta el mensaje de "Arrastra los productos aquí"
            if (mensajeArrastrar) {
                mensajeArrastrar.style.display = "none";
            }

            // Crea un nuevo campo para el producto
            const nuevoCampo = document.createElement("div");
            nuevoCampo.className = "campo-producto";
            nuevoCampo.innerHTML = `
                <label for="producto-${producto.id}">${producto.nombre} (${producto.costo})</label>
                <input type="number" id="producto-${producto.id}" name="producto-${producto.id}" placeholder="Cantidad" min="1" required>
            `;
            productosSeleccionados.appendChild(nuevoCampo); // Agrega el campo al formulario
        }
    });
});
    </script>
@endsection