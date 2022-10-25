<html>

<head></head>

<body>
  <?php
include ('texto.php');
    echo "<br>";
   echo "<br>";
echo "-------------------------------------";
 echo "<br>";
echo "Ejercicio 1b";
 echo "<br>";
   $res;
    $cifra=$_REQUEST['cifra'];
    
    if ($_REQUEST['boton']=='pta') {
        $res=$cifra * EurPta ;
        echo "Resultado es :";
        echo $res;
echo " en Pta";
    } else {
        $res=$cifra * PtaEur;
        echo "Resultado es :";
        echo $res;
echo " en Euro";
    }
  
  ?>
</body>

</html>