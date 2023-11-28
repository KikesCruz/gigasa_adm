<?php


namespace App\Models;

use Lib\Database;

class BrandsModel{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBrands(){
        $this -> db -> query("SELECT * FROM marcas WHERE status = 1");
        $result = $this -> db -> resultSet();
        return $result;
    }

    public function findBrandName($param){
        $this -> db -> query("SELECT nombre_marca FROM marcas WHERE nombre_marca REGEXP :nombre_marca");
        $this -> db -> bind(':nombre_marca', $param);
        $result = $this -> db -> resultSingel();
        return $result;
    }

    public function addBrandNew($param){
        $this -> db -> query("INSERT INTO marcas VALUES (null,:nombre_marca,1)");
        $this -> db -> bind(':nombre_marca', $param);

        if($this -> db -> execute()){
            return true;
        }else{
            return false;
        }
    }
}