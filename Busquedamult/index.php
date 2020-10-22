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
    <h2>Foreach arreglos multidimensionales</h2>
    <ul>
        <?php foreach($persona['datos'] as $person): ?>
            <li> <?php echo $person; ?> </li>
        <?php endforeach;?>

        <?php foreach($persona as $leng): ?>
            <?php if(array_key_exists('front_end', $leng)) { ?>
                <h2>Lenguajes de Front End</h2>
                <?php foreach($leng['front_end'] as $front){ ?>
                    <li><?php echo $front; ?></li>
                <?php } ?>
            <?php } ?>
            <?php if(array_key_exists('back_end', $leng)) : ?>
                <h2>Lenguajes de Back End</h2>
                <?php foreach($leng['back_end'] as $back): ?>
                    <li><?php echo $back; ?></li>
                <?php endforeach; ?>
            <?php endif; ?>
            
        <?php endforeach; ?>
    </ul>
</body>
</html>