<?php
/*$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$senha = $_POST["senha"];*/

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["nome"],$_POST["sobrenome"], $_POST["email"], $_POST["senha"])){
        $nome = htmlspecialchars($_POST["nome"]);
        $sobrenome = htmlspecialchars($_POST["sobrenome"]);
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST["senha"]);
        if (empty($nome)|| empty($sobrenome)|| empty($email) || empty($senha)){
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
}
?>
