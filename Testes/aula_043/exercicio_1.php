<?php

    /* 
    Constrói uma apresentação em HTML que mostra a tabuáda dos 5.
    Exemplo:
    5 x 1 = 5
    5 x 2 = 10
    5 x 3 = 15
    ...
    5 x 10 = 50
    */

    $valor = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style> 

    .card {
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 5px;
            background-color: rgb(200,200,200);
        }
    </style>
</head>
<body>
    
    
    <?php while($valor != 11) : ?>

        <div class="card">
        <p><?php echo "5 * $valor = " . $valor * 5 . "<br>" ?></p>
        <?php $valor++?>
        </div>
        
    <?php endwhile; ?>

</body>
</html>