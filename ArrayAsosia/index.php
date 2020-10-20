<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <?php
        $persona = array(
            'nombre' => 'Carlos',
            'pasi' => 'Mexico',
            'profesion' => 'Ingeniero'
        );
    ?>
    <pre>
        <?php print_r($persona);?>
    </pre>
    <?php echo $persona['nombre'] ?>
</body>
</html>