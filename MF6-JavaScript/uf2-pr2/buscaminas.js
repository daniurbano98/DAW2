
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

            let random = Math.floor(Math.random() * 4);
            let posicionRandom = Math.floor(Math.random() * 9);
            
                
            while (random>0) {
                matriz[i][posicionRandom].className='bomb';
                --random;
                       }              
        }
        
    }

   
}

// function repartirMinas(matriz){
//     let random = Math.floor(Math.random() * 4);
//     let posicionRandom = Math.floor(Math.random() * 9);
    

//     for (let i = 0; i < matriz[i].length; i++) {
        
//         do {
//             matriz[posicionRandom] = ;
//             --random;
//             } while (random>0);
            
        
       
//     }
       
              
    
// }

