<?php 

require_once("../Model/Titan.php");
require_once("../Controller/ApiController.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styles.css">
    <title>SHINGEKY API</title>
</head>
<body>
<table class="table">
        <thead>
            <tr>
                <th>SHINGEKY API</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">ID</td>
                <td>NAME</td>
                <td>DESCRIPTION</td>
                <td>characted_id</td>
                <td>height_m</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>shifter</td>
            </tr>

            <?php 
                use CurlShingeky\ApiController;
                $api = new ApiController;
                $array = $api->getCharacters();
                $api->showTitans($array);    
                
            ?>
            
           
        </tbody>
    </table>
    
</body>
</html>