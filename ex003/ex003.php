<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis no Php</title>
</head>
<body>

<?php 
$nome = "Felix Mavila";
$idade = 23;
$peso = 60.7;
$casado = false;

//constante
const PAIS = "Angola";

//echo "Olá $nome Seja bem vindo ao PHP";
echo PAIS;

//Outra Maneira de definir variaveis constantes
define("CIDADE","Luanda");

echo CIDADE;


function somaNumerosInteiros(int $primeiroNumero,int $segundoNumero) : int {
    return $primeiroNumero + $segundoNumero;
}

echo somaNumerosInteiros(1,2);

?>
    
</body>
</html>