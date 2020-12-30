<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class UserController extends BaseController
{
    public function SaveUser()
    {
    
        $model = new UserModel();
        $model->save([
			'email'=>'JACKY CHAN',
			'password'=>'Mandor',
		]);
    }
}