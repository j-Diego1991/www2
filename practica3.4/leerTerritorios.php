<?php
    $nombreArchivo = "territory_names.csv";
    $archivo = fopen($nombreArchivo,"r") or die ("No se puede abrir el archivo: $nombreArchivo");

    $datos = array();

    //Imprimir la etiqueta <table> para comenzar una tabla
    print("<table>");

    //Recorrer el archivo CSV registro por registro
    while(( $datos = fgetcsv($archivo, 0, ',', '"', '"')) !== False){
    //Imprimir el primer renglón de la tabla con <tr>
    print("<tr>");

        //Recorrer los datos del archivo CSV campo por campo
        foreach ($datos as $campo){
            //Imprimir la etiqueta para el dato de tabla con <td>
            print("<td>");
            //Imprimir el $dato: campo
            print("$campo");
            //Imprimir el cierre de la tabla con </td>
            print("</td>");
        }
        //Imprimir el cierre del renglón de la tabla con </tr>
        print("</tr>");
    }
    //Imprimir el cierre de la tabla
    print("</table>");

?>