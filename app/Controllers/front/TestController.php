<?php 

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\Validator;
use App\Core\View;


class TestController extends Controller
{
    public function form(){
        View::render("test/form");
    }

    public function submit(){
        $validator = new Validator;

        $validator
            ->required('email', $_POST['email'] ?? '')
            ->email('email', $_POST['email'] ?? '')
            ->required('password', $_POST['password']?? '')
            ->min('password', $_POST['password']?? '', 6);

        if($validator -> fails()){
            View::render('test/form', [
                'errors' => $validator -> errors()
            ]);
            return;
        }

        echo "Donnees valides";
    }

}