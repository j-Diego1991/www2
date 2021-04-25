<?php

//Creamos un arreglo ($vuelos) para almacenar datos en el
$vuelos = array(
    array('id','Origen','Destino','Duración'),
    array('1','Nueva York','Londres','415'),
    array('2','Shangai','París','760'),
    array('3','Estambul','Tokyo','700'),
    array('4','Nueva York','Paris','435'),
    array('5','Moscú','París','245'),
    array('6','Lima','Nueva York','455'),
);

//Nombre del archivo a crear
$nombre_Archivo = 'vuelos.csv';

//Abrir el archivo en modo de escritura
$archivo = fopen($nombre_Archivo, 'w') or die("No se puede abrir el archivo: $nombre_Archivo");

//Recorrer el arreglo $vuelos
foreach ($vuelos as $vuelo){
    //escribir cada registro (vuelo) en el archivo CSV
    $resp = fputcsv($archivo, $vuelo, ',','"','"');
    //si el resultado de intentar escribir es estrictamente igual a false
    if($resp === false) {die("Error al escribir en CSV"); }
}
 //Cerar el archivo
fclose($archivo) or die ("No se puede cerrar el archivo: $nombre_Archivo");

//Mensaje de éxito en el navegador web
echo("<h1> Revisa el archivo: $nombre_Archivo </h1>");
?>