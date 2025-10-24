<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h2>Bem-vindo,
    <?php
        session_start();
        echo htmlspecialchars($SESSION['usuario_nome']);
    ?>
</h2>
<p><a href= "loginket.php">Sair</a></p>
</body>
</html>