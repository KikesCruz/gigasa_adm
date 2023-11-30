<?php

namespace App\Models;

use Lib\Database;

class InventEcomModel
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query('
        select 
        id_inventario,
        c.sku,
        c.nombre_product,
        sc.nombre_Subcat,
        cat.nombre_cat,
        m.nombre_marca,
        c.precio,
        ecom.stock,
        (c.precio * ecom.stock) total_stock
        from ecomminvent ecom
        inner join catalogo c ON (c.id_product = ecom.id_product)
        inner join sub_categorias sc on(sc.id_catSub = c.id_catSub)
        inner join categorias cat on (cat.id_cat = sc.id_cat)
        inner join marcas m on (m.id_marca = c.id_marca)
        ');

        $result = $this -> db -> resultSet();
        return $result;
    }


} 