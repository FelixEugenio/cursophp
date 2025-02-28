<?php 
class Veiculo {

    private $dados = array();

    public function __set(string $nome,string $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($name)
    {
        return $this->dados[$name];
    }
} 

$pessoa = new Veiculo();
$pessoa->nome = "Fiat";
echo $pessoa->nome;

?>