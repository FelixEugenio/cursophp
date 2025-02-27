
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NamesPaces</title>
</head>
<body>

<?php 

require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as productModel;

$produto = new  productModel();
$produto->showProductDetails();

?>
    
</body>
</html>