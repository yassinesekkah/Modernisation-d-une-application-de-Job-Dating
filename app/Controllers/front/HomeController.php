<?php

namespace App\Controllers\Front;

use App\core\Controller;
use App\models\User;
use App\core\View;

class HomeController extends Controller
{
    public function index()
    {   
       $users =  User::all();

      View::render('home/index', [
            'users' => $users,
            'title' => 'Liste des utilisateurs'
        ]);
    }
}
