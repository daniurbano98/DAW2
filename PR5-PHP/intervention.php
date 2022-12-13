<?php
require_once './vendor/autoload.php';
//print_r($_FILES["imgFile"]);
$miGestorImagenes = new \Intervention\Image\ImageManager();
$imagenObj = $miGestorImagenes->make($_FILES["imgFile"]["tmp_name"]);
$imagenObj->save("./resources/inputImg/" . $_FILES["imgFile"]["name"]);
if (is_file("./resources/inputImg/" . $_FILES["imgFile"]["name"])) {
?>
    <HTML>

    <BODY>
        <table style="border: 1px;">
            <tr>
                <th>Imagen original</th>
                <th>Imagen retocada</th>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo "./resources/inputImg/" . $_FILES["imgFile"]["name"] ?>">
                </td>
            <?php
        }
        switch ($_POST["optionImage"]) {
            case "blur":
                $imagenObj->blur($_POST["grade"]);
                break;
            case "bright":
                $imagenObj->brightness($_POST["grade"]);
                $imagenObj->contrast($_POST["grade"]);
                break;
            case "contrast":
                $imagenObj->contrast($_POST["grade"]);
                break;
            case "fit":
                $imagenObj->fit($_POST["width"],$_POST["height"]);
                break;
            case "sharpen":
                $imagenObj->sharpen($_POST["grade"]);
                break;
            case "invert":
                $imagenObj->invert()->invert();
                break;
        }
        $imagenObj->save("./resources/outputImg/" . $_FILES["imgFile"]["name"],90);
        if (is_file("./resources/inputImg/" . $_FILES["imgFile"]["name"])) {
            ?>
                <td>
                    <img src="<?php echo "./resources/outputImg/" . $_FILES["imgFile"]["name"] ?>">
                </td>
            </tr>
        </table>
    </BODY>

    </HTML>
<?php
        }
?>