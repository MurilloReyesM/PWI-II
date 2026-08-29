<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NULL - EM LINGUAGEM PHP</title>
</head>
<body>

<?php

/* Checagem de resultado NULL em PHP 28/08/2026 */

echo Null;
$nome = null;

$nome;
var_dump($nome); // Resultado: NULL

$taxa = null;

if (is_null($taxa)) {
    echo "Taxa não foi informada.<br>";
}

if ($taxa == null) {
    echo "Mesma verificação usando comparação.";
}

?>

</body>
</html>
