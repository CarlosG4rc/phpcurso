<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <?php 
        $tecnologias = ['CSS', 'HTML', 'JavaScript','JQuery'];
        //echo $tecnologias[2];
    ?>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
    
    <?php

        $lenguajes = array('css', 'jquery', 'php', 'mysql', 20);
        echo "<hr>";
    ?>
        
    <pre>
        <?php var_dump($lenguajes);?>
    </pre>  
</body>
</html>