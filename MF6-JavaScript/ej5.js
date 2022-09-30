

var timeLeft = 30;
    var elem = document.getElementById('contador');
    
    
    function countdown() {
      if (timeLeft == -1) {
        clearTimeout(timerId);

        
      } else {
        elem.innerHTML = timeLeft;
        timeLeft--;
      }
    }
    var timerId = setInterval(countdown, 1000);
