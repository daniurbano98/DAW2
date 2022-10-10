

var timeLeft = 30;
var elem = document.getElementById('contador');
var contadorVentanas = 0;
var timerId = setInterval(countdown, 1000);
var arrayVentanas = [];
var colors = ['red', 'green', 'pink', 'orange', 'yellow'];

// openBlueWindow();

function countdown() {
  createWindow();

  if (timeLeft == -1) {
    clearInterval(timerId);
  } else {
    elem.innerHTML = timeLeft;
    timeLeft--;
  }

}


function createWindow(){
  while(contadorVentanas<3){
    const windowFeatures = "left=100,top=100,width=320,height=320";
    let newWindow = window.open('ventana.html','',windowFeatures);
    // newWindow.document.body.style.backgroundColor = randomColor();
    contadorVentanas++;
  }
}




function randomColor() {
  let index = Math.floor(Math.random() * 4);
  colors[index];
  console.log(colors[index]);
  return colors[index];

}







