<?php

namespace App;

use PDO;
use PDOException;

class Connection{

    public static function getDb()
    {
        try {

            $conn = new \PDO("mysql:host=localhost;dbname=mvc;charset = utf-8","root","root");
            return $conn;

        } catch (\PDOException $e) {
            echo (" Error :".$e);
        }
    }
    
}



?>