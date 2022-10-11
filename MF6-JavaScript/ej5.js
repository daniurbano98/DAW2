var timeLeft = 30;
var elem = document.getElementById("contador");
var timerId = setInterval(countdown, 1000);
let arrayVentanas = new Array();





function countdown() {
  if (timeLeft == -1) {
    clearInterval(timerId);
  } else {
    elem.innerHTML = timeLeft;
    timeLeft--;
  }
}





var contadorVentanas = 0;
var ventanas = setInterval(createWindow, 1000);



function firstWindow() {
  const windowFeatures = "left=700,top=100,width=320,height=320";
  let newWindow = window.open("ventana.html", "", windowFeatures);
  contadorVentanas++;


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

    }
  }
}

function randomUbication() {
  let ubication = Math.floor(Math.random() * 500);
  return ubication;
}

function oneWindow() {
  window.open("ventana.html", "", "left=700,top=100,width=320,height=320");
}

function addWindow(window) {
  arrayVentanas.push(window);
}

function comprobacionPantallas() {

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

    }
    arrayVentanas = [];


  }

  
}

function longitudArray() {
  return arrayVentanas.length;
}

function array() {
  return arrayVentanas;
}

