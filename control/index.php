<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <?php 
        //  if(1 < 0){
        //     echo "1 es menor";
        // }
        // else{
        //     echo "1 es mayor";
        // }
        // echo "<hr>";
        // $edad1 = 11;
        // $edad2 = 11;
        // if ($edad1 < $edad2){
        //     echo "La edad 1 es menor";
        // }
        // else if($edad1 == $edad2){
        //     echo "Las edades son iguales";
        // }
        // else {
        //     echo "la edad 2 es menor";
        // }

        // $numero1 = 8;
        // echo "<hr>";

        // if($numero1 % 2 == 0){
        //     echo "El numero es par";
        // }
        // else{
        //     echo "El numero es impar";
        // } 
        $lenguaje = "HTML5";

        switch($lenguaje){
            case 'PHP':
                echo "Backend";
                break;
            case 'JavaScript':
                echo "FrontEnd y backend /NodeJS";
                break;
            case ' HTML5':
                echo "FrontEnd";
                break;
            default:
                echo "No valido";
                break;
        }
    ?>
</body>
</html>