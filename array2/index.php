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
    ?>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
    <?php
        $tecnologias[] = 'Python';
        $tecnologias[5] = 'Java';
        
    ?>
    <pre>
        <?php print_r($tecnologias);?>
        <?php $java = array_pop($tecnologias);?>
        <h1><?php echo $java; ?></h1>
    </pre>
    <?php //Borrar ultimo elemento y traerlo ?>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
    <?php //Borrar primer elemento ?>
    <?php unset($tecnologias[0]);?>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
    <?php //Borrar primer elemento y agregarlo a variable?>
    <?php $html = array_shift($tecnologias); ?>
    <h1><?php echo$html ?></h1>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
    <?php //Borrar cierto elemento y agregarlo otros?>
    <?php $array = array_splice($tecnologias, 1 , 1, 'AngularJS'); ?>
    <h1><?php echo$html ?></h1>
    <pre>
        <?php print_r($array);?>
    </pre>
    <pre>
        <?php print_r($tecnologias);?>
    </pre>
</body>
</html>