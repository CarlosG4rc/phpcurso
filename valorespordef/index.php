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
            function usuario($nombre = 'John Doe', $tel= '00000000'){
                return $contacto = $nombre . " " . $tel;
            }

            $usuario = usuario('Cornelio', '5512-1244');
            echo $usuario;
            echo"<hr>";

            $usuario2 = usuario("Letz","");
            echo $usuario2;
        ?>
    </div>
</body>
</html>