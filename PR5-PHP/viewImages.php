<?php


    if(isset($_POST["opciones_ver"])){
       if( $_POST["opciones_ver"]=="enfocadas"){
            foreach ($Session['images']['enfocada'] as $foto ) {
                ?>
                <img src="<?php echo "./resources/upload/enfocada/" . $_FILES["imgFile"]["name"] ?>">
                <?php
            }
       }else if($_POST["opciones_ver"]=="enfocadas"){
            foreach ($Session['images']['desenfocada'] as $foto ) {
                ?>
                <img src="<?php echo "./resources/upload/desenfocada/" . $_FILES["imgFile"]["name"] ?>">
                <?php
            }
       }else{
            foreach ($Session['images']['all'] as $foto ) {
                ?>
                <img src="<?php echo "./resources/upload/inputImg/" . $_FILES["imgFile"]["name"] ?>">
                <?php
            }
       }
        
    }
    
   
    
?>