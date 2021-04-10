<?php

$nombreArchivo = "archivoNuevo.txt";

$archivo = fopen($nombreArchivo, "w")
    or die("Error al abrir el archivo");

fwrite($archivo, "probando, probando, si, 1, 2, 3\n");

fclose($archivo);

$texto = readfile($nombreArchivo);
echo "<div> $texto </div>";

?>