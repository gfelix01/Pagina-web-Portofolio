document.addEventListener("DOMContentLoaded", function() {
    var myButton = document.getElementById("myButton");
  
    myButton.addEventListener("click", function() {
      // Datos a enviar
      var data = {
        nombre: "John Doe",
        email: "johndoe@example.com",
        mensaje: "Hola, este es un mensaje de prueba"
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
        } else {
          alert("Ha ocurrido un error al enviar los datos");
        }
      })
      .catch(function(error) {
        alert("Ha ocurrido un error en la solicitud AJAX: " + error.message);
      });
    });
  });
  