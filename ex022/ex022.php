<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php 
    class Pessoa {
        const name = "Felix Eugenio Mavila";

        public function showName(){
            return self::name;
        }
    }

    class Felix extends Pessoa {
        const name = "Felix Eugenio Mavila";

        public function showName(){
            return parent::name;
        }
    }

    $pessoa = new Felix();
    echo $pessoa->showName();
    


    ?>

    
</body>
</html>