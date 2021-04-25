<?php

//Variable con el nombre del archivo
$nombreArchivo = "datos.txt";

//Abre el archivo
$archivo = fopen($nombreArchivo, "r") or die ("No se puede abrir el archivo");

//Crea el arreglo
$arreglo = array();

//Lee el archivo y almacena los datos en el arreglo
while(!feof($archivo)){
    $arreglo [] = fgets($archivo);
}
 //Ciera archivo
fclose($archivo);

//Devuelve el tipo de dato que hay en el $arreglo
var_dump($arreglo);

//Suma los elementos del arreglo
$suma = array_sum($arreglo);
echo "<br>Suma total: ". $suma;

//Cuenta la cantidad de elementos del arreglo
$num_Elementos = count($arreglo);
echo "<br>Número de elementos: ". $num_Elementos;

//Calcula la media a partir de $suma y de $num_Elementos
$media = $suma/$num_Elementos;
echo "<br>Valor de la media: ". $media;

//Función max -> devuelve el valor mas grande del $arreglo
//Función min -> devuelve el valor mas pequeño del $arreglo
$valor_G = max($arreglo);
$valor_P = min($arreglo);

//funcion que devuelve el valor más alejado de la media
function valor_masAlejado ($valor_G, $valor_P, $media){
    $n1 = $valor_G - $media;
    $n2 = $media - $valor_P;
    if ($n1 > $n2){
        return $valor_G;
    }
    else{
        return $valor_P;
    }
}
 
//Invoca la funcion valor_masAlejado
$valor_alejado = valor_masAlejado($valor_P, $valor_G, $media);
echo "<br>Valor mas alejado respecto a la media: ". $valor_alejado;

//funcion array_search->  devuelve la posicion del valor mas alejado
$posicion = array_search($valor_alejado, $arreglo);
echo "<br>Posicion del valor mas alejado: ". $posicion."</br>";

//Cambiamos la posición a -1
$arreglo[$posicion] = -1;
echo "<br>".var_dump($arreglo);

//funcion que deveuelve el nuevo valor de la media sin 
//el valor en la posición -1
function nuevoProm ($arreglo){
    //Inicializa una nueva variable
    $sum = 0;

    //Recorre el arreglo
    foreach ($arreglo as $valor){
        if ($valor != -1){
            $sum += $valor;
        }
    }
    //Calcula el promedio
    $prom = $sum / (count($arreglo) - 1);
    return $prom;
}

$promedioNuevo = nuevoProm($arreglo);
echo "<br>Nuevo valor de la media: ".$promedioNuevo;



?>
