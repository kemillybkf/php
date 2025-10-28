

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = "sql100.infinityfree.com";
$usuario = "if0_40230926";
$senha = "345838311";
$banco =  "if0_40230926_ketfy";
$conn =  new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) 
    die("erro na conexão". $conn->connect_error);
try{
    $conn = new mysqli($host, $usuario, $senha, $banco);
    $conn->set_charset("utf8mb4");
}catch(mysqli_sql_exception $e){
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
