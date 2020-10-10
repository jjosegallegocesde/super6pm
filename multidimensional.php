<?php  

//ARREGLOS EN UNA(1) DIMENSION
$precios=array(1600,5000,2600);
$nombres=array("arroz","salchichas","huevos");
$marcas=array("diana","zenu","avinal");

//ARREGLO MULTIDIMENSIONAL
$productos=array(
    array("arroz","diana",1600),
    array("salchichas","zenu",5000),
    array("huevos","avinal",2600)
);

print_r($productos);
echo("<br>");
print_r($productos[0]);
echo("<br>");
echo($productos[0][1]);

//recorro el arreglo:
echo("<br>");
echo("<br>");
foreach($productos as $producto){

   echo($producto[0]);
   echo("<br>");

}









?>