<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
    $nome = $_POST['nome'];
    if (isset($_COOKIE['teste'])) {
        include('SIM.php');
        echo "</br>";
        echo "Olá, $nome";
    }else {
        include('NÃO.php');
        echo "</br>";
        echo "Nunca te vi por aqui. Você poderia digitar seu nome para mim, por gentileza!";
        include('atv1.1CO.php');
        setcookie('teste', $nome, time() + 3600);
    }
    ?>
</body>
</html>
