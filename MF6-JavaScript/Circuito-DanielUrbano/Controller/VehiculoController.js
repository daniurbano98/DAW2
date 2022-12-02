export class VehiculoController{

    randomIntFromInterval() { 
        let min = Math.ceil(this.velocidad_minima);
        let max = Math.floor(this.velocidad_maxima);
        return Math.floor(Math.random() * (max - min + 1) + min)
      }

      definirMovimiento() {
            if(this.constructor.name=="moto"){
                if (this.traccion=="dura"){
                    this.movimiento = randomIntFromInterval() + 5 ;
                }else if(this.traccion="mediana"){
                    this.movimiento = randomIntFromInterval() + 2 ;
                }else{
                    this.movimiento = randomIntFromInterval();
                }
            }else{
                if(this.traccion=="blanda"){
                    if(this.tiempo=="lluvioso"){
                        this.movimiento = randomIntFromInterval() + 4 ;
                    }else if(this.tiempo="humedo"){
                        this.movimiento = randomIntFromInterval() + 2 ;
                    }else{
                        this.movimiento = randomIntFromInterval();
                    }
                }else if(this.traccion=="media"){
                    if(this.tiempo=="lluvioso" || this.tiempo=="humedo" || this.tiempo=="seco"){
                        this.movimiento = randomIntFromInterval()+2; 
                    }
                }else{
                    if(this.tiempo=="lluvioso"){
                        this.movimiento = randomIntFromInterval();
                    }else if(this.tiempo=="humedo"){
                        this.movimiento = randomIntFromInterval()+2;
                    }else{
                        this.movimiento = randomIntFromInterval()+4;
                    }
                }

            }
        }
}