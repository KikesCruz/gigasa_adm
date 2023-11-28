<?php

namespace App\Controllers;
use App\Models\SubCategoryModel;
class SubCategoryController extends Controller{

    private $model;

    public function __construct(){
        $this ->model = new SubCategoryModel();
    }

    public function subcategory(){
        $subcat = $this -> model -> allSubCategory();
        $cat = $this -> model -> allCategory();

        $params=[
            "subcat" => $subcat,
            "cat" => $cat
        ];
        return $this ->renderView("subcategory",$params);
    }

    public function addSubCategory(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'id_cat' => $this -> sanitizerInt($_POST['category']),
                'name_sub' => $this -> sanitizerString($_POST['subCategory'])
            ];

            if ($data != '') {
             $response = $this -> model -> addSubCategory($data);
            } else {
                $response = 'blanco';
            }
            echo json_encode($response);

        }
        
    }
}