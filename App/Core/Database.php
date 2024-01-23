<?php
namespace App\Core;
use Config\Connection;
class Database
{

    private $db;
    public function __construct()
    {
        $this->db = new Connection();
        print_r($this->db);
    }
    
}