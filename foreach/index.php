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
            $tecnologias = array('CSS', 'HTML', 'JavaScript', 'jQuery', 'Python');
            $existe = in_array('HTML5', $tecnologias);
        ?>
        <h2> Lenguajes que conozco</h2>
        <ul>
            <?php foreach($tecnologias as $tecnologia): ?>
                <li><?php echo $tecnologia ?></li>
            <?php endforeach;?>
        </ul>
        <?php
            $persona = array(
                    'nombre' => 'Carlos',
                    'pais' => 'Mexico',
                    'profesion' => 'Ingeniero'
                );
        ?>
        <h2>Datos personales</h2>
        <ul>
                <?php foreach($persona as $key => $val): ?>
                    <li><?php echo $key. ': ' . $val?></li>

                <?php endforeach;?>
        </ul>

    </div>
</body>
</html>