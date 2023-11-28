<?php

namespace App\Controllers;

use App\Models\CatalogoModel;

class ArticulosCatController extends Controller
{
    private $model;

    public function __construct(){
        $this -> model = new CatalogoModel();
    }
    public function catalogo()
    {
        $getCatalogo = $this -> model -> getCatalogo();
        
        return $this -> renderView('catalogo',$getCatalogo);
    }
}
