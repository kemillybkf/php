<?php
include"config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST['nome']);
        $sobrenome = htmlspecialchars($_POST['sobrenome']);
        $data_nascimento = $_POST['data_nascimento'];
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $hash_senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO cadastro (nome, sobrenome, data_nascimento, email, senha)
                VALUES ('$nome', '$sobrenome', '$data_nascimento', '$email', '$senha', '$hash_senha')";
    if (mysqli_query($conn, $sql)) {
            echo "Cadastro realizado com sucesso!";
            echo"<a href='loginket.html'>Login";
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conn);
        }
        mysqli_close($conn);
}
?>