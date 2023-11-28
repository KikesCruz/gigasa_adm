<?php

namespace App\Controllers;

use App\Models\BrandsModel;


class BrandsController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model  = new BrandsModel();
    }

    public function brands()
    {
        $allBrands = $this -> model ->getAllBrands();
        return $this -> renderView('brands',$allBrands);
    }

    public function addBrand(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $param = $this->sanitizerString($_POST['newBrand']);
            echo $param;
            if($param != ''){

                $findBrand = $this -> model -> findBrandName($param);
                echo is_array($findBrand);
                switch(true){
                    case is_array($findBrand):
                        if($findBrand['nombre_marca'] == $param){
                            $response = 'exists';
                        }
                    break;

                    case is_bool($findBrand):
                        $this->model->addBrandNew($param);
                        $response = 'add';
                    break;
                }
            } else {
                $response = 'empty';
            }

            echo json_encode($response);
        }

    }
}
