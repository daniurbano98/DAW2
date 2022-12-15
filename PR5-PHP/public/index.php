<?php 
   
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<BODY>

    <div class="d-inline-flex p-2">
        <div class="container">
            <form action="POST" action="../processImage.php" enctype="multipart/form-data">
                <h1>VER IMAGENES</h1>
                <select name="optionViewImage">
                    <?php 
                        foreach ($_SESSION['images']['all'] as $foto ) {
                            ?>   
                            <option value="<?php echo $foto;?>"><?php echo $foto;?></option>;
                            <?php
                        }?>
                </select>
                <input type="submit" value="Ver"></input><br><br>
                <label>Ver enfocadas</label><input type="checkbox" name="enfocadas" id="enfocadas"><br>
                <label>Ver desenfocadas</label><input type="checkbox" name="desenfocadas" id="desenfocadas"><br>
                <label>Ver todas</label><input type="checkbox" name="todas" id="todas"><br><br>
                <input type="submit" value="Submit"></input>
            </form>
        </div>

        <div class="container">
            <FORM method="POST" action="../processImage.php" enctype="multipart/form-data">
                <h1>SUBIR IMAGENES</h1>
                <br><LABEL>Sube la imagen</LABEL><br><input type="file" name="imgFile">
                <br><LABEL>¿Qué desea hacer con la imagen?</LABEL><br>
                <select name="optionImage">
                    <option value="blur" selected>Borrosidad</option>
                    <option value="bright" selected>Brillo</option>
                    <option value="fit">Redimension</option>
                    <option value="sharpen">sharpen</option>
                    <option value="invert">Invert</option>
                </select>
                <br><br>
                <input type="submit">
            </FORM>
        </div>
    </div>
</BODY>