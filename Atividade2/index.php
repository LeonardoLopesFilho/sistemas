<?php
include("user.php");


$p1 = new user(1,"Leozaosacana",1); //ADMINISTRADOR

echo $p1->acao($p1->get_nivel_a()); //ADMINISTRADOR


//$p2 = new user(2,"Leo",2); //SUPERVISOR

//echo $p2->acao($p2->get_nivel_a()); //SUPERVISOR

//$p3 = new user(3,"Maiara",3); //PADRAO

//echo $p3->acao($p3->get_nivel_a()); //PADRAO


//$p4 = new user(4,"maraisa",4); //ESTAGIARIO

//echo $p4->acao($p4->get_nivel_a()); //ESTAGIARIO


echo "<pre>";
print_r($p3);
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