<?php

session_start();

// lógica de tratamento do formulário
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso negado');
   
}




if(empty($_POST['text_valor_1']) || empty($_POST['text_valor_2'])){
   $_SESSION['erro'] = 'Campos de prenchimento obrigatorio';
   header("Location: index.php");
   return;

}

$valor1 = $_POST['text_valor_1'];
$valor2 = $_POST['text_valor_2'];
if(!is_numeric($valor1) || !is_numeric($valor2) || $valor1 < 1 || $valor2 < 1){
    $_SESSION['erro'] = "Os dois valores têm que ser numéricos e positivos.";
    header("Location: index.php");
    return;
}


$resultado = $valor1 * $valor2;
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
    <h1>Resultado:</h1>
    <h3><?= "$valor1 x $valor2 = $resultado" ?></h3>
</body>
</html>