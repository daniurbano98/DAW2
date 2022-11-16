<?php 

require_once("../Model/Character.php");
require_once("../Controller/ApiController.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    
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
                use CurlDragonBall\ApiController;
                $api = new ApiController;
                $array = $api->getCharacters();
                $api->getSaiyans($array);
            ?>
            
           
        </tbody>
    </table>
    
</body>
</html>