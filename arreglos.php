<?php  

//ARREGLO(indexado)
$canasta=array("arroz","huevitos","frijolitos");
echo("<br>");
print_r($canasta);
echo("<br>");
echo($canasta[1]);

//ARREGLO(asociativos)
$canastaAsociativa=array("producto1"=>"arroz","producto2"=>"huevitos","producto3"=>"frijolitos");
echo("<br>");
echo("<br>");
print_r($canastaAsociativa);
echo("<br>");
echo($canastaAsociativa["producto2"]);

//CICLOS FOR
echo("<br>");
echo("<br>");
for($i=0; $i<count($canasta); $i++){
   echo($canasta[$i]);
   echo("<br>");
}

//CICLO FOREACH
echo("<br>");
echo("<br>");
foreach($canastaAsociativa as $clave=>$valor){

    echo($valor);
    echo("<br>");

}






?>