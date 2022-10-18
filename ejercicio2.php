<html>
<head>
    
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    $a=22;
    $b=&$a;
   
    print 'La variable $a vale: '.$a.'<br>';
    print 'La variable $b vale: '.$b.'<br>';
    unset($b);
    print 'Ahora la variable $b vale: '.$b.' y la variable $a ahora vale: '.$a;
    ?>
</body>
</html>