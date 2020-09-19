
<?php 



$producto1='arroz';
$producto2='huevitos';
$producto3='frijolitos';
$producto4='panela';
$producto5='cafe';
$producto6='pasta';
$producto7='media guaro';
$producto8='papas';
$producto9='carne';
$producto10='sal';

$precio1=6000;
$precio2=10000;
$precio3=8000;
$precio4=4000;
$precio5=12500;
$precio6=6000;
$precio7=15000;
$precio8=6000;
$precio9=25000;
$precio10=800;




$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

$total=50000;


if($total<=80000){
    echo("Gracias por su compra");
}else{
    echo('Debes de pedir fiado');
}




?>

