

    var timeLeft = 30;
    var elem = document.getElementById('contador');
    var contadorVentanas=0;

    var timerId = setInterval(countdown, 1000);
    // openBlueWindow();

    function countdown() {
      if(contadorVentanas==0 && contadorVentanas<3){
        var x = screen.width/2 - 700/2;
        var y = screen.height/2 - 450/2;
        var myNewWindow = window.open("","","height=485,width=700,left="+x+",top="+y);
        myNewWindow.document.body.style.backgroundColor="blue";
        contadorVentanas++;
      }else if(contadorVentanas<3){
        var myNewWindow = window.open("","","height=485,width=700,left=500,top=500");
        myNewWindow.document.body.style.backgroundColor="red";
        contadorVentanas++;
      }

      if(timeLeft == -1){
        clearInterval(timerId);
      } else{
        elem.innerHTML = timeLeft;
        timeLeft--;
      }

      }

    // function openBlueWindow(){
    //   var myNewWindow = window.open("ej5.html","MsgWindow","height=500,width=500");
    //   myNewWindow.document.body.style.backgroundColor = "blue";
    //   myWindow.document.write("<p>I replaced the current window.</p>");
    // }





