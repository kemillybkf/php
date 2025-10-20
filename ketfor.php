<?php
/*
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

echo "Olá $nome, seu e-email é $email";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["nome"], $_POST["email"], $_POST["senha"])){
        $nome = htmlspecialchars($_POST["nome"]);
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST["senha"]);
        if (empty($nome) || empty($email) || empty($senha)){
            echo "Todos os campos são obrigatórios!";
        }
        elseif (strlen($senha ) < 6){
            echo "A senha deve ter pelo menos 6 caracteres!";
        }
        else{
            echo "<h3>Cadastro realizado com sucesso!</h3>";
            echo "Nome: $nome<br>";
            echo "E-mail: $email<br>";
            echo "Senha: $senha<br>";
        }
    }else{
        echo "Erro: Campos não encontrados no formulário.";
    }
}*/
if (isset($_POST["linguagens"])){
    $linguagens = $_POST["linguagens"];
    echo "Você escolheu:<br>";
    foreach ($linguagens as $ling){
        echo "-$ling<br>";
    }
} else {
    echo "Nenhuma linguagem foi selecionada.";
}
?>
