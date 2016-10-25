<?php

namespace app;

use PDO;

class Db {
    private $host;
    private $user;
    private $password;
    private $database;
    private $db;

    public static $instance = null;

    private function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->db = new PDO("mysql:host=localhost", "root", "");
        $this->db->query("SET NAMES utf-8");
    }

    public function getDb() {
        return $this->db;
    }

    public static function getInstance($host, $user, $password, $database) {
        if (Db::$instance == null)
            Db::$instance = new Db($host, $user, $password, $database);
        else
            return;
            
        return Db::$instance;
    }

}
