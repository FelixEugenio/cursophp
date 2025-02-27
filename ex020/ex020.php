<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes</title>
</head>
<body>
    <?php 
    class Pessoa{
        public $name;
        public $email;
        public $age;

        public function __construct($name, $email, $age){
            $this->name = $name;
            $this->email = $email;
            $this->age = $age;
        }

        public function Falar(){
            return "$this->name está falando";
        }

    }

    $pessoa = new Pessoa("Lucas", "K3e2A@example.com", 20);
    echo $pessoa->Falar();
    unset($pessoa);
    
    ?>
    
</body>
</html>