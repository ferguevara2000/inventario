<?php

class Conexion
{

    public static function conectar()
    {

        $link = new PDO("mysql:host=bboikui4rpocyu8jk3uu-mysql.services.clever-cloud.com;dbname=bboikui4rpocyu8jk3uu", "uut0lbezm3digd2u", "hsKoKwzN20ktiyJGSrQQ", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND                                                                   => "SET NAMES utf8"));
        return $link;
    }
}
