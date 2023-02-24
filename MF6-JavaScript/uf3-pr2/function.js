let form = document.forms["form"];
let firstInput = form["firstInput"];
let email = form["emailInput"];
let checkboxs = form["check"];
const checkbox1 = document.getElementById("check1");
const checkbox2 = document.getElementById("check2");
const checkbox3 = document.getElementById("check3");



firstInput.addEventListener("input", valida_firstInput);
email.addEventListener("input", valida_email);
checkbox1.addEventListener("click", valida_checkBox);
checkbox2.addEventListener("click", valida_checkBox);
checkbox3.addEventListener("click", valida_checkBox);

function valida_firstInput() {
    firstInput.setCustomValidity("");
    if (!firstInput.checkValidity()) { // incompleix alguna regla html?
        if (firstInput.validity.patternMismatch) { //incompleix patern?
        firstInput.setCustomValidity("només entre 3 i 5 lletres") // mostrem missatge personal
        firstInput.reportValidity(); // mostrem el missatge d’error
        }
    }else{
        
    }
}

function valida_email() {
    email.setCustomValidity("");
    if (!email.checkValidity()) { // incompleix alguna regla html?//incompleix patern?
        email.setCustomValidity("Introduce un formato de email correcto") // mostrem missatge personal
        email.reportValidity(); // mostrem el missatge d’error    
    }
}




function valida_checkBox() {
    
    let contador = 0;
    for(var i =0; i < checkboxs.length; i++){
        if(checkboxs[i].checked == true){
            contador++;
            console.log(contador);

            if(contador==2){
                let div = document.createElement("div");
                div.innerHTML = "has marcado 2 bro";
            }
        }
        
    }  
    contador = 0;      
}