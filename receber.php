<!DOCTYPE html>
<html>
    <head><style>
    body {
      font-family: Arial, sans-serif;
      background-color:rgba(179, 179, 179, 0.64);
      padding: 20px;
      justify-content: center; /* centraliza horizontalmente */
      align-items: center;     /* centraliza verticalmente */
          
    }
    .centralizado {
      width: 80%;
      max-width: 800px;
      text-align: center;
      padding: 20px;
      background-color:rgb(247, 59, 190);
      border-radius: 10px;
      box-shadow: 0 0 10px rgb(253, 246, 246);
    }
    </style>
    </head>
    <body> 
 <center>   <div class="centralizado">
     <h1>   <?php
 

$n1=$_POST['numero1'] ;
$n2=$_POST['numero2'];
$op=$_POST['op'];

if($op=="+")
 echo "Resultado da soma  ".$n1+$n2."<br>";
 if($op=="-")
 echo "Resultado da subtração    ".$n1-$n2."<br>";
 if($op=="*")
 echo "Resultado  da multiplicação  ".$n1*$n2."<br>";
 if($op=="/")
 echo "Resultado da divisão  ".$n1/$n2."<br>" ;

 $total = $n1+$n2;

 echo"<h2>Operação escolhida</h2>", $op ."<br>";

 echo " NUMERO ".$n1."<br>";

 echo "NUMERO ".$n2."<br>";


?>
</h1>

   
    <button onclick="location.href='index.php'">Ir para a pagina anterior </button>
    </div></center> </body>
</html>
