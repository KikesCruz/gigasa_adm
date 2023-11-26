<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return $this->renderView('home');
    }

    public function validar()
    {

  

        if ($_POST['email'] == 'a') {

            return $this->renderView('home', [
                'dato' => $_POST['email']
            ]);
        }

        header('Location: /');
    }
}
