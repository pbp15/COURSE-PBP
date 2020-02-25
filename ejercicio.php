<?php

//ejercicio Nº1
$resultado = 32+ 3 ;
echo "<br>" .$resultado ; 
$resultado1 = 3*(2+3); 
echo "<br>". $resultado1 ; 

//ejercicio Nº2

$valor = 10;

//$valor es mayor que 5 pero menor que 10
if($valor>5 && $valor<10) {
  echo "<br>" .$valor." es mayor que 5 y menor a 10" ;
}

//$valor es mayor o igual a 0 pero menor o igual a 20
if($valor>=0 &&  $valor<=20){
  echo "<br>" .$valor. "es mayor o igual que 0 y menor o igual a 20";
  }
 
  
//$valor es igual a “10” asegurando que el tipo de dato sea cadena
if($valor === '10' ){
  echo "<br>" .$valor . "es igual a “10” asegurando que el tipo de dato sea cadena";
  
}

//$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15

if(($valor>0 && $valor<5) or ($valor>10 && $valor<15)){
  echo "<br>". $valor . " es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15";

}









?>