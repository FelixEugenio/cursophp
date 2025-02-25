<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>

<?php 
class Carro {
    //Propriedade privada
    private $cor;

    //metodo publico para acessar a propriedade privada
    public function setCor(string $cor){
        $this->cor = $cor;
    }

    public function getCor(){
        return $this->cor;
    }
}

$carro = new Carro();
$carro->setCor("Azul");
echo $carro->getCor();

?>
    
</body>
</html>