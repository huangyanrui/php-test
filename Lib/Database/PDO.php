<?php

namespace Lib\Database;

use Lib\IDatabase;

class PDO implements Lib\IDatabase{
   
    protected  $conn;
    public function connect($host, $user, $pass, $dbName) {
        new \PDO("mysql:host=$host;dbname=$dbName", $user, $pass);
        $this->conn;
    }
    

    public function query($sql) {
        return $this->conn->query($sql);
    }
    
    public function close() {
        unset($this->conn);
    }

}