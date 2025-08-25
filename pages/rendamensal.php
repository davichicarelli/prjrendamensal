<?php
$nome = $_GET["nome"];
//$nome = filter_input(INPUT_GET, "nome", FILTER_VALIDATE_FLOAT);//
$rendamensal = filter_input(INPUT_GET, "rendamensal", FILTER_VALIDATE_FLOAT);

if ($rendamensal==false) {
$mensagem = "ERRO: Valores inválidos!!!";
} else {
    $imposto = ($rendamensal * 7.5) / 100;
    $mensagem = "<p> Nome=>" . $_GET["nome"] . "</p>" .
    $mensagem = "<p> Renda Mensal=>" . $_GET["rendamensal"] . "</p>" .
               $nome. ", você terá que pagar R$" .$imposto. " de imposto";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renda Mensal</title>
    <link rel="stylesheet" href="./../css/estilo.css">
<!-- o .. server para sair da pasta -->
</head>
<body>
    <h1>Resultado do Cálculo</h1>
    <div id="resultado">
    
    <?= $mensagem ?>

    </div>

</body>