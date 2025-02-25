<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace</title>
</head>
<body>
    <?php 
    namespace Animal;

    class Cachorro {
        public function latir(){
            echo "au au";
        }
    }

    $dog = new Cachorro();
    $dog->latir();
    
    ?>
    
</body>
</html>