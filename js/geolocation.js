'use strict'
  let button = document.getElementById("location");
  document.addEventListener('click', getLocation);

  function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      button.innerHTML = "Geolocation is not supported by this browser.";
    }
  }

  function showPosition(position) {
    console.log("Latitude: " + position.coords.latitude);
    console.log("Longitude: " + position.coords.longitude)
    // Acá hay que poner donde queremos mandar las coordenadas
    // x.innerHTML = "Latitude: " + position.coords.latitude +
    // "<br>Longitude: " + position.coords.longitude;
  }
