document.addEventListener("DOMContentLoaded", function() {
  var submitButton = document.getElementById("submitButton");
   submitButton.addEventListener("click", function(event) {
    event.preventDefault();
     var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var mensaje = document.getElementById("mensaje").value;
     if (nombre.trim() === "" || correo.trim() === "" || mensaje.trim() === "") {
      alert("Por favor, complete todos los campos del formulario");
      return;
    }
     if (!isValidEmail(correo)) {
      alert("Por favor, ingrese un correo electrónico válido");
      return;
    }
     var data = {
      nombre: nombre,
      correo: correo,
      mensaje: mensaje
    };
     fetch("https://localhost/PORTAFOLIO/index.html", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
      .then(function(response) {
        if (response.ok) {
          return response.text();
        } else {
          throw new Error("Error en la respuesta del servidor");
        }
      })
      .then(function(message) {
        alert(message);
        document.getElementById("nombre").value = "";
        document.getElementById("correo").value = "";
        document.getElementById("mensaje").value = "";
      })
      .catch(function(error) {
        alert("Ha ocurrido un error en la solicitud AJAX: " + error.message);
      });
  });
   var descripcion = document.getElementById('descripcion');
  descripcion.style.opacity = '1';
});
 function isValidEmail(email) {
  // Validación de correo electrónico
  // Implementar lógica de validación de correo electrónico aquí
}