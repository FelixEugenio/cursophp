<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>

<?php 

class Animal{
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar(){
        return $this->nome . " Faz um som";
    }
}

class Cachorro extends Animal{
    public function falar(){
        return $this->nome . " diz : au au ";
    }
}

$cachorro = new Cachorro("Dog G");
echo $cachorro->falar();

?>
    
</body>
</html>