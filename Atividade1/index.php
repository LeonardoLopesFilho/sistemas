<?php
include("nota.php");
include("product.php");

$p1 = new product(15,"Viola",1,"Viola da boa",1000);
$p2 = new product(11,"pinga",3,"ihul",15);

$produtos[] = $p1;
$produtos[] = $p2;

$n1 = new nota(1,"22/04/2021",1231231233,32183000115,"buteco do leo","09745529923","gustavo lima",$produtos);


echo "<pre>";
print_r($n1);
echo "</pre>"; 


/*
echo "<pre>";
print_r($produtos);
echo "</pre>"; 
*/

/*
echo "<br/>id do produto : ".$p1->get_id();
echo "<br/>Nome do produto: ".$p1->get_nome();
echo "<br/>Valor do produto: ".$p1->get_valor();
*/

?>