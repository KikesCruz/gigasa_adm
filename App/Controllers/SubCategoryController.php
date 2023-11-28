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
}