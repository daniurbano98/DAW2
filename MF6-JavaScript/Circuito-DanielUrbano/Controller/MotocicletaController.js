import { VehiculoController } from "./VehiculoController";

export class MotoController extends VehiculoController{
 
    contadorRestriccion=0;
    

    comprobarAvance(moto,circuito){
        if(circuito.tiempo=="lluvioso" && moto.traccion=="dura"){
            var n100 = Math.floor(Math.random()*100+1);
            comprobarCaida(30,n100,contadorRestriccion);
            //30%
        }else if(circuito.tiempo=="humedo" && moto.traccion=="dura" || circuito.tiempo=="lluvioso" && moto.traccion=="media"){
            var n100 = Math.floor(Math.random()*100+1);
            comprobarCaida(20,n100,contadorRestriccion);
            //20%
        }else if(circuito.tiempo=="humedo" && moto.traccion=="media"){
            var n100 = Math.floor(Math.random()*100+1);
            comprobarCaida(10,n100,contadorRestriccion);
            //10%
        }else{
            var n100 = Math.floor(Math.random()*100+1);
            comprobarCaida(5,n100,contadorRestriccion);
            //5%
        }
    }



    comprobarCaida(porcentaje,numeroRandom,contadorRestriccion){
        if(contadorRestriccion==0){
            if(numeroRandom<=porcentaje){
                contadorRestriccion=5;
            }else{
                this.avanzar();
            }
        }else{
            contadorRestriccion--;
        }

        
}
}