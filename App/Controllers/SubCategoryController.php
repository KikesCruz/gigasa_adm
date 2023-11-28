<?php

namespace App\Controllers;

use App\Models\SubCategoryModel;

class SubCategoryController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new SubCategoryModel();
    }

    public function subcategory()
    {
        $subcat = $this->model->allSubCategory();
        $cat = $this->model->allCategory();

        $params = [
            "subcat" => $subcat,
            "cat" => $cat
        ];
        return $this->renderView("subcategory", $params);
    }

    public function addSubCategory()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id_cat' => $this->sanitizerInt($_POST['category']),
                'name_sub' => $this->sanitizerString($_POST['subCategory'])
            ];

            if ($data != '') {
                $response = $this->model->addSubCategory($data);
            } else {
                $response = 'blanco';
            }
            echo json_encode($response);
        }
    }

    public function updateSubCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'id_cat' => $this->sanitizerInt($_POST['id_cat'] == '' ? 0 : $_POST['id_cat']),
                'id_subCat' => $this->sanitizerInt($_POST['id_subCat']),
                'newName' =>  $this->sanitizerString($_POST['newName'])
            ];

         if ($datos['id_cat'] == 0) {
                $findResult =  $this->model->findSubCatExists($datos);
                switch ($findResult) {
                    case true:
                        $res = 'exists';
                        break;
                    case false:
                        $this->model->upSubCategory($datos);
                        $res = 'add';
                        break;
                }
            } else if ($datos['id_cat'] > 0) {
               $findResult =  $this->model->findSubCatExists($datos);
                switch ($findResult) {
                    case true:
                        $res = 'exists';
                        break;
                    case false:
                        $this->model->upSubCategory($datos);
                        $res = 'add';
                        break;
                }
            }
        
            echo json_encode($res);
        }
    }

    public function deleteSubCategory(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitizar string
            $data = $this->sanitizerInt($_POST['id_cat']);
        }

        $response = $this->model->deleteSubCategory($data);
        echo json_encode($response);
    }
}
