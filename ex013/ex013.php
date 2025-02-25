<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Estaticos</title>
</head>
<body>
    <?php 
    
    class Matematica{
        public static function Somar(int $primieroValor, int $segundoValor):int{
            return $primieroValor + $segundoValor;
        }
    }

    echo Matematica::Somar(2,3);
    
    ?>
    
</body>
</html>