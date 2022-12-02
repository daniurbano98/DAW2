import { VehiculoController } from "./VehiculoController";

export class MotoController extends VehiculoController{
 
    

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