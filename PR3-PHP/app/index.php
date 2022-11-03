<?php

//DRAGON BALL API

$url = 'https://dragon-ball-super-api.herokuapp.com/api/characters';

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$characters_json = json_decode($result,1);

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

    $pj = New Entities\Character($id,$name,$originPlanet,$role,$specie,$status,$transform,$universe);
    $array_characters[$id] = $pj;
}







?>