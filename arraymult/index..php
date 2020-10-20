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
            'datos' => array(
                'nombre' => 'Carlos',
                'pais' => 'Mexico',
                'profesion' => 'Ingeniero'
            ),
            'lenguajes' => array(
                'front_end' => array('css', 'html5', 'javascript', 'jquery'),
                'back_end' => array('php', 'mysql', 'python')
            )
        );
    ?>
    <pre>
        <?php print_r($persona)?>
    <pre>
</body>
</html>