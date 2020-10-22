<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <div class="contenido">
        <h2>Agenda Telefónica</h2>
        <?php
            function usuario($nombre, $tel){
                echo $nombre . "<br/>";
                echo $tel . "<br/>";
                echo "<hr/>";
            }

            usuario('Cornelio', '5512-1244');
            usuario('Letz', '8765-8765');
            usuario('Carlos', '9876-1234');
        ?>
    </div>
</body>
</html>