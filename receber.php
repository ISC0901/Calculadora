<?php
 

$n1=$_POST['numero1'] ;
$n2=$_POST['numero2'];
$op=$_POST['op'];

if($op=="+")
 echo "resultado da soma  ".$n1+$n2."<br>";
 if($op=="-")
 echo "resultado da subtração    ".$n1-$n2."<br>";
 if($op=="*")
 echo "resultado  da multiplicação  ".$n1*$n2."<br>";
 if($op=="/")
 echo "resultado da divisão  ".$n1/$n2."<br>" ;

 $total = $n1+$n2;

 echo"<h2>operação escolhida</h2>", $op."<br>";

 echo " NUMERO ".$n1."<br>";

 echo "NUMERO ".$n2."<br>";


?>