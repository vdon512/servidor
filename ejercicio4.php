
<html>
<head>
    
    <title>Área de un triangulo</title>
</head>
<style>
    body{
        background-color: #c9ecec;
        color: blue;
    }
    #id1{
        background-color: yellow;
        color: red;
    }
</style>
<body>
<?php
if (isset($_POST["enviar"])) {
    $base=$_POST["base"];
    $altura=$_POST["altura"];
    $area=($base*$altura)/2;
   echo " Altura: <b>".$base."</b><br>";
   echo " Base: <b>".$altura."</b><br>";
   echo "El área del trianguo es: <b>".$area."</b>";
} else {


    ?>
    <h3>CALCULAR ÁREA TRIÁNGULO</h3>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <label for="">Escribe la base</label>
        <input type="text" name="base">
    <label for="">Escribe la altura</label>
        <input type="text" name="altura">
        <input type="submit" name="enviar" id="id1" value="Calcular">
    </form>
   <?php
}
   ?>
</body>
</html>