<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un número con FOR, WHILE y Do WHILE </title>
</head>
<body>
    <?php
    $num=4;
    $num1=4;
    $n1=1;
    $n=1;
    echo 'Fctorial de un número con FOR<br><hr><br>';
 for ($i=$num; $i > 0; $i--) { 
    $n=$n*$i;
   
 }
 echo '!'.$num.'= '.$n.'<br><br>';

    echo 'Fctorial de un número con WHILE <br><hr><br>';

    $aux=$num1;
    while($aux>0){
      echo 'n= '.$n1.'<br>';
      $n1=$n1*$aux;
      echo 'n= '.$aux.'<br>';
         $aux--;
    }
    echo '!'.$num1.'= '.$n.'<br><br>';
    echo 'Fctorial de un número con Do WHILE <br><hr><br>';
    
    ?>
</body>
</html> VB