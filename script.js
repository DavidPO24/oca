const listaJ =document.querySelector('#jugadores');
const btnSumar = document.querySelector('#sumarJ');
const btnRestar = document.querySelector('#restarJ');
const MAX_JUGADORES = 4;
const MIN_JUGADORES = 2;
let numJ;

function addPlayer() {
    numJ++;
    const playerDiv = document.createElement('div');
    playerDiv.id = numJ;
    listaJ.appendChild(playerDiv);
    const nombre = document.createElement('input');
    const color =  document.createElement('select');
    const options = ["Amarillo", "Rojo",  "Verde",  "Azul"];
    nombre.type = 'text';
    nombre.id = 'nombre' + numJ;
    nombre.name = 'nombre' + numJ;
    color.id = 'color' + numJ;
    color.name = 'color' + numJ;
    playerDiv.appendChild(nombre);

    options.forEach((element, key) => {
       color[key] = new Option(element, element);
      });
    playerDiv.appendChild(color);
    
    listaJ.appendChild(playerDiv);
    actualizaBotones(numJ);  
}

function removePlayer() {
    const eliminado = document.getElementById(numJ);
    eliminado.remove();
    numJ--;
    actualizaBotones(numJ);
}

function actualizaBotones(){
    sumarJ.style.display = "block"; 
    restarJ.style.display = "block";
    if(numJ > MAX_JUGADORES - 1)
        sumarJ.style.display = "none"; 
    else if(numJ < MIN_JUGADORES + 1)
        restarJ.style.display = "none";
}

document.addEventListener("DOMContentLoaded", (event) => {
    numJ = 0;
    for(i = 0; i < MIN_JUGADORES; i++){
        addPlayer();
    }
});
