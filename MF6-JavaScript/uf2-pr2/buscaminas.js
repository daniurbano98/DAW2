



function createTable(){
    let matrix = [];
    let table = document.getElementById("tabla");

    for (let i = 0; i < 8; i++) {
        matrix[i] = new Array(8);   
    }

    for (let i = 0; i < matrix.length; i++) {
        for (let j = 0; j < matrix[i].length; j++) {
            let div = document.createElement("div");
            div.className = 'block';
            matrix[i][j] = div;
            table.append(matrix[i][j]);
        }
        
    }
}