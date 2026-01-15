<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Models\User;
use App\Core\View;


class HomeController extends Controller
{
    public function index()
    {
        $users =  User::all();

        $userFound = User::find(3);

        View::render('home/index', [
            'users' => $users,
            'title' => 'Liste des utilisateurs',
            'userFound' => $userFound
        ]);
    }

    public function store()
    {
        $this -> verifyCsrf();

        User::create([
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        $this->redirect('/');
    }

    public function update()
    {
        $this -> verifyCsrf();

        User::update((int) $_POST['id'], [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        $this->redirect('/');
    }

    public function delete()
    {   
        $this -> verifyCsrf();

        User::delete((int) $_POST['id']);

        $this->redirect('/');
    }
}
