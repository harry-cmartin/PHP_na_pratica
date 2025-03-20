<?php

    /* 
    1. Constrói um array com todos os resultados da tabuáda dos 327.
    2. Apresenta os dados do array com um ciclo foreach (apenas os valores)
    */

    $array = [];
    $aux;

    for ($i = 0; $i <= 10; $i++) {

        array_push($array ,327 * $i );

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php foreach($array as $aux) :  ?>
    <?= $aux; ?>
    <?php endforeach; ?>

</body>
</html>