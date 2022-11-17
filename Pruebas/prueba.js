class persona{
    constructor(nombre,edad){
        this.nombre = nombre;
        this.edad = edad;
    }
}

class abuelo extends persona{
    constructor(nombre,edad,jubilacion){
        super(nombre,edad);
        this.jubilacion=jubilacion;
    }
    

    

}

let abuelo1 = new abuelo("jose","muñoz","si");
console.log(abuelo1);