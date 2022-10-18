<html>
<head>
    
    <title>Ejercicio 5</title>
    <style type="text/css">

               td, th {border: 1px solid grey; padding: 4px;}

               th {text-align:center;}

               table {border: 1px solid black;}
</style>
</head>
<body>
<table>

<tbody>

     <tr>

          <th>Variable</th>
          <th>Valor</th>
          <th>Tipo</th>
          <th>Tipo nuevo</th>
     </tr>
    <?php
    $arr=array ('$a1' => 347,'$a2' =>2147483647,'$a3' =>-2147483647,'$a4' =>23.7678,'$a5' =>3.1416,'$a6' =>"347",'$a7' =>"3.1416",'$a8' =>"Solo literal",'$a9' =>"12.3 Literal con número");
   $arr2=array("double","double","double","integer","integer","double","integer","double","integer");


$i=0;
  
   foreach($arr as $todo => $val){

print "<tr>";
   print "<td>".$todo."</td>";
   print "<td>".$val." </td> <td><b>".gettype($val)."</b></td>";
   settype($todo,$arr2[$i]);
   print " <td>".gettype($todo)."</td>";
print "</tr>";
  $i++;
   
   }
   ?>
   </tbody>

</table>
</body>
</html>