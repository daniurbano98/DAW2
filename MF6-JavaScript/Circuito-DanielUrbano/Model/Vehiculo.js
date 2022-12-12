class Vehiculo{
    modelo;
    traccion;
    movimiento;
    velocidadMinima;
    velocidadMaxima;
    
    constructor(modelo,traccion,velocidadMinima,velocidadMaxima){
        this.modelo = modelo;
        this.traccion = traccion;
        this.velocidadMinima = velocidadMinima;
        this.velocidadMaxima = velocidadMaxima;
    }
}