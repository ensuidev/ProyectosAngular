<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: Origin, X-Requested-Width, Content-Type, Accept');

    require("conexion.php");
    $con = retornarConexion();

    $registros = mysqli_query($con, "SELECT codigo, descripcion, precio FROM articulos WHERE codigo=$_GET[codigo]");

    if ($reg = mysqli_fetch_array($registros)) {
        $vec[] = $reg;
    }

    $cad = json_encode($vec);
    echo $cad;
    header('Content-Type: application/json');