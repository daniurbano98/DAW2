
let matriz = [];
let minas = 10;



function createTable(){
    
    let table = document.getElementById("tabla");

    for (let i = 0; i < 8; i++) {
        matriz[i] = new Array(8);  //creamos en cada indice un array de 8 
    }

    for (let i = 0; i < matriz.length; i++) {
        for (let j = 0; j < matriz[i].length; j++) {
            let div = document.createElement("div");
            div.className = 'block';
            div.addEventListener("click", function() {
                let atributo=div.getAttribute("data");
                if( atributo=="bomba"){
                    div.innerHTML=div.getAttribute("data");
                    alert("has perdido");
                }else{
                    div.innerHTML=div.getAttribute("data");
                }
            });     
            matriz[i][j] = div;
            table.append(matriz[i][j]);
            
                  
        }
         
    }

   
    repartirBombas(matriz);
    repartirNumeros(matriz);
  
   
}



function repartirBombas(matriz){
    
    
    for (let i = 0; i < matriz.length; i++) {
        let random = Math.floor(Math.random() * 4);
        let posicionRandom = Math.floor(Math.random() * 8);
            
        for (let x = 0; x < matriz.length; x++) {
            while(random>0){
                if(minas==0){
                    break;
                }else{
                    matriz[i][posicionRandom].setAttribute("data", "bomba");            
                    random--;
                    minas--;
                    posicionRandom =  Math.floor(Math.random() * 8);
                }
               
            }
            
            
                       
        }
    }
}

function repartirNumeros(matriz){
    for (let i = 0; i < matriz.length; i++) {
       for (let x = 0; x < matriz.length; x++) {
            if(matriz[i][x].getAttribute("data")=="bomba"){
                continue;
            }else{
                contador = 0;
                if(i==0 && x==0){ //esquina superior izquierda
                    
                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        
                        contador++;
                    }
                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        
                        contador++;
                    }
                    if(matriz[i+1][x+1].getAttribute("data")=="bomba"){//diagonal derecha
                       
                        contador++;
                    }
                    
                    matriz[i][x].setAttribute("data",contador);
                   
                   

                }else if(i==0 && x==7){ //esquina superior derecha
                    contador = 0;
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                    contador++;
                    }
                    if(matriz[i+1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda inferior
                        contador++;
                    }
                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        contador++;
                    }
                    matriz[i][x].setAttribute("data",contador);

                }else if(i==7 && x==0){ //esquina inferior izquierda
                    contador = 0;
                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }

                    if(matriz[i-1][x+1].getAttribute("data")=="bomba"){//diagonal derecha
                        contador++;
                    }

                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        contador++;
                    }

                    matriz[i][x].setAttribute("data",contador);
                
                }else if(i==7 && x==7){
                    contador = 0;

                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                        contador++;
                    }
                    if(matriz[i-1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda superior
                        contador++;
                    }

                    matriz[i][x].setAttribute("data",contador);

                }else if(i==0){
                    contador = 0;

                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        contador++;
                    }
                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        contador++;
                    }
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                        contador++;
                    }
                    
                    if(matriz[i+1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda inferior
                        contador++;
                    }
                   
                    if(matriz[i+1][x+1].getAttribute("data")=="bomba"){//diagonal derecha inferior
                        contador++;
                    }

                    matriz[i][x].setAttribute("data",contador);

                }else if(i==7){
                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }
                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        contador++;
                    }
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                        contador++;
                    }
                    if(matriz[i-1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda superior
                        contador++;
                    }
                    if(matriz[i-1][x+1].getAttribute("data")=="bomba"){//diagonal derecha superior
                        contador++;
                    }

                    matriz[i][x].setAttribute("data",contador);
                
                }else if(x==0){
                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }
                    if(matriz[i-1][x+1].getAttribute("data")=="bomba"){//diagonal derecha superior
                        contador++;
                    }
                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        contador++;
                    }
                    if(matriz[i+1][x+1].getAttribute("data")=="bomba"){//diagonal derecha inferior
                        contador++;
                    }
                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        contador++;
                    }
                    matriz[i][x].setAttribute("data",contador);

                }else if(x==7){
                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }
                    if(matriz[i-1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda superior
                        contador++;
                    }
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                        contador++;
                    }
                    if(matriz[i+1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda inferior
                        contador++;
                    }
                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        contador++;
                    }
                    matriz[i][x].setAttribute("data",contador);
                }else{
                    if(matriz[i-1][x].getAttribute("data")=="bomba"){//arriba
                        contador++;
                    }
                    if(matriz[i-1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda superior
                        contador++;
                    }
                    if(matriz[i][x-1].getAttribute("data")=="bomba"){//izquierda
                        contador++;
                    }
                    if(matriz[i+1][x-1].getAttribute("data")=="bomba"){//diagonal izquierda inferior
                        contador++;
                    }
                    if(matriz[i+1][x].getAttribute("data")=="bomba"){ //abajo
                        contador++;
                    }
                    if(matriz[i+1][x+1].getAttribute("data")=="bomba"){//diagonal derecha inferior
                        contador++;
                    }
                    if(matriz[i][x+1].getAttribute("data")=="bomba"){//derecha
                        contador++;
                    }
                    if(matriz[i-1][x+1].getAttribute("data")=="bomba"){//diagonal derecha superior
                        contador++;
                    }
                    matriz[i][x].setAttribute("data",contador);
                }

                    
            }
        
       }
        
    }
}





   



