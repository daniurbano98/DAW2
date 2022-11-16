<?php
namespace CurlDragonBall;

require_once('../entity/Character.php');
//DRAGON BALL API

class ApiController{


public function getCharacters(){

        $url = 'https://dragon-ball-super-api.herokuapp.com/api/characters';

        $ch = curl_init($url); //iniciamos una sesión curl

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //establecemos la configuración de transferencia

        $result = curl_exec($ch); //ejecutamos la sesion

        $characters_json = json_decode($result,1); //convertimos el json en array para recorrerlo

        $array_characters = [];


        foreach ($characters_json as $character) {
            
            $id = $character['id'];
            $name= $character['name'];
            $originPlanet= $character['originplanet'];
            $role= $character['role'];
            $specie= $character['specie'];
            $status= $character['status'];
            $transform= $character['transform'];
            $universe= $character['universe'];

            $pj = New Character($id,$name,$originPlanet,$role,$specie,$status,$transform,$universe);
            $array_characters[] = $pj;
        }
            return $array_characters;
    }   
}
?>