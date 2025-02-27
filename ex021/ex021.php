<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
</head>
<body>

<?php 
class Animal{
    public $name;
    public $age;

    public function __construct(string $name,int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }
    
    public function getName(){
        return $this->name;
    }

    public function setName(string $name):string{
        return $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge(int $age):int{
        return $this->age = $age;
    }

}

$animal = new Animal();
$animal->setName("Rex");
$animal->setAge(5);

echo "Name: ".$animal->getName()."<br>";
echo "Age: ".$animal->getAge()."<br>";

?>
    
</body>
</html>