'use strict'
  let button = document.getElementById("location");
  document.addEventListener('click', getLocation);

  function getLocation() { //Función que obtiene las coordenadas actuales de la persona que presiona el botón
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      button.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) { //Envia las coordenadas a los input ocultos para poder subirlos a la BD
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;
    document.getElementById("message").innerHTML = "<p> Sus coordenadas fueron capturadas </p>";
  }
