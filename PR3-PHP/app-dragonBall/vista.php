<?php 

require_once("../entity/Character.php");
require_once("ApiController.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    
    <title>DRAGON BALL API</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>SAIYANS API</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">ID</td>
                <td>NAME</td>
                <td>ORIGIN PLANET</td>
                <td>ROLE</td>
                <td>SPECIE</td>
                <td>STATUS</td>
                <td>TRANSFORM</td>
                <td>UNIVERSE</td>
            </tr>

            <?php
                $api = new CurlDragonBall\ApiController;
                $array = $api->getCharacters();


                foreach ($array as $character) {
                    if($character->getSpecie()=='Saiyan'){ //Filtro por esta caracteristica
                        ?>
                        <tr>
                        <td><?php echo  $character->getId();?></td>
                        <td><?php echo $character->getName();?></td>
                        <td><?php echo  $character->getOriginPlanet();?></td>
                        <td><?php echo  $character->getRole();?></td>
                        <td><?php echo  $character->getSpecie();?></td>
                        <td><?php echo  $character->getStatus();?></td>
                        <td><?php echo $character->getTransform();?></td>
                        <td><?php echo  $character->getUniverse();?></td>
                   </tr>
                   <?php }
                 }
                 ?>
            
           
        </tbody>
    </table>
    
</body>
</html>