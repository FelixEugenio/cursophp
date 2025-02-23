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


function somaDoisNumerosInteiros(int $primeiroNumero,int $segundoNumero) : int {
    return $primeiroNumero + $segundoNumero;
}

function calcularRaizQuadrada(float $valor):float{
    $resultado = sqrt($valor);
    return number_format($resultado,2,".","");
}

echo calcularRaizQuadrada(89);
echo somaDoisNumerosInteiros(1,2);

var_dump($nome);

$vetor = [1,2,3];
var_dump($vetor);
?>
    
</body>
</html>