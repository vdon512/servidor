
<html>
<head>
    
    <title>Triangulo</title>
</head>
<body>
    <?php
    
    for($i=10;$i>0;$i--){

        for ($k=0; $k < $i; $k++) { 
           // echo '_';
           echo '&nbsp;';
        }
        for($j=10;$j>$i;$j--){
        echo '*';
    }
  
    
    echo '<br>';
    }
    
    
    ?>
</body>
</html>