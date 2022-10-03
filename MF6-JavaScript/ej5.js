

var timeLeft = 30;
var elem = document.getElementById('contador');
var contadorVentanas = 0;
var timerId = setInterval(countdown, 1000);
var arrayVentanas = [];

// openBlueWindow();

function countdown() {
  ventanas();


  if (timeLeft == -1) {
    clearInterval(timerId);
  } else {
    elem.innerHTML = timeLeft;
    timeLeft--;
  }

}


function ventanas(){
  if (contadorVentanas == 0 && contadorVentanas < 3) {
    var x = screen.width / 2 - 700 / 2;
    var y = screen.height / 2 - 450 / 2;
    var myNewWindow = window.open("", "", "height=485,width=700,left=" + x + ",top=" + y);
    myNewWindow.document.body.style.backgroundColor = "blue";
    myNewWindow.document.body.innerHTML = "AZUL";
    contadorVentanas++;
  } else if (contadorVentanas < 3) {
    arrayVentanas.push(createWindow());
    contadorVentanas++;
  }
}

function createWindow(){
  var random = Math.floor(Math.random() * 5);
  
  switch(random){
    case 0:
      var myNewWindow = window.open("", "", "height=485,width=700,left=500,top=500");
      myNewWindow.document.body.style.backgroundColor = "red";
      myNewWindow.document.body.innerHTML = "ROJO";
      var button = myNewWindow.document.createElement('button');
      button.type = 'button';
      button.setAttribute('id', 'button');
      button.innerText = 'ROJO';
      document.body.appendChild(button);
      button.addEventListener('click', () => {
          
      }, false);
      break;
    case 1:
      var myNewWindow = window.open("", "", "height=485,width=700,left=500,top=500");
      myNewWindow.document.body.style.backgroundColor = "yellow";
      myNewWindow.document.body.innerHTML = "AMARILLO";
      break;
    case 2:
      var myNewWindow = window.open("", "", "height=485,width=700,left=500,top=500");
      myNewWindow.document.body.style.backgroundColor = "green";
      myNewWindow.document.body.innerHTML = "VERDE";
      break;
    case 3:
      var myNewWindow = window.open("", "", "height=485,width=700,left=500,top=500");
      myNewWindow.document.body.style.backgroundColor = "orange";
      myNewWindow.document.body.innerHTML = "NARANJA";
      break;
    case 4:
      var myNewWindow = window.open("", "", "height=485,width=700,left=500,top=500");
      myNewWindow.document.body.style.backgroundColor = "pink";
      myNewWindow.document.body.innerHTML = "ROSA";
      break;

  }

}

    // function openBlueWindow(){
    //   var myNewWindow = window.open("ej5.html","MsgWindow","height=500,width=500");
    //   myNewWindow.document.body.style.backgroundColor = "blue";
    //   myWindow.document.write("<p>I replaced the current window.</p>");
    // }





