<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <div class="contenido">
        <h1>Aprendiendo PHP</h1>
        <div class="contenido">
            <h2>Agenda Telefonica</h2>
            <?php $agenda = array();
            function guardarUsuario($nombre, $tel){
                global $agenda;
                $agenda[] =array($nombre, $tel);
            }
            guardarUsuario("Carlos", "1234");
            guardarUsuario("Letz", "6789");
            guardarUsuario("Cornelio", "4567");

            function mostrarUsuario($id){
                global $agenda;
                $usuario = $agenda[$id];
                foreach($usuario as $user){
                    echo $user .'<br/>';
                }
            }
            mostrarUsuario(0);
            mostrarUsuario(1);
            mostrarUsuario(2);

            ?>
        </div>
    </div>
</body>
</html>