<?php 

namespace CurlShingeky;
require_once("../entity/Titan.php");
require_once("../entity/Shifter.php");


class ApiController{

    public function getCharacters(){

        $url = "https://attackontitanapi.herokuapp.com/api/titans";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        $titans_json = json_decode($result,1);

        $array_titans = [];

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
           return $array_titans;

        }



    public function showTitans($array_titans){
        foreach ($array_titans as $titan) {
            ?>
                <tr>
                    <td><?php echo  $titan->getId(); ?></td>
                    <td><?php echo $titan->getName(); ?></td>
                    <td><?php echo $titan->getDescription(); ?></td>
                    <td><?php echo  $titan->getShifter()->getId(); ?></td>
                    <td><?php echo  $titan->getHeight_m(); ?></td>
                    <td><?php echo  $titan->getCreated_at(); ?></td>
                    <td><?php echo  $titan->getUpdated_at(); ?></td>
                    <td><?php echo  $titan->getShifter()->getId(); ?>
                        <br>
                        <?php echo $titan->getShifter()->getName();
                        ?>
                    </td>
                </tr>
            <?php
            }
    }
}

?>