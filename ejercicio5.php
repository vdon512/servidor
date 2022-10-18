<html>
<head>
    
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
   $a[1]=347;
   $a[2]=2147483647;
   $a[3]=-2147483647;
   $a[4]=23.7678;
   $a[5]=3.1416;
   $a[6]="347";
   $a[7]="3.1416";
   $a[8]="Solo literal";
   $a[9]="12.3 Literal con número";
   $a[10]="último literal";
   $i=0;
   foreach($a as $todo){
    echo '$a'.$i." = ";
   echo $todo." su tipo es: <b>".gettype($todo)."</b>";
   echo "<br>";
   $i++;
   }
    ?>
</body>
</html>