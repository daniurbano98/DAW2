<?php 

require_once("../entity/Titan.php");
require_once("ApiController.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
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

                $api = new CurlShingeky\ApiController;
                $array = $api->getCharacters();

                foreach ($array as $titan) {
                    
                        ?>
                        <tr>
                        <td><?php echo  $titan->getId();?></td>
                        <td><?php echo $titan->getName();?></td>
                        <td><?php echo $titan->getDescription();?></td>
                        <td><?php echo  $titan->getShifter()->getId();?></td>
                        <td><?php echo  $titan->getHeight_m();?></td>
                        <td><?php echo  $titan->getCreated_at();?></td>
                        <td><?php echo  $titan->getUpdated_at();?></td>
                        <td><?php echo  $titan->getShifter()->getId();?>
                        <br>
                            <?php echo $titan->getShifter()->getName();
                                  ?></td>
                        </tr>
                   <?php 
                 }
                 ?>
            
           
        </tbody>
    </table>
    
</body>
</html>