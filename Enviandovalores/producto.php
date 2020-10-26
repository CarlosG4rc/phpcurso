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
            <h2>Descripcion producto</h2>
            <p>ID: <?php echo $_GET['id']; ?></p>
            <p>Nombre <?php echo $_GET['nombre'] ?></p>
        </div>
    </div>
</body>
</html>