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

    public function showDetails(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $data = $this -> sanitizerInt($_POST['id_product']);

            $resultSearch = $this -> model -> findProductById($data);

            
           $view = $this -> renderView('catproductdetails',$resultSearch); 
           echo json_encode($view);
        }
    }

    
    public function upViewProduct(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            $data = $this -> sanitizerInt($_POST['id_product']);

            $resultSearch = $this -> model -> findProductById($data);

       
           $view = $this -> renderView('catproductedit',$resultSearch); 
           echo json_encode($view);
        }
    }
}
