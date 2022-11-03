<?php 

require_once("../entity/Character.php");
require_once("index.php");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRAGON BALL API</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>DRAGON BALL API</th>
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
                foreach ($array_characters as $character) {?>
                    <tr>
                    <td><?php echo ("id: ".$character->getId());?></td>
                    <td><?php echo ("name: ".$character->getName());?></td>
                    <td><?php echo ("origin planet: ".$character->getOriginPlanet());?></td>
                    <td><?php echo ("role: ".$character->getRole());?></td>
                    <td><?php echo ("specie: ".$character->getSpecie());?></td>
                    <td><?php echo ("status: ".$character->getStatus());?></td>
                    <td><?php echo ("transform: ".$character->getTransform());?></td>
                    <td><?php echo ("universe: ".$character->getUniverse());?></td>
                   </tr>
                  
                   <?php
                 }
                 ?>
            
           
        </tbody>
    </table>
    
</body>
</html>