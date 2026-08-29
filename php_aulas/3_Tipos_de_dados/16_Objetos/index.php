<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

/*OBJETOS basicos e dados inteiro do float strings  sociativo * PHP possui o paradigma de orientação a objetos;
*Podemos criar classes e objetos, é o objeto é considerado um tipo de dado;
* Objetos possuem métodos que são suas ações e propriedades que são suas características; 
* Veremos objetos em maiores detalhes futuramente no curso;
*/

class Pessoa {function falar(){}}
echo "olá pessoal";
$patricia = new Pessoa();
$patricia-> nome = "Patricia";
echo $patricia->nome;
echo "<br>";
$patricia->falar();

?>


</body>
</html>
