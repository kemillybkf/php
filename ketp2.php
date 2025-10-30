<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h2>Olá
    <?php
        session_start();
        if (!isset($_SESSION['usuario'])){
            header("Location: login.html");
            exit;
        }else{
        echo htmlspecialchars($_SESSION['usuario_nome']);
        }
    ?>
</h2>
<p><a href= "loginket.php">Sair</a></p>
<br>
<p><a href="alterket.html">Alterar Senha</a></p>
</body>
</html>
