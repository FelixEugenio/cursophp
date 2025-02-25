<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>
    <?php 
    
    Class DivisaoPorZeroException extends Exception {}

    function dividir(int $valor1,int $valor2):int{
        if($valor1 === 0){
            throw new DivisaoPorZeroException("Nao pode dividir por zero");
        }

        return $valor1 / $valor2;
    }

    try{
    echo dividir(10,0);
    }catch(DivisaoPorZeroException $e){
        echo $e->getMessage();
    }
    
    ?>
</body>
</html>