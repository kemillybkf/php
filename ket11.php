<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ket11</title>
</head>
<body>
<?php
   $num = "50";
   echo gettype($num) ."<br>";
   settype($num,"integer");
   echo gettype($num) ."<br>";
   settype($num ,"boolean");
   echo gettype($num);
?>
</body>
</html>