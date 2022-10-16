let timeLeft = 30;
let timerId = setInterval(countdown, 1000);
let arrayVentanas = new Array();
let contadorVentanas = 0;
let ventanas = setInterval(createWindow, 1000);
let contabilizadorVentanas = 0;
let resultadoPartida = false;
let totalWindows = 0;




function comprobacionContadorVentanas(contador){
  if(contador==0){
    clearInterval(timerId);
    document.getElementById("mensajeVictoria").innerHTML="¡Felicidades, has ganado!";
    document.getElementById("stop").disabled=true;
    
  }
}


function stopGame(){
  clearInterval(timerId);
  document.getElementById("mensajeDerrota").innerHTML="Lo siento, has perdido. Sigue intentándolo";
  document.getElementById("stop").disabled=true;
  for (let index = 0; index < arrayVentanas.length; index++) {
    arrayVentanas[index].close();
    
  }
}

function countdown() {
  if (timeLeft == -1) {
    clearInterval(timerId);
    document.getElementById("mensajeDerrota").innerHTML="Lo siento, has perdido. Sigue intentándolo";
    document.getElementById("stop").disabled=true;
    for (let index = 0; index < arrayVentanas.length; index++) {
      arrayVentanas[index].close();     
    }
  } else {
    document.getElementById("contador").innerHTML = timeLeft;
    timeLeft--;
  }
}



function firstWindow() {
  const windowFeatures = "left=700,top=100,width=320,height=320";
  let newWindow = window.open("ventana.html", "", windowFeatures);
  contadorVentanas++;
  totalWindows++;
  document.getElementById("contadorVentanas").innerHTML=contadorVentanas;
  document.getElementById("totalWindows").innerHTML=totalWindows;
}



function createWindow() {
  if (contadorVentanas == 0) {
    firstWindow();
  } else {
    if (contadorVentanas == 3) {
      clearInterval(ventanas);
    } else {
      let windowFeatures =
        "left=" +
        randomUbication() +
        "," +
        "top=" +
        randomUbication() +
        "," +
        "width=320,height=320";
      let newWindow = window.open("ventana.html", "", windowFeatures);
      contadorVentanas++;
      totalWindows++;
      document.getElementById("totalWindows").innerHTML=totalWindows;
      document.getElementById("contadorVentanas").innerHTML=contadorVentanas;
      comprobacionContadorVentanas(contadorVentanas);

    }
  }
}

function randomUbication() {
  let ubication = Math.floor(Math.random() * 500);
  return ubication;
}

function oneWindow() {
  window.open("ventana.html", "", "left=" + randomUbication() + "," + "top=" + randomUbication() + "," +"width=320,height=320");
  contadorVentanas++;
  totalWindows++;
  document.getElementById("totalWindows").innerHTML=totalWindows;
  document.getElementById("contadorVentanas").innerHTML=contadorVentanas;
  comprobacionContadorVentanas(contadorVentanas);
}

function addWindow(window) {
  arrayVentanas.push(window);
}

function comprobacionPantallas(window) {

  if (arrayVentanas.length == 1) {
    console.log("una ventana");
  }
  if (arrayVentanas.length == 2) {
    console.log("dos ventanas");
    if (arrayVentanas[0] == arrayVentanas[1]) {
      oneWindow();
    }
    else if (arrayVentanas[0] != arrayVentanas[1] &&
      arrayVentanas[0].document.body.style.backgroundColor == arrayVentanas[1].document.body.style.backgroundColor) {
      arrayVentanas[0].close();
      arrayVentanas[1].close();
      contadorVentanas -= 2;
      document.getElementById("contadorVentanas").innerHTML = contadorVentanas;
      comprobacionContadorVentanas(contadorVentanas);

    }
    arrayVentanas = [];
  }  
}





