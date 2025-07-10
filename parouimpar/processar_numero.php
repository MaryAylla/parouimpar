<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
echo '
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-color: #f4f4f4;
        margin: 0;
    }
    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .resultado {
        margin-top: 20px;
        padding: 15px;
        border-radius: 4px;
        font-weight: bold;
    }
    .par {
        background-color: #d4edda;
        color: #155724;
    }
    .impar {
        background-color: #f8d7da;
        color: #721c24;
    }
    .erro {
        background-color: #ffeeba;
        color: #856404;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }
    a:hover {
        background-color: #0056b3;
    }
</style>
';

echo '<div class="container">';

if (isset($_GET['numero']) && is_numeric($_GET['numero'])) {
    $numero = (int) $_GET['numero'];

    echo '<div class="resultado ';

    if ($numero % 2 == 0) {
        echo 'par">';
        echo "O número $numero é par.";
    } else {
        echo 'impar">';
        echo "O número $numero é ímpar.";
    }
    echo '</div>';

} else {
    echo '<div class="resultado erro">';
    echo "Por favor, digite um número válido para verificar.";
    echo '</div>';
}

echo '<a href="index.html">Voltar</a>'; 
echo '</div>'; 
?>
</body>
</html>