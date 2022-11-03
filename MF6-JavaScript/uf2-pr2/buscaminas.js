
let matriz = [];
let minas = 0;



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
    
   
}

function repartirBombas(matriz){
    
    
    for (let i = 0; i < matriz.length; i++) {
            let random = Math.floor(Math.random() * 4);
            let posicionRandom = Math.floor(Math.random() * 8);
        for (let x = 0; x < matriz.length; x++) {
            
            do {    
                matriz[i][posicionRandom].innerHTML="DNASKIAF";
                console.log(random);
                random--;
                minas--;
            } while (random>0);   
        }
    }
}

