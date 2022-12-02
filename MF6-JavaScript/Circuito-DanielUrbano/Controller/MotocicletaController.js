import { VehiculoController } from "./VehiculoController";

export class MotoController extends VehiculoController{
 
    definirMovimiento() {
        if (this.traccion=="dura"){
            this.movimiento = randomIntFromInterval() + 5 ;
        }else if(this.traccion="mediana"){
            this.movimiento = randomIntFromInterval() + 2 ;
        }else{
            this.movimiento = randomIntFromInterval();
        }
    }

    comprobarAvance(moto,circuito){
        if(circuito.tiempo=="lluvioso" && moto.traccion=="dura"){
            //30%
        }else if(circuito.tiempo=="humedo" && moto.traccion=="dura" || circuito.tiempo=="lluvioso" && moto.traccion=="media"){
            //20%
        }else if(circuito.tiempo=="humedo" && moto.traccion=="media"){
            //10%
        }else{
            //5%
        }
    }

    comprobarCaida(caida){
        if(caida==true){
            //5 movimientos sin avanzar
    }
}
}