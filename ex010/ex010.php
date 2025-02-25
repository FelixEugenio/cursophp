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
        public function falar(){
            return "O animal faz um som";
        }
    }


    class Cachorro extends Animal{
      public function falar(){
        return "O cachorro faz au au";
      }
    }

    class Gato extends Animal{
        public function falar(){
            return "O gato faz miau miau";    
        }
    }

    $animais = [new Cachorro(), new Gato()];

    foreach($animais as $animal){
        echo $animal->falar() . "<br>";
    }




    ?>
    
</body>
</html>