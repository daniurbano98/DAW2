<?php 

namespace CurlShingeky;
require_once("../entity/Titan.php");
require_once("../entity/Shifter.php");

$url = "https://attackontitanapi.herokuapp.com/api/titans";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

$titans_json = json_decode($result,1);

$array_titans = [];
$array_shifter = [];

foreach ($titans_json as $titan) {
    
    $id = $titan['id'];
    $name= $titan['name'];
    $description= $titan['description'];
    $character_id= $titan['character_id'];
    $height_m= $titan['height_m'];
    $created_at= $titan['created_at'];
    $updated_at= $titan['updated_at'];
    $picture_url= $titan['picture_url'];

   
  
    $id_shifter = $titan['shifter']['id'];
    $name_shifter = $titan['shifter']['name'];
    $gender_shifter = $titan['shifter']['gender'];
    $shifter = New Shifter ($id_shifter,$name_shifter,$gender_shifter);
          
    

    $titan = New Titan($id,$name,$description,$character_id,$height_m,$created_at,$updated_at,$picture_url,$shifter);
    $array_titans[] = $titan;


    
}




?>