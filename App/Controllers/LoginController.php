<?php

namespace App\Controllers;


class LoginController extends Controller{

    public function index(){
       
        return $this -> renderView('login');
    }

    public function auth(){
        if ($_POST['email'] == 'admin') {

            return $this->renderView('home', [
                'dato' => $_POST['email']
            ]);
        }
        header('Location: /');
    }
}