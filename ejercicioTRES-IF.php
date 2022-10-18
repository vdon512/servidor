<html>
<head>
    
    <title>Comparar tres</title>
</head>
<style>
    body{
        background-color: #c9ecec;
        color: blue;
    }
    #id1{
        background-color: yellow;
        color: gray;
    }
</style>
<body>
<?php
if (isset($_POST["enviar"])) {
    $num1=$_POST["uno"];
    $num2=$_POST["dos"];
    $num3=$_POST["tres"];
    if(isset($_POST["uno"]) && isset($_POST["dos"]) && isset($_POST["tres"])){
        if(($num1 > $num2) && ($num1>$num3)){
            echo " Primer número <b>".$num1."</b> es mayor<br>";
        }elseif(($num2 > $num1) && ($num2>$num3)){
            echo " Segundo número <b>".$num2."</b> es mayor<br>";
        }else{
            echo " Tercer número <b>".$num1."</b> es mayor<br>";
        }
    }
  
   
} else {


    ?>
    <h3>COMPARAR TRES NÚMEROS</h3>
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <label for="">Escribe primer número</label>
        <input type="text" name="uno">
    <label for="">Escribe segundo número</label>
        <input type="text" name="dos">
    <label for="">Escribe tercer número</label>
        <input type="text" name="tres">
        <input type="submit" name="enviar" id="id1" value="Calcular">
    </form>
   <?php
}
   ?>
</body>
</html>