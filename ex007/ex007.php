<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação a Objetos classes</title>
</head>
<body>
    <?php 
    class Animal {
        public $nome;
        public function __construct(string $nome) {
            $this->nome = $nome;
        }

        public function falar(string $nome){
            return "O $nome animal faz um som";
        }
        
    }

    $animal = new Animal("cachorro");
    echo $animal->falar("cachorro");

    
    ?>
    
</body>
</html>