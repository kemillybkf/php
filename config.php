<?php
$host = "sql100.infinityfree.com";
$usuario = "if0_40230926";
$senha = "34583831";
$banco =  "if0_40230926_ketfy";
$conn =  new mysqli($host, $usuario, $senha, $banco);
if ($conn-> connect_error) {
    die("Erro na conexâo: ". $conn->connection_error);
  }
?>