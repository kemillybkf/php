
<?php
include"config.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = htmlspecialchars($_POST['nome']);
        $sobrenome = htmlspecialchars($_POST['sobrenome']);
        $data_nascimento = $_POST['data_nascimento'];
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        try{
            $valida = "SELECTT 1 FROM cadastro WHERE email = '$email'";
            $result = mysqli_query($conn, $valida);
            if(mysqli_num_rows($result) > 0){
                die("Erro: Email já cadastrado.");
            }else{
        $hash_senha = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO cadastro (nome, sobrenome, data_nascimento, email, senha)
                VALUES ('$nome', '$sobrenome', '$data_nascimento', '$email', '$senha', '$hash_senha')";
     (mysqli_query($conn, $sql));
            echo 'Cadastro realizado com sucesso! <a href= "loginket.html">Login</a>';
            }
        } catch (mysqli_sql_exception $e) {
            echo "Erro ao processar o cadastro. ".$e->getMessage();
        }finally{
        mysqli_close($conn);
}

    }else{
        echo"Campos não encontrados no formulário!";
    }
?>
