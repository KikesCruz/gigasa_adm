<?php

namespace App\Models;

use lib\Database;

class CategoryModel  {

    private $db;

    public function __construct(){
        $this -> db = new Database;
    }

    /**
     * optiene el listado de las categorías
     */ 
    public function allCategory(){
        $this -> db -> query('SELECT * FROM categorias WHERE status_category = 1');
        $result = $this -> db -> resultSet();
        return $result;
    }

    public function addCategory($value){
  
        $this -> db -> query("INSERT INTO categorias (id_cat, nombre_cat, status_category) VALUES (null,:nombre_cat,1)");
        $this -> db -> bind(':nombre_cat',$value);

        if($this -> db -> execute()){
            return true;
        } else {
            return false;
        }
    
    }

    public function deleteCategory($param){
        $this -> db -> query("UPDATE categorias SET status_category = 2 WHERE id_cat  = :id_cat");
        $this -> db -> bind(":id_cat", $param);

        if($this -> db -> execute()){
            return true;
        }else{
            return false;
        }

    }

    public function findCatName($param){
        $this -> db -> query("SELECT nombre_cat FROM categorias WHERE nombre_cat = :nombre_cat");
        $this -> db -> bind(":nombre_cat", $param);
        $response = $this -> db -> resultSingel();
        return $response;
    }

    public function updateCategory($param)
    {
        $this->db->query("UPDATE categorias SET nombre_cat = :nombre_cat WHERE id_cat  = :id_cat");
        $this->db->bind(":nombre_cat", $param['nombre_cat']);
        $this->db->bind(":id_cat", $param['id_cat']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
}