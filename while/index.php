<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo php</title>
</head>
<body>
    <div class="contenido">
        <?php $premier_league = array('Chelsea', 'Manchester city', 'Manhester United', 'tottenham', 'arsenal', 'liverpool','leicester');?>
        <?php $i=0;?>
        <?php while($i <= count($premier_league)){
            if (count($premier_league)>0){
                echo $premier_league[$i] . '<br/>';
                if($i+1 === count($premier_league)){
                    echo "fin";
                }
            }else{
                echo "no hay datos"
            }
            $i++;
        } ?>

    </div>
</body>
</html>