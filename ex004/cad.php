<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Formulário</h1>
    </header>
    <main>
        <?php 
            //var_dump($_GET); //$_GET $_POST $_REQUEST

            $nome = $_GET["nome"] ?? "nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Bem-Vindo ao meu site<strong> $nome $sobrenome</strong>!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>