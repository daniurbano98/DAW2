<?php 
    if(!isset($_SESSION)){
        session_start();
    }
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
            <form action="POST" action="../viewImages.php" enctype="multipart/form-data">
                <h1>VER IMAGENES</h1>
                <h2>Seleccionar una</h2>
                <select name="optionViewImage">
                    <?php 
                        foreach ($_SESSION['images']['all'] as $foto ) {
                            ?>   
                            <option value="<?php echo $foto;?>"><?php echo $foto;?></option>;
                            <?php
                        }?>
                </select><br><br>
                <input type="submit" value="Ver"></input><br><br>
                <h2>Seleccionar varias</h2>
                <p>Por favor, selecciona una opción</p>
                 <input type="radio" id="enfocadas" name="opciones_ver" value="enfocadas">
                 <label for="enfocadas">Ver enfocadas</label><br>
                 <input type="radio" id="desenfocadas" name="opciones_ver" value="desenfocadas">
                 <label for="desenfocadas">Ver desenfocadas</label><br>
                 <input type="radio" id="todas" name="opciones_ver" value="todas">
                 <label for="todas">Ver todas</label> <br> <br>
                <input type="submit"></input>
            </form>
        </div>

        <div class="container">
            <FORM method="POST" action="../processImage.php" enctype="multipart/form-data">
                <h1>SUBIR IMAGENES</h1>
                <br><LABEL>Sube la imagen</LABEL><br><input type="file" name="imgFile">
                <br><LABEL>¿Qué desea hacer con la imagen?</LABEL><br>
                <select name="optionImage">
                    <option value="fit">Redimension</option>
                    <option value="sharpen">sharpen</option>
                </select>
                <br><br>
                <input type="submit">
            </FORM>
        </div>
    </div>
</BODY>