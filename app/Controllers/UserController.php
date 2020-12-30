<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class UserController extends BaseController
{
    public function SaveUser()
    {
        $model = new UserModel();
        $model->save([
			'email'=>$_POST['email'],
            'password'=>password_hash($_POST['password'],true),
            'namadepan'=>$_POST['namadepan'],
            'namabelakang'=>$_POST['namabelakang']
        ]);
        return redirect('registrasi');
    }
}