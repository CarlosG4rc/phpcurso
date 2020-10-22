<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <div class="contenido">
        <?php 
            $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery','Python');
        ?>
        <?php for($i = 0; $i<count($tecnologias); $i++){
            echo $tecnologias[$i] . '<br/>';
        }?>
        


        <?php//for ?>

        <?php for($i=0; $i<100; $i++) {
            echo $i . '<br/>';
         }?>

         <hr>

    </div>
</body>
</html>