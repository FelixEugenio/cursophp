<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>

<?php 

trait Loggable{
    public function log(string $mensagem){
        echo "Log: ". $mensagem;
    }
}

class Usuario{
    use Loggable;
}

$usuario = new Usuario();
$usuario->log("Usuario Logado");

?>
    
</body>
</html>