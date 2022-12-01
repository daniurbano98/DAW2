class Telefono{
    constructor(marca){
        this.marca = marca;
    }
}

class Modelo extends Telefono{
    constructor(marca,modelo){
        super(marca);
        this.modelo = modelo;
    }
}


class persona{
    constructor(nombre,edad){
        this.nombre = nombre;
        this.edad = edad;
    }
}

class abuelo extends persona{
    constructor(nombre,edad,jubilacion){
        super(nombre,edad);
        this.jubilacion = jubilacion;
    }
}

let abuelo1 = new abuelo("jose","muñoz","si");
console.log(abuelo1);


class Person{
}

var obj = new Person();
console.log(obj.constructor.name);


function humano(first,last,age,eyecolor){
    this.first=first;
    this.lastName=last;
    this.age=age;
    this.eyecolor=eyecolor;
}

let humano1 = new humano("dani","urbano","18","blue");

humano.prototype.nationality="Spanish" ;

console.log(humano1.nationality);




humano.prototype.name = function (){
   return this.first + " " + this.lastName
};



console.log(humano1.name());

console.log(humano);





