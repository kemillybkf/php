
<?php
$host = "sql100.infinityfree.com";
$usuario = "if0_40230926";
$senha = "345838311";
$banco =  "if0_40230926_ketfy";
$conn =  new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("erro na conexão". $conn->connect_error);
}
?>
