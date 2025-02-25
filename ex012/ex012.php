<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e destructor</title>
</head>
<body>
    
<?php 
class Carro {
    public $modelo;


    public function __construct(string $modelo){
                $this-> modelo = $modelo;
    }

    public function __destruct()
    {
        echo "carro $this->modelo foi destruido";
    }
    
}

$carro = new Carro("Civic");
unset($carro);


?>
</body>
</html>