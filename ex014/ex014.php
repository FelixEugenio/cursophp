<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php 
    
    interface Veiculo {
      public function acelerar();
      public function frear();
    }

    class Carro implements Veiculo {
        public $nome;

        public function __construct(string $nome)
        {
            $this->nome = $nome;
        }
        public function acelerar(){
            return "acelerou";    
        }

        public function frear(){
            return "freou";
        }

        public function __destruct()
        {
            echo "carro $this->nome foi destruido";
        }

    }

    $carro = new Carro("Civic");
    echo $carro->acelerar();
    unset($carro);

    ?>
</body>
</html>