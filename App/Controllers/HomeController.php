<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        return $this->renderView('home');
    }
}
