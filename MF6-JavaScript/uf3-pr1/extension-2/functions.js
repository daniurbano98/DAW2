let tabId;
chrome.tabs.query({ active: true, currentWindow: true },
    function (tabs) {
        let currTab = tabs[0];
        if (currTab) { tabId = currTab.id }
    }
);

//primer boton
let btn = document.getElementById("btn_info_img");
btn.addEventListener("click", click_show_alt);

function click_show_alt(evt) {
    chrome.scripting.executeScript({
        target: { "tabId": tabId },
        func: exec_show_alt,
        args: []
    });
}

function exec_show_alt(){
    const images = document.querySelectorAll("img");
    images.forEach(img => {
        img.addEventListener("mouseover", event => {
          const altText = event.target.getAttribute("alt");
          const textNode = document.createTextNode(altText);
          const div = document.createElement("div");
          div.appendChild(textNode);
          div.style.position = "absolute";
          div.style.top = `${event.clientY + 20}px`;
          div.style.left = `${event.clientX + 20}px`;
          document.body.appendChild(div);
        });
      
        img.addEventListener("mouseout", event => {
          const altText = event.target.getAttribute("alt");
          const divs = document.querySelectorAll("div");
          const div = Array.from(divs).find(el => el.textContent === altText);
          div.remove();
        });
      });
}

//segundo boton
let btn2 = document.getElementById("btn_precio_mas_bajo");
btn2.addEventListener("click", click_precio_mas_bajo);

function click_precio_mas_bajo(evt) {
    chrome.scripting.executeScript({
        target: { "tabId": tabId },
        func: exec_precio_mas_bajo,
        args: []
    });
}

function exec_precio_mas_bajo(){
  
    const elements = document.querySelectorAll('span');

    // Crear un array para almacenar los elementos que contienen "price" en su clase
    let lowestElement = null;
    let elementsWithPriceClassStartingWithUnderscore=[];

    elements.forEach(element => {
    if (element.classList.value.includes('price') && element.classList.value[0] === '_') {
        // Almacenar el elemento en el array
        elementsWithPriceClassStartingWithUnderscore.push(element);
      }
    });

    // Recorrer todos los elementos
    for (const element of elementsWithPriceClassStartingWithUnderscore) {
    // Obtener la clase del elemento como un string
    const classString = element.classList.value;

    // Crear una expresión regular para buscar solo los números en la clase
    const regex = /\d+/g;

    // Usar la expresión regular para buscar los números en la clase
    const numbers = classString.match(regex);

    // Unir los números encontrados en una sola cadena
    const numbersString = numbers.join('');

    // Convertir la cadena de números en un número
    const number = parseInt(numbersString);

    // Comparar el número con la clase más baja actual
    if (!lowestElement || number < lowestElement) {
        lowestElement = number;
        // Guardar el elemento con la clase más baja
        lowestElement = element;
    }
    }

    // Realizar alguna acción con el elemento con la clase más baja
    lowestElement.style.backgroundColor = 'yellow';
    lowestElement.scrollIntoView();


    }
