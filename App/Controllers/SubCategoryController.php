<?php

namespace App\Controllers;
use App\Models\SubCategoryModel;
class SubCategoryController extends Controller{

    private $model;

    public function __construct(){
        $this ->model = new SubCategoryModel();
    }

    public function subcategory(){
        $result = $this -> model -> allSubCategory();
        return $this ->renderView("subcategory",$result);
    }

}