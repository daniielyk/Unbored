document.getElementById("loginForm").addEventListener("submit", function(event) {
    // Aquí puedes agregar lógica adicional, como validar los campos del formulario

    // Redirigir a otra página después de enviar el formulario
    window.location.href = "tu_otra_pagina.html"; // Cambia "tu_otra_pagina.html" por la URL de la página a la que quieres redirigir
    event.preventDefault(); // Esto evita que el formulario se envíe de manera estándar, ya que estás controlando la redirección manualmente
  });