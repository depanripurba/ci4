<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DataModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use PDO;

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
        $userdata = [
            'email'=>$_POST['email'],
            'namadepan'=>$_POST['namadepan'],
            'loginstatus'=>true
        ];
        session()->set($userdata);
        return redirect()->to(base_url('/'));
    }
    public function edituser($id)
    {
        $model = new DataModel;
        $tes = ['data'=>$model->find($id)];

        return view('editdata',$tes);
    }
}