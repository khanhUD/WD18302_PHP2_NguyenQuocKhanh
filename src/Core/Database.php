<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private static $dbHost = 'localhost';

    private static $dbName = 'php2';

    private static $dbUser = 'root';

    private static $dbPassword = 'mysql';

    public function PDO()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
