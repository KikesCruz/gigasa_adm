<?php

namespace App\Models;

use Lib\Database;

class SubCategoryModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * Optiene el listado de las sub categorias
     */

    public function allSubCategory()
    {
        $this->db->query('select sub.id_catSub, cat.nombre_cat,sub.nombre_SubCat from sub_categorias sub
                            inner join categorias cat on(cat.id_cat = sub.id_cat)
                            where sub.status = 1');
        $result = $this->db->resultSet();
        return $result;
    }

    public function allCategory()
    {
        $this->db->query('select id_cat,nombre_cat from categorias where status_category =1;');
        $result = $this->db->resultSet();
        return $result;
    }

    public function addSubCategory($params)
    {
        $this->db->query("INSERT INTO sub_categorias VALUES (null,:nombre_SubCat,1,:id_cat) ");
        $this->db->bind(':nombre_SubCat', $params['name_sub']);
        $this->db->bind(':id_cat', $params['id_cat']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function findSubCatExists($param)
    {

        $where = $param['id_cat'] == 0 ? 
        'nombre_SubCat like :nombre_SubCat and  id_cat = (select id_cat from sub_categorias limit 1)' :
        'id_cat = :id_cat and nombre_SubCat = :nombre_SubCat';
        echo $where;
        $this->db->query("SELECT nombre_SubCat FROM sub_categorias WHERE {$where} ");

        if($param['id_cat'] == 0){
            $this->db->bind(":nombre_SubCat", '%' . $param['newName'] . '%');
        }else{
            $this->db->bind(":id_cat", $param['id_cat']);
            $this->db->bind(":nombre_SubCat",  $param['newName'] );
        }

        $response = $this->db->resultSingel();
        return $response;
    }

    public function upSubCategory($params)
    {

        $where = $params['id_cat'] == 0 ? 'SET nombre_SubCat = :nombre_SubCat WHERE id_catSub = :id_catSub' : 'SET nombre_SubCat = :nombre_SubCat, id_cat = :id_cat where id_catSub = :id_catSub';


        $this->db->query("UPDATE sub_categorias {$where}");
        if ($params['id_cat'] == 0) {
            $this->db->bind(":nombre_SubCat", $params['newName']);
            $this->db->bind(":id_catSub", $params['id_subCat']);
        } else {
            $this->db->bind(":id_cat", $params['id_cat']);
            $this->db->bind(":id_catSub", $params['id_subCat']);
            $this->db->bind(":nombre_SubCat", $params['newName']);
        }

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteSubCategory($param){
        $this->db->query("UPDATE sub_categorias SET status = 2 WHERE id_catSub  = :id_catSub");
        $this->db->bind(":id_catSub", $param);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
