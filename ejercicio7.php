<html>
<head>
    
    <title>Salario</title>
</head>

<body>
<?php
if (isset($_POST["enviar1"])) {
    $salario=$_POST["salario"];

   echo " Salario sin descontar el impuesto:<b>".$salario."</b><br>";
  
   
    $salario=$_POST["salario"];
    $impuesto=$_POST["impuesto"];
    $resultado=($impuesto/100)*$salario;
    echo '" Salario sin descontar el impuesto: '.$salario.'"';
    echo "<br>";
    echo " Salario '".$salario."' una vez descontado: ".$impuesto."%  <b>".$resultado.'</b>"';
}else
{

    ?>
    <h3>CALCULAR SALARIO DE UN TRABAJADOR</h3>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <label for="">Escribe el salario</label>
        <input type="text" name="salario">
    <label for="">Escribe el impuesto</label>
        <input type="text" name="impuesto"><br><br>
        <input type="submit" name="enviar1" value="Mostrar sin impuesto">
        <input type="submit" name="enviar2" value="Mostrar con impuesto">
    </form>
   <?php
}
   ?>
</body>
</html>