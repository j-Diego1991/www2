<?php
//Crear una constante para crear los datos aleatorios
    define("valor_MAX", 10);

//Generara 10 numeros aleatoris
function generar($min, $max){
    $valor = mt_rand($min, $max)/10;
    return $valor;
}
//Crea el arreglo
$arreglo = array();

//Recorre el arreglo y almacena los datos
for ($i=0; $i < valor_MAX; $i++){
    
    $arreglo[] = generar(-14, 14);
}

//Muestra el arreglo
foreach ($arreglo as $val){
    echo $val . "<br>";
}

//Crea el archivo con los valores del $arreglo
$archivo = fopen("datos.txt", "w") or die ("No se pudo abrir el archivo");

//Pobla los datos del arreglo y los almacena en el archivo
for ($i=0; $i < valor_MAX; $i++){
    $dato = generar(-14,14);

    if ($i == valor_MAX-1){
        fwrite($archivo, $dato);
    }
    else{
        fwrite($archivo, $dato."\n");
    }
}
echo "Archivo creado";
?>