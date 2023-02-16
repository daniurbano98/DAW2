let form = document.forms["form"];
let firstInput = form["firstInput"];
let email = form["emailInput"];
let checkboxs = form["check"];
let contador = 0;


firstInput.addEventListener("input", valida_firstInput);
email.addEventListener("input", valida_email);


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
    
    for(var i =0; i < checkboxs.length; i++){
        if(checkboxs[k].checked == true){
            contador++;

            if(contador==2){
                let div = document.createElement("div");
                div.innerHTML = "has marcado 2 bro"
            }
        }
    }        
}