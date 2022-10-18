
<html>
<head>
    
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
    $otroNumero=55;
    $otraCadena="es otra cadena";
    define("cadena","es una variable cadena");
    define("numero",12);
    echo "Con<b> echo:</b> ";
    echo "<br>";
    echo 'Variable "cadena" tiene valor: '.cadena.' su tipo es: '.gettype(cadena);
    echo "<br>";
    echo 'Variable "numérica" tiene valor: '.numero.' su tipo es: '.gettype(numero);
    echo "<br><br>";
    print 'Con<b> print</b>';
    echo "<br>";
    print 'Variable "cadena" tiene valor: '.cadena.' su tipo es: '.gettype(cadena);
    echo "<br>";
    print 'Variable "numérica" tiene valor: '.numero.' su tipo es: '.gettype(numero);
    echo "<br>"; 
    echo "<br>"; 
    echo "<b>Otra difinición de las variables:</b>";
    echo "<br>"; 
    echo $otraCadena;
    echo "<br>"; 
    echo $otroNumero;
    echo "<br>";
    print $otraCadena;
    echo "<br>";
    print $otroNumero;
    ?>
</body>
</html>