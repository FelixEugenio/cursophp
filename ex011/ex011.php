<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstração</title>
</head>
<body>
    <?php 
   abstract class Forma{
    abstract public function area();
   }

   class Quadrado extends Forma{

    private $lado;
    public function __construct(string $lado){
        $this->lado = $lado;
    }
       public function area(){
           return $this->lado * $this->lado;
       }
   }
    
   $quadrado = new Quadrado(10);
   echo $quadrado->area();
    
    ?>
    
</body>
</html>