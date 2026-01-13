<?php

namespace App\Controllers\Front;

use App\core\Controller;
use App\core\View;

class HomeController extends Controller
{
    public function index()
    {   
      View::render('home/index', [
            'title' => 'Test View',
            'username' => 'Yassine'
        ]);
    }
}
