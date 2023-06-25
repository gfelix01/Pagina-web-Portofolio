document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.getElementById("submitButton");
  
    submitButton.addEventListener("click", function(event) {
      event.preventDefault(); // Evitar el envío predeterminado del formulario
  
      // Obtener los valores del formulario
      var nombre = document.getElementById("nombre").value;
      var correo = document.getElementById("correo").value;
      var mensaje = document.getElementById("mensaje").value;
  
      // Crear objeto de datos
      var data = {
        nombre: nombre,
        correo: correo,
        mensaje: mensaje
      };
  
      // Realizar la solicitud AJAX
      fetch("<?php echo $_SERVER['PHP_SELF']; ?>", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify(data)
      })
      .then(function(response) {
        if (response.ok) {
          return response.text(); // Devuelve la respuesta como texto
        } else {
          throw new Error("Error en la respuesta del servidor");
        }
      })
      .then(function(message) {
        alert(message); // Muestra el mensaje de éxito enviado desde el servidor
        // Restablecer los campos del formulario después de enviarlos con éxito
        document.getElementById("nombre").value = "";
        document.getElementById("correo").value = "";
        document.getElementById("mensaje").value = "";
      })
      .catch(function(error) {
        alert("Ha ocurrido un error en la solicitud AJAX: " + error.message);
      });
    });
  
    var descripcion = document.getElementById('descripcion');
    descripcion.style.opacity = '1'; // Cambia la opacidad a 1
  });
  