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
}
