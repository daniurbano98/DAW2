let form = document.getElementById('form');
let submitBtn = document.getElementById('submitButton');
let submitMessage=document.getElementById('submitMessage');

form.addEventListener('submit', (validateForm));


function validateForm() {
    if(validCheck && validEmail && validName && validSelect){
        submitMessage.textContent="Formulario enviado con éxito";
    }else{
        submitMessage.textContent="Por favor comprueba que todos los campos cumplan los requisitos";
    }
}

let firstInput = form["firstInput"];
let email = form["emailInput"];
let validEmail=false;
let validCheck=false;
let validName=false;
let validSelect=false;



firstInput.addEventListener("input", valida_firstInput);
email.addEventListener("input", valida_email);


function valida_firstInput() {
    firstInput.setCustomValidity("");
    if (!firstInput.checkValidity()) { 
        if (firstInput.validity.patternMismatch) { //si incumple el pattern
        firstInput.setCustomValidity("solo entre 3 i 5 letras") // seteamos mensaje
        firstInput.reportValidity(); // mosstramos mensaje
        }
    }else{
        validName=true;
    }
}

function valida_email() {
    email.setCustomValidity("");
    if (!email.checkValidity()) { // incompleix alguna regla html?//incompleix patern?
        email.setCustomValidity("Introduce un formato de email correcto") // mostrem missatge personal
        email.reportValidity(); // mostrem el missatge d’error    
    }else{
        validEmail=true;
    }
}


const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const message = document.getElementById('message');

checkboxes.forEach(checkbox => {
  checkbox.addEventListener('change', () => {
    const checkedCount = document.querySelectorAll('input[type="checkbox"]:checked').length;

    if (checkedCount === 2) {
      message.textContent = 'Se han seleccionado 2 opciones correctamente.';
      validCheck=true;
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          checkbox.nextElementSibling.style.color = 'green';
        } else {
          checkbox.nextElementSibling.style.color = 'black';
        }
      });
    } else {
      message.textContent = 'Por favor, seleccione exactamente 2 opciones.';
      checkboxes.forEach(checkbox => {
        if (checkbox.checked) {
          checkbox.nextElementSibling.style.color = 'red';
        } else {
          checkbox.nextElementSibling.style.color = 'black';
        }
      });
    }
  });
});



const select = document.getElementById('select');
const messageSelect = document.getElementById('messageSelect');
const originalColor = select.style.backgroundColor;


select.addEventListener('change', () => {
  const selectedValue = select.value;

  if (selectedValue === '2') {
    messageSelect.textContent = 'Se ha seleccionado la segunda opción correctamente.';
    select.style.backgroundColor = 'green';
    validSelect=true;
    
  } else {
    messageSelect.textContent = 'Por favor, seleccione la segunda opción.';
    select.style.backgroundColor = originalColor;
  }
});



