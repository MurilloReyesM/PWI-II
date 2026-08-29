<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ativida nome pessoa</title>
</head>
<body>
    
<?php

$pessoa = [
    "nome" => "Mauro",
    "idade" => 40,
    "cidade" => "Caxias MA",
    "profissao" => "Açougueiro"
];

if ($pessoa["idade"] >= 18) {
    echo $pessoa["nome"] . " é maior de idade e tem " . $pessoa["idade"] . " anos.";
}

/*ATIVIDADE 5 PHP */
?>


</body>
</html>