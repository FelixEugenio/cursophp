<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodos e Atrubtos estaticos</title>
</head>
<body>
    <?php 
    class Login{

       public static $user;
        public static function verifyLogin(){
            return "O usuario".self::$user."esta logado";
        }

        public function logout(){
          return "O usuario deslogou";
        }
    }

    //Acessando metodo estatico da classe
    Login::verifyLogin();
    Login::$user = "admin";
    
    
    ?>
    
</body>
</html>