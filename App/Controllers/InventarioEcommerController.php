<?php 
namespace App\Controllers;

use App\Models\InventEcomModel;

class InventarioEcommerController extends Controller{
    private $model;

    public function __construct(){
        $this -> model = new InventEcomModel();
    }

    public function getInvent(){

        $getInventory = $this -> model -> getProducts();
        
        return $this -> renderView('inventory', $getInventory);
    }
}