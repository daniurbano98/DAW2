<?php

if(!isset($_SESSION)){
    session_start();
}
require_once './vendor/autoload.php';
//print_r($_FILES["imgFile"]);

$miGestorImagenes = new \Intervention\Image\ImageManager();
$imagenObj = $miGestorImagenes->make($_FILES["imgFile"]["tmp_name"]);
$imagenObj->save("./resources/upload/inputImg/" . $_FILES["imgFile"]["name"]);

$nombre = "./resources/upload/inputImg/". $_FILES["imgFile"]["name"];
$_SESSION['images']['all'][]=$nombre;
var_dump($_SESSION);


if (is_file("./resources/upload/inputImg/" . $_FILES["imgFile"]["name"])) {
?>
    <HTML>

    <BODY>
        <a href="./././public/index.php">Volver</a>
        <table style="border: 1px;">
            <tr>
                <th>Imagen original</th>
                <th>Imagen retocada</th>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo "./resources/upload/inputImg/" . $_FILES["imgFile"]["name"] ?>">
                </td>
            <?php
        }
        switch ($_POST["optionImage"]) {
            case "fit":
                $imagenObj->fit(350,550);
                
                break;
            case "sharpen":
                $imagenObj->save("./resources/upload/desenfocada/". $_FILES["imgFile"]["name"]);
                $imagenObj->sharpen(50);
                $imagenObj->save("./resources/upload/enfocada/". $_FILES["imgFile"]["name"]);
                
                break;
        }
        $imagenObj->save("./resources/upload/outputImg/" . $_FILES["imgFile"]["name"],90);
        if (is_file("./resources/upload/inputImg/" . $_FILES["imgFile"]["name"])) {
            ?>
                <td>
                    <img src="<?php echo "./resources/upload/outputImg/" . $_FILES["imgFile"]["name"] ?>">
                </td>
            </tr>
        </table>
    </BODY>

    </HTML>
<?php
        }
?>