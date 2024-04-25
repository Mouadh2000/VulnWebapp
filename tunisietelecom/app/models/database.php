<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/config/config.php";

class Database{
    protected $connection;

    public function __construct() {
        global $conn;
        $this->connection = $conn;
    }
    public function getConnection() {
        return $this->connection;
    }
}