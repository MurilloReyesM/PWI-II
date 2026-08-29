<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array associativo em linguagem php</title>
</head>
<body>

 <?php
/*
 * O array associativo é basicamente um array, porém com chave e valor;
 * A estrutura base é a mesma, mas vamos construir dessa maneira:
 * $arr = ['nome' => 'JULIO LEMBO', 'idade' => 29]
 * Chave entre aspas, seta para apontar o valor e valor;
 */

$arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

echo $arr['nome'];
echo "<br>";
print_r($arr);
echo "<br>";
echo $arr['patas'];

$arrAssoc = ['chave' => 'valor', 'bool' => true];

echo "<br>";
print_r($arrAssoc);


</body>
</html>