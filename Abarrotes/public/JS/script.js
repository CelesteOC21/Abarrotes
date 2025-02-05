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
              <button class="btn-eliminar" data-id="${producto.id}">Quitar producto</button>
          `;
          productosSeleccionados.appendChild(nuevoCampo); // Agrega el campo al formulario

          // Agrega el evento de eliminación al botón recién creado
          const botonEliminar = nuevoCampo.querySelector(".btn-eliminar");
          botonEliminar.addEventListener("click", (e) => {
              e.preventDefault();
              nuevoCampo.remove(); // Elimina el campo del producto

              // Si no hay más productos, muestra el mensaje de "Arrastra los productos aquí"
              if (productosSeleccionados.children.length === 1) {
                  mensajeArrastrar.style.display = "block";
              }
          });
      }
  });
});