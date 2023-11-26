<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends Controller
{

    private $model;
    public function __construct()
    {
        $this->model = new CategoryModel();
    }
    public function category()
    {

        $result  = $this->model->allCategory();

        //return $result;
        return $this->renderView('category', $result);
    }

    public function saveCategory()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitizar string
            $data = $this->sanitizerString($_POST['newCategory']);

            if ($data != '') {

                $response = $this->model->findCatName($data);

                switch (true) {
                    case is_array($response):
                        if ($response['nombre_cat'] == $data ) {

                            $response = 'existe';
                        }
                        break;
                    case is_bool($response):
                        $response = 'agregar';
                        $this->model->addCategory($data);
                        break;
                }
            } else {
                $response = 'blanco';
            }
            echo json_encode($response);
        }
    }

    public function deleteCategory()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitizar string
            $data = $this->sanitizerInt($_POST['id_cat']);
        }

        $response = $this->model->deleteCategory($data);
        echo json_encode($response);
    }

    public function updateCategory()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitizar string
            $id_cat = $this->sanitizerInt($_POST['id_cat']);
            $name_cat = $this->sanitizerString($_POST['name_cat']);

            $params = [
                'id_cat' => $id_cat,
                'nombre_cat' => $name_cat
            ];
        }

        if ($params['nombre_cat'] == '') {
            echo json_encode(false);
        } else {
            $response = $this->model->updateCategory($params);
            echo json_encode($response);
        }
    }
}
