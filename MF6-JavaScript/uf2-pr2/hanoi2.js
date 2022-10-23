var colors = ["red", "green", "yellow", "orange", "blue"];


let arrayDiscos1 = new Array();
let arrayDiscos2 = new Array();
let arrayDiscos3 = new Array();

let piramide1 = document.getElementById("bloque-1");
let piramide2 = document.getElementById("bloque-2");
let piramide3 = document.getElementById("bloque-3");

let piramides = [
    [],[],[]  
];

console.log(piramides);

let cantDiscos;    

function creacionDiscos() {
    let discos = document.getElementById("numeroDiscos").value;
    discos = parseInt(discos);
    cantDiscos = discos;

    if (discos > 5) {
        alert("Limite 5. Introduce un numero menor");
    } else if (discos <= 0) {
        alert("Introduce un numero mayor");
    } else {
        document.getElementById("start").disabled = true;
        let array1 = new Array(discos);
        

        for (let index = 0; index < array1.length; index++) {
            let div = document.createElement("div");
            div.setAttribute("id", "disco" + index);
            document.getElementById("piramide-1").appendChild(div);       
            color(div);
            piramides[0].push(div);
            

        }
        console.log(piramides);
    }
}


function color(div) {
    
    if (div.id == "disco0") {
        div.style.backgroundColor = "orange";
        div.innerHTML = "1";
    } else if (div.id == "disco1") {
        div.style.backgroundColor = "yellow";
        div.innerHTML = "2";
    } else if (div.id== "disco2") {
        div.style.backgroundColor = "blue";
        div.innerHTML = "3";
    } else if (div.id == "disco3") {
        div.style.backgroundColor = "red";
        div.innerHTML = "4";
    } else if (div.id== "disco4") {
        div.style.backgroundColor = "green";
        div.innerHTML = "5";
    } 
}


