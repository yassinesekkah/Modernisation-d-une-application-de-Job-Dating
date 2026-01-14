<?php 
namespace App\Core;

abstract class Controller 
{
    protected string $viewsPath = __DIR__ . "/../views/";

    ///kaysaweb l path pour utiliser sur les classes enfants
    protected function render(string $view, array $data = []): void
    {   
        ///hna extract kadir transfer lel keys l variables
        if(!empty($data)){
            extract($data);
        }

        require $this -> viewsPath . $view . ".php";
    }

    //// base redirect
    protected function redirect(string $path): void
    {
        header("Location: " . $path);
        exit;
    }

}