<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ket14</title>
</head>
<body>
<?php
   $nota = 7;
   if ($nota < 5) {
    echo"Aluno Reprovado";
}elseif ($nota >= 5 && $nota < 7) { 
    echo"Aluno de Recuperação";
}else{
    echo "Aluno Aprovado";
} 
?>
</body>
</html>