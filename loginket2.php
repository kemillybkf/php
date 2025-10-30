<?php
    session_start();
    include"config.php";
    if ($_SESSION["RESQUES"] == "POST") {
        $email= $_POST["email"];
        $senha= $_POST["senha"];
    try{
        $sql = $conn->prepare("SELECT id, nome, email, senha FROM cadastro WHERE email = '$email'");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();
    
        if($result && $result->num_rows ==1 ){
            $usuario = $result->fetch_assoc();
            if ($usuario["email"]&& password_verify($senha,$usuario['senha'])){
            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];
            $_SESSION["usuario"] = $email;
            if (isset($_POST['lembrar'])) {
                setcookie('lembrar-email', $email, time() + 3600, "/");
            }else{
                setcookie('lembrar-email', '', time() - 3600, "/");
            }
            header("Location: ketp.php");
            exit;
            }else{
                echo"Email e/ou senha incorreta.";
            }
        }else{
            echo "Email e/ou senha incorreta.";
        }
    }catch (mysqli_sql_exception $e){
        echo "Erro ao processar o login.".$e->getMessage();
    }finally{
    mysqli_close($conn);
    }
    }
?>
