<?php

namespace Lib\Database;

use Lib\IDatabase;

class MySQL implements Lib\IDatabase {

    protected $conn;

    public function connect($host, $user, $pass, $dbName) {

        $conn = mysql_connect($host, $user, $pass);

        mysql_select_db($conn, $dbName);

        $this->conn = $conn;
    }

    public function query($sql) {

        return mysql_query($sql, $this->conn);
    }

    public function close() {
        if ($this->conn)
            mysql_close($this->conn);
        $this->conn == null;
    }

}
