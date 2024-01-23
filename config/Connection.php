<?php 
namespace Config;
class Connection {

    public array $config;

    public function __construct()
    {
        $this->config = [
            'host' => 'localhost',
            'user' => 'root',
            'pass' => 'mysql',
            'db' => 'php2'
         ];   
    
         
    }
}
?>