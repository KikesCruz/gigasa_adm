<?php

namespace App\Controllers;
class Controller{

    public function renderView($view, $param = []){
    
        extract($param);

        $view = str_replace(".","/", $view);

       
        if (!file_exists(APP_ROOT."Resources/views/components/{$view}.php")) {
            return "No existe";
        }

        
        ob_start();
     
        include(APP_ROOT."Resources/views/components/{$view}.php");

        $page = ob_get_clean();
        
        return $page;
    }

    public function sanitizerString($paramsString)
    {
        $paramsString = preg_replace('/\s{2,}/',' ', $paramsString);
        $paramsString = preg_replace('/[^A-Za-záéíóúñÑ ]/','', $paramsString);
        $paramsString = str_replace('&nbsp;', '', $paramsString);
        $paramsString = strip_tags($paramsString);
        $paramsString = html_entity_decode($paramsString);
        $paramsString = trim($paramsString);
        $paramsString = strtolower($paramsString);
            return $paramsString;
    
    }

    public function sanitizerInt($paramsInt)
    {

            $paramsInt = str_replace('&nbsp;', '', $paramsInt);
            $paramsInt = strip_tags($paramsInt);
            $paramsInt = html_entity_decode($paramsInt);
            $paramsInt = trim($paramsInt);
            
            return $paramsInt;
        
    }



}