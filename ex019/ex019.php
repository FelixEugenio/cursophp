<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos Magicos</title>
</head>
<body>
    <?php 

    //exemplo com get e set
    class Pessoa {

    private  $dados = [];

    public function __set(string $name,string $value) {
      $this->dados[$name] = $value;
    }

    public function __get(string $name) {
      return $this->dados[$name] ?? null;
    }

    public function __destruct() {
      echo "Objeto foi destruido";  
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Felix";
echo $pessoa->nome;
unset($pessoa);
    
    ?>
    
</body>
</html>