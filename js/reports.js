"use strict";

window.onload = function createList(){
    let container = document.getElementById("listContainer");
    let ul = document.createElement("ul");
    for(let i=0; i< 4; i++){
        let num = document.createElement("li");
        let estado = document.createElement("li");
        let ubicacion = document.createElement("li");
        let tipo = document.createElement("li");
        num.innerHTML = " num";
        estado.innerHTML = " estado";
        ubicacion.innerHTML = " ubicacion";
        tipo.innerHTML = " tipo";
        ul.appendChild(num);
        ul.appendChild(estado);
        ul.appendChild(ubicacion);
        ul.appendChild(tipo);
    }
    container.appendChild(ul);
}