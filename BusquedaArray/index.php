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
            $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery');
            $existe = in_array('HTML5', $tecnologias);
        ?>
        <pre>
            <?php var_dump($existe);?>
        </pre>
        <?php
            $persona = array(
                    'nombre' => 'Carlos',
                    'pais' => 'Mexico',
                    'profesion' => 'Ingeniero'
                );
         ?>
         <?php $existe2 = in_array('Carlos', array_values($persona));?>
        <pre>
            <?php var_dump($existe2);?>
        </pre>
    </div>
</body>
</html>