function move_to_piramide2_from_piramide1(){
    let piramide2=document.getElementById("piramide-2");
    
    

    if(piramide2.firstElementChild==null){
        
        document.getElementById("piramide-2").prepend(piramides[0][0]);
        piramides[1].unshift(piramides[0][0]);
        piramides[0].splice(0,1);
        comprobacion(cantDiscos)
        console.log(piramides);
        
         
        
    }else if(piramide2.firstElementChild.clientWidth > piramides[0][0].clientWidth){
        document.getElementById("piramide-2").prepend(piramides[0][0]);
        piramides[1].unshift(piramides[0][0]);
        piramides[0].splice(0,1);
        comprobacion(cantDiscos)
        console.log(piramides);
        
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
   
}

function move_to_piramide3_from_piramide1(){
    let piramide3=document.getElementById("piramide-3");
 

    if(piramide3.firstElementChild==null ){
        document.getElementById("piramide-3").prepend(piramides[0][0]);
        piramides[2].unshift(piramides[0][0]);
        piramides[0].splice(0,1);
        comprobacion(cantDiscos)
        console.log(piramides);

    }else if( piramide3.firstElementChild.clientWidth > piramides[0][0].clientWidth){
        document.getElementById("piramide-3").prepend(piramides[0][0]);
        piramides[2].unshift(piramides[0][0]);
        piramides[0].splice(0,1);
        comprobacion(cantDiscos)
        console.log(piramides);
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
}

function move_to_piramide1_from_piramide2(){
    let piramide1=document.getElementById("piramide-1");
   

    if(piramide1.firstElementChild==null ){
        document.getElementById("piramide-1").prepend(piramides[1][0]);
        piramides[0].unshift(piramides[1][0]);
        piramides[1].splice(0,1);
        comprobacion(cantDiscos) 
    }else if(piramide1.firstElementChild.clientWidth > piramides[1][0].clientWidth){
        document.getElementById("piramide-1").prepend(piramides[1][0]);
        piramides[0].unshift(piramides[1][0]);
        piramides[1].splice(0,1);
        comprobacion(cantDiscos)
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }

}

function move_to_piramide3_from_piramide2(){
    let piramide3=document.getElementById("piramide-3");
 

    if(piramide3.firstElementChild==null ){
        document.getElementById("piramide-3").prepend(piramides[2][0]);
        piramides[2].unshift(piramides[1][0]);
        piramides[1].splice(0,1);
        comprobacion(cantDiscos)
    }else if(piramide3.firstElementChild.clientWidth > piramides[2][0].clientWidth){
        document.getElementById("piramide-3").prepend(piramides[2][0]);
        piramides[2].unshift(piramides[1][0]);
        piramides[1].splice(0,1);
       comprobacion(cantDiscos)
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
}

function move_to_piramide1_from_piramide3(){
    let piramide1=document.getElementById("piramide-1");
    

    if(piramide1.firstElementChild==null ){
        document.getElementById("piramide-1").prepend(piramides[2][0]);
        piramides[0].unshift(piramides[2][0]);
        piramides[2].splice(0,1);
        comprobacion(cantDiscos);
    }else if(piramide1.firstElementChild.clientWidth > piramides[2][0].clientWidth){
        document.getElementById("piramide-1").prepend(piramides[2][0]);
        piramides[0].unshift(piramides[2][0]);
        piramides[2].splice(0,1);
        comprobacion(cantDiscos);
    }
    
    
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }  
}

function move_to_piramide2_from_piramide3(){
    let piramide2=document.getElementById("piramide-2");
   

    if(piramide2.firstElementChild==null  ){
    document.getElementById("piramide-2").prepend(piramides[2][0]);
    piramides[1].unshift(piramides[2][0]);
    piramides[2].splice(0,1);
    comprobacion(cantDiscos);
    }else if(piramide2.firstElementChild.clientWidth > piramides[2][0].clientWidth){
        document.getElementById("piramide-2").prepend(piramides[2][0]);
        piramides[1].unshift(piramides[2][0]);
        piramides[2].splice(0,1); 
       comprobacion(cantDiscos);    
    }else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    } 
}

function comprobacion(cantidad){

    let div0 = document.getElementById("disco0");
    let div1 = document.getElementById("disco1");
    let div2 = document.getElementById("disco2");
    let div3 = document.getElementById("disco3");
    let div4 = document.getElementById("disco4");

   switch(cantidad){
    case 2:
        if((piramides[0].includes(div0) && piramides[0].includes(div1)) || (piramides[1].includes(div0) && piramides[1].includes(div1)) 
            ||  (piramides[2].includes(div0) && piramides[2].includes(div1))){
            alert("you win")
        } 
        break;
    case 3:
        if((piramides[0].includes(div0) && piramides[0].includes(div1) && piramides[0].includes(div2)) || (piramides[1].includes(div0) && piramides[1].includes(div1) 
            && piramides[1].includes(div2)) ||  (piramides[2].includes(div0) && piramides[2].includes(div1) && piramides[2].includes(div2))){
            alert("you win")
        } 
        break;
    case 4:
        if((piramides[0].includes(div0) && piramides[0].includes(div1) && piramides[0].includes(div2)) && piramides[0].includes(div3) || (piramides[1].includes(div0) && piramides[1].includes(div1) 
            && piramides[1].includes(div2)) && piramides[1].includes(div3) ||  (piramides[2].includes(div0) && piramides[2].includes(div1) && piramides[2].includes(div2) && piramides[2].includes(div3))){
            alert("you win")
        } 
        break;

    case 5:
        if((piramides[0].includes(div0) && piramides[0].includes(div1) && piramides[0].includes(div2) && piramides[0].includes(div3) 
        && piramides[0].includes(div4)) || (piramides[1].includes(div0) && piramides[1].includes(div1) && piramides[1].includes(div2) 
        && piramides[1].includes(div3) && piramides[1].includes(div4)) ||  (piramides[2].includes(div0) && piramides[2].includes(div1) 
        && piramides[2].includes(div2) && piramides[2].includes(div3) && piramides[2].includes(div4))){
            alert("you win")
        } 
        break;
   }

    
       
        

}




