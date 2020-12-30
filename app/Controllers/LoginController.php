<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }
}