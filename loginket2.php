<?php
    session_start();
    include"config.php";
    if ($_SESSION["RESQUES"] == "POST") {
        $email= $_POST["email"];
        $senha= $_POST["senha"];
        $sql= "SELECT id, nome, email, senha FROM cadastro WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if($result && mysqli_num_rows($result)==1){
            $usuario = mysqli_fetch_array($result);
            if ($usuario["email"]&& password_verify($senha,$usuario['senha'])){
            $_SESSION["usuario_id"] = $usuario["id"];
            $_SESSION["usuario_nome"] = $usuario["nome"];
            header("Location: ketp.php");
            exit;
            }else{
                echo"Email e/ou senha incorreta.";
            }
        }else{
            echo "Email e/ou senha incorreta.";
        }
    mysqli_close($conn);
    }
?>