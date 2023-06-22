document.addEventListener("DOMContentLoaded", function() {
  var submitButton = document.getElementById("submitButton");
  
  submitButton.addEventListener("click", function(event) {
    event.preventDefault(); // Evitar el envío predeterminado del formulario

    // Obtener los valores del formulario
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var mensaje = document.getElementById("mensaje").value;

    // Crear objeto de datos
    var data = {
      nombre: nombre,
      email: email,
      mensaje: mensaje
    };

    // Realizar la solicitud AJAX
    fetch("url_del_servidor", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
    .then(function(response) {
      if (response.ok) {
        alert("Datos enviados correctamente");
        // Restablecer los campos del formulario después de enviarlos con éxito
        document.getElementById("nombre").value = "";
        document.getElementById("email").value = "";
        document.getElementById("mensaje").value = "";
      } else {
        alert("Ha ocurrido un error al enviar los datos");
      }
    })
    .catch(function(error) {
      alert("Ha ocurrido un error en la solicitud AJAX: " + error.message);
    });
  });
});

window.addEventListener('DOMContentLoaded', function() {
  var descripcion = document.getElementById('descripcion');
  descripcion.style.opacity = '2'; // Cambia la opacidad a 1
});
