<?php

include_once('Conexion.php');
Class Servicio{
    function insertar($nombre,$fecha_pago,$monto_pago){
        return pg_query(Connection::Conectar(),"insert into servicio.servicios (nombre,fecha_pago,monto_pago) values('$nombre','$fecha_pago','$monto_pago')");
    }
    function consultar(){
        $query= pg_query(Connection::Conectar(),'select * from servicio.servicios');
        $servicios = array();
        while($row=pg_fetch_array($query)){
            array_push($servicios,$row);
        }
        echo json_encode($servicios);
    }
}

?>

    