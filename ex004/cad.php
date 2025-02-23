<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do formulario</h1>
    </header>

    <main>
        <?php
            $nome = $_POST['nome'] ?? 'Sem nome';
            $sobrenome = $_POST['sobrenome'] ?? 'Sem sobrenome';
            echo "Olá $nome $sobrenome! Seja bem vindo!";
        ?>
    </main>
    
</body>
</html>