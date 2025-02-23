<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio sucessor e antecessor</title>
</head>
<body>
    <?php 
    
     function CalcularSucessorEAntecessor(int $numero):string{
        $sucessor = $numero + 1;
        $antecessor = $numero - 1;
        return "O sucessor de $numero e $sucessor e o antecessor e $antecessor";
     }

     echo CalcularSucessorEAntecessor(5);


     function ConversorDeMoedasDeKwanzaParaEuro(float $valor):string{
         $conversor = $valor / 1180;
         $valorConvertido = number_format($conversor,2,".","");

         return " $valor kwanza convertido para euro é $valorConvertido euros";

     }

     echo ConversorDeMoedasDeKwanzaParaEuro(100000);

    ?>
</body>
</html>