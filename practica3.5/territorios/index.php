<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Territorios</title>
</head>
<body>
    <?php
        $nombreArchivo = "territory_names2.csv";
        $archivo = fopen($nombreArchivo, "r") or die ("No se puede abrir el archivo");
        $datos = array();
    ?>
    <h1 class="titulo">Territorios del Mundo</h1>
    <div class="container">
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Abreviatura</th>
                    <th>Nombre</th>
                    <th>Nombre oficial</th>
                    <th>Gentillicio</th>
                </tr>
            </thead>
            <tBody>
                <?php
                while (($datos = fgetcsv($archivo, 0, ',', '"', '"')) !=false){
                    print ("<tr>");
                    foreach ($datos as $campo){
                        print("<td>");
                        print("$campo");
                        print("</td>");
                    }
                    print ("</tr>");
                }
                ?>
            </tBody>
        </table>
    </div>
</body>
</html>