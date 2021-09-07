<?php
require_once '../modelo/Conexion.php';
require_once '../modelo/operaciones.php';
switch($_POST['accion']){
    case 1:{
        if(isset($_POST['nombre'])){
            $nombre=$_POST['nombre'];
            $fecha_pago=$_POST['fecha_pago'];
            $monto_pago=$_POST['monto_pago'];
            $obj = new Servicio();
            if($obj->insertar($nombre,$fecha_pago,$monto_pago)==true){
                header("Location:../index.php");
            }
                else{
                    header("Location:..vista/error.php");
                }
            }
        }
    }