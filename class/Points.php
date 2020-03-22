<?php

class Points {
    private $db;

    public function __construct() {
        $this->db = New Database;
    }

    public function getAllPoints() {
        $this->db->query("SELECT * FROM points WHERE id = 1");

        $result = $this->db->resultSet();

        return $result;
    }
}

?>