<?php

namespace Lib\Database;

use Lib\IDatabase;

class MySQLi implements Lib\IDatabase {

    protected $conn;

    public function connect($host, $user, $pass, $dbName) {

        $conn = mysqli_connect($host, $user, $pass, $dbName);


        $this->conn = $conn;
    }

    public function query($sql) {

        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function close() {
        if ($this->conn)
            mysqli_close($this->conn);
        $this->conn = nusll;
    }

}
