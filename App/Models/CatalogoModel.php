<?php

namespace App\Models;

use Lib\Database;

class CatalogoModel
 {
    private $db;

    public function __construct()
 {
        $this->db = new Database;
    }

    public function getCatalogo()
 {
        $this->db->query( "
        select 
        c.id_product,
        c.sku,
        c.nombre_product,
        cat.nombre_cat,
        sc.nombre_Subcat,
        m.nombre_marca,
        c.status_product
        from catalogo c 
        inner join sub_categorias sc on (sc.id_catSub = c.id_catSub)
        inner join categorias cat on (cat.id_cat = sc.id_cat)
        inner join marcas m on (m.id_marca = c.id_marca)

        
        
        " );
        $result = $this->db->resultSet();
        return $result;
    }

    public function findProductById( $param ) {
        $consult = 'select 
        c.id_product,
        c.sku,
        c.nombre_product,
        cat.nombre_cat,
        sc.nombre_Subcat,
        m.nombre_marca,
        c.img1,
        c.img2,
        c.img3,
        c.description,
        c.costo,
        c.precio,
        c.status_product
        from catalogo c 
        inner join sub_categorias sc on (sc.id_catSub = c.id_catSub)
        inner join categorias cat on (cat.id_cat = sc.id_cat)
        inner join marcas m on (m.id_marca = c.id_marca)
        where c.id_product = :id_product';

        $this -> db -> query($consult);
        $this -> db -> bind(':id_product',$param);
        
        return $this -> db -> resultSingel();
        
    }
}
