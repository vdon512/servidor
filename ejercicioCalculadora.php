<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Calculadora</title>
    <!---Tarea - Calculadora

a) Implementar una calculadora que realice las operaciones de sumar, restar, multiplicar y dividir.

b) Realizar la implementación anterior teniendo en cuenta  que el nombre de la función es calculadora y tiene 3 argumentos: 

    nombre de la función que realiza el cálculo
    valor de entrada 1
    valor de entrada 2.
       -->
        
    
</head>
<body>
    <form method="post">
    <label for="">Primer número</label>
                    <input type="number" name="n1">
    <label for="">Segundo número</label>
                    <input type="number" name="n2">
    <label for="">Operación sumar/restar/multiplicar/dividir</label>
    <input type="text" name="op">
    <input type="submit" name="enviar" value="Calcular">
    </form>

<?php

    function sumar($num1,$num2){
            return $num1+$num2;
    }
    function restar($num1,$num2){
        return $num1-$num2;
    }
    function multiplicar( $num1,$num2){
        return $num1*$num2;
    }
    function dividir($num1,$num2){
        return  $num1/$num2;
    }
    function calculadora($fun,$num1,$num2){
        return $fun($num1,$num2);
    }
    if (isset($_POST["enviar"])) {
        $num1=$_POST["n1"];
        $num2=$_POST["n2"];
        $fun=$_POST["op"];
    
                echo  " Resultado: ".calculadora($fun,$num1,$num2);
            }else{
    ?> 

                <?php
                }?>
</body>
</html>