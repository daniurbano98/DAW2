
//PRIMER BOTON
let tabId;
chrome.tabs.query({ active: true, currentWindow: true } ,
    function (tabs) {
        let currTab = tabs[0];
        if (currTab) { tabId = currTab.id }
    }
);

let btn = document.getElementById("btn_change_background");
btn.addEventListener("click", click_change_background);

function click_change_background(evt) {
    evt.target.style.backgroundColor = "cyan";
    console.log("Clicado!");

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_change_background,
        args:["red"]
    });
}

function exec_change_background(valor){
    document.body.style.backgroundColor=valor;
}

//SEGUNDO BOTON
let bt2 = document.getElementById("btn_change_color_links");
bt2.addEventListener("click", click_change_color_links);

function click_change_color_links(evt){
    evt.target.style.color = "red";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_change_color_links,
        args:["red"]
    });

}

function exec_change_color_links(valor){
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].style.color = valor;
    }

}

//TERCER BOTON

let bt3 = document.getElementById("btn_delete_img");
bt3.addEventListener("click",click_delete_img);

function click_delete_img(evt){
    evt.target.style.backgroundColor = "grey";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_delete_img,
        args:[]
    });
}

function exec_delete_img(){
    var images = document.getElementsByTagName("img");
    while (images.length > 0) {
    images[0].parentNode.removeChild(images[0]);
    }
}

//CUARTO BOTON


let bt4 = document.getElementById("btn_show_ocult_password");
bt4.addEventListener("click",click_show_password);




function click_show_password(evt){
    evt.target.style.color = "red";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_show_ocult_password,
        args:[]
    });
}

function exec_show_ocult_password(){
    var input = document.getElementsByTagName("input");
        
        if(input.hasOwnProperty('is_pass') && input.is_pass==true){
            
        }
        for (let i = 0; i < input.length; i++) {
            if (input[i].type == "password") {
                if (!input[i].hasOwnProperty("isPass")) {
                    input[i].is_pass = true;
                    console.log(input[i].is_pass);
                  }
                input[i].type = "text";
            }
        }
      
}




