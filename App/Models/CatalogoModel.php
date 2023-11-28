<?php

namespace App\Models;

use Lib\Database;

class CatalogoModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCatalogo(){
        $this -> db -> query("SELECT * FROM catalogo");
        $result = $this -> db -> resultSet();
        return $result;
    }

}