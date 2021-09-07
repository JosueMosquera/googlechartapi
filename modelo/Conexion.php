<?php
    Class Connection{
        public static function Conectar ()
        {
            try {
                $con=pg_connect('host=localhost port=5432 dbname=php user=postgres password=199811josue')
                or die('fallo la conexion :' . pg_last_error());
                return $con;
            }
                catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
?>