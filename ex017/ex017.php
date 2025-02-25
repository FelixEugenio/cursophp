<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading</title>
</head>
<body>
    <?php 
    
    class Carro {
        public function drive(){
            echo "O Carro esta andando";
        }

        spl_autoload_register(function($class_name) {
            include $class_name . '.php';
        });
    }

    $drive = new Carro();
    $drive->drive();

?>
    
</body>
</html>