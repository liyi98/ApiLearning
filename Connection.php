<?php

class Connection {

    private $con;

    public function __construct() {
        include 'Config.php';
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function connect() {
        return $this->con;
    }
}

?>