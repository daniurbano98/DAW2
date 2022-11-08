
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
                    matriz[i][posicionRandom].innerHTML="bomba";
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
            if(matriz[i][x].innerHTML.indexOf("bomba") !== -1){
                continue;
            }else{
                contador = 0;
                if(i==0 && x==0){
                    console.log("entras");
                    if(matriz[i+1][x].innerHTML.indexOf("bomba") !== -1){ //abajo
                        contador++;
                    }
                    if(matriz[i][x+1].innerHTML.indexOf("bomba") !== -1){//derecha
                        contador++;
                    }
                    if(matriz[i+1][x+1].innerHTML.indexOf("bomba") !== -1){//diagonal derecha
                        contador++;
                    }
                    
                    matriz[i][x].innerHTML = contador;
                }
                    
            }
        
       }
        
    }
}

