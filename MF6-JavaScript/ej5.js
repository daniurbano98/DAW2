let contador;

function cuentaAtras(){

    segundos = document.getElementById("contador").value;

        contador = setInterval(function(){
            
            if(segundos == 0){
                clearInterval(contador);
                mensaje.textContent = "se viene";
            }else{
                segundos--;
                }
        },1000);
   
   
}

cuentaAtras();