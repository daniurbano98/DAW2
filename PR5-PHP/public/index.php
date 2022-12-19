<?php
if (!isset($_SESSION)) {
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



<body>
   
    <div class="d-inline-flex p-2">
        <div class="container">
            <form method="POST" action="../viewSelectedImage.php" enctype="multipart/form-data">
                <h1>VER IMAGENES</h1>
                <h2>Seleccionar una</h2>
                <select name="optionViewImage">
                    <?php
                    foreach ($_SESSION['images']['all'] as $foto) {
                    ?>
                        <option value="<?php echo $foto; ?>"><?php echo $foto; ?></option>;
                    <?php
                    } ?>
                </select><br><br>
                <input type="submit" value="Ver"></input><br><br>
            </form>

            <form method="POST" action="../viewImages.php">
                <h2>Seleccionar varias</h2>
                <p>Por favor, selecciona una opción</p>

                <select name="options">
                    <option value="enfocadas">enfocadas</option>
                    <option value="desenfocadas">desenfocadas</option>
                    <option value="todas">todas</option>
                </select>
                
                <input type="submit" name="enviar"></input>
            </form>     
        </div>


        <div class="container">
            <form method="POST" action="../processImage.php" enctype="multipart/form-data">
                <h1>SUBIR IMAGENES</h1>
                <h2>Sube la imagen</h2>
                <input type="file" name="imgFile">
                <br><br>
                <input type="submit">
            </form>
        </div>
    </div>
</BODY>