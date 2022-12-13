<!DOCTYPE html>
<html>

<head>

</head>

<BODY>
    <FORM method="POST" action="../intervention.php" enctype="multipart/form-data">
        <br><LABEL>Sube la imagen</LABEL><br><input type="file" name="imgFile">
        <br><LABEL>¿Qué desea hacer con la imagen?</LABEL><br>
        <select name="optionImage">
            <option value="blur" selected>Borrosidad</option>
            <option value="bright" selected>Brillo</option>
            <option value="fit">Redimension</option>
            <option value="sharpen">sharpen</option>
            <option value="invert">Invert</option>

        </select>
        <br>
        <label for="width">width</label><input type="number" name="width" id="width">
        <label for="height">height</label><input type="number" name="height" id="height">
        
        <select name="grade">
            <option value="20">20</option>
            <option value="40">40</option>
            <option value="60">60</option>
            <option value="80">80</option>
            <option value="100">100</option>
        </select>
        <br>
        <input type="submit">
    </FORM>
</BODY>

</html>
