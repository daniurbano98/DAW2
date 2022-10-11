var timeLeft = 30;
var elem = document.getElementById("contador");
var timerId = setInterval(countdown, 1000);
let arrayVentanas = [];




function countdown() {
  if (timeLeft == -1) {
    clearInterval(timerId);
  } else {
    elem.innerHTML = timeLeft;
    timeLeft--;
  }
}





var contadorVentanas = 0;
var ventanas = setInterval(createWindow,1000);



function firstWindow() {
  const windowFeatures = "left=700,top=100,width=320,height=320";
  let newWindow = window.open("ventana.html", "", windowFeatures);
  arrayVentanas.push(newWindow);
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
      arrayVentanas.push(newWindow);
      contadorVentanas++;
      console.log(arrayVentanas);
    }
  }
}

function randomUbication() {
  let ubication = Math.floor(Math.random() * 500);
  return ubication;
}


