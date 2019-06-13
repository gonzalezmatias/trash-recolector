
  let lati;
  let long;

  let button = document.getElementById("location");
  button.addEventListener('click', getLocation);


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
    lati= position.coords.latitude;
    long=position.coords.longitude;
    addInfoBubble(map)
    document.getElementById("message").innerHTML = "<p> Sus coordenadas fueron capturadas </p>";
  }


function addMarkerToGroup(group, coordinate) {
    let marker = new H.map.Marker(coordinate);
  // agrega datos del marker   // add custom data to the marker
    group.addObject(marker);
}

/**
 * Agrega los markers mostrando la posicion
 * Clickeando en el marker abre la info que contiene el HTML
 * map :Instancia Map con la app
 */

function addInfoBubble(map) {
    let group = new H.map.Group();

    map.addObject(group);
//  envento tap': abre la info del group
    group.addEventListener('tap', function (evt) {

//     para todos los objetos que contiene
        let bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
//     lee la info
        content: evt.target.getData()
    });
//  muestra la info
    ui.addBubble(bubble);
    }, false);
    addMarkerToGroup(group, {lat:lati, lng:long});

}

/**
 * Se inicia la api
 */

let platform = new H.service.Platform({
    app_id: 'MvGqR0bYKR3wnub7LJqq',
    app_code: 'p1NVa-vWj167lruV3HesDQ',
    useHTTPS: true
});
let pixelRatio = window.devicePixelRatio || 1;
let defaultLayers = platform.createDefaultLayers({
    tileSize: pixelRatio === 1 ? 256 : 512,
    ppi: pixelRatio === 1 ? undefined : 320
});
// ininicia el mapa en Tandil
let map = new H.Map(document.getElementById('map'),
    defaultLayers.normal.map,{
    center: {lat: -37.32167, lng: -59.13316},
    zoom: 14,
    pixelRatio: pixelRatio
});

// behavior: interacciones del mapa(paneo/zoom)
let behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
// crea la interfaz del usuario(ui)
let ui = H.ui.UI.createDefault(map, defaultLayers);

// llama a la funcion para usar el mapa
addInfoBubble(map);
