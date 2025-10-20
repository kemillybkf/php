<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
for ($i = 0; $i < 0; $i++) {
    echo "O número é $1 <br>";
}

?>  

WHILE/DO WHILE
<?php
$i = 0;
while($i < 10){
    echo "O número é $1 <br>";
}
?>

<?php
$i = 0;
do{
    echo "O número é $1 <br>";
    $i++;
}while($i < 10);
?> 

FOREACH
<?php
$vetor = array("um","dois","três","quatro",);
foreach( $vetor as $v){
    print "O valor atual do vetor é $v. <br>";
}
?> 

<?php
$vetor = array("um","dois","três","quatro",);
foreach( $vetor as $chave => $valor ){
    print("\$vetor[$chave] => $valor.<br>");
}
?>

BREAK 
<?php
$vetor = array (1,2,3,4,5,6,7,8,9,10);
$k = 0;
while($k < 10){
    if($vetor[$k]== 5){
        break;
    }
    echo $vetor[$k]. "<br>";
    $k++;
} 
?>

CONTINUE
<?php
  $lista = ['a', 'b', 'c'];
  for($i = 0; $i < count($lista); $i++){
    if($lista[$i] == 'b'){
        continue;
    }
  }
?>
<?php
  $lista = ['a', 'b', 'c'];
  for($i = 0; $i < count($lista); $i++){
    if($lista[$i] == 'b'){
        continue;
    }
    echo $lista[$i]; 
  }
?>


</body>
</html>
