<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;


class LoginController extends BaseController
{
    public function index()
    {
        if(session()->loginstatus){
            return redirect()->to(base_url('/'));
        }
        return view('login');
    }
    public function login()
    {
        $session = session();
        $autentikasi = new UserModel();
        $cek = $autentikasi->where('email',$_POST['email'])->first();
        if($cek){
            $cekpassword = password_verify($_POST['password'],$cek['password']);
            if($cekpassword){
                echo 'password yang anda masukkan sudah benar';
                $userdata = [
                    'email'=>$cek['email'],
                    'namadepan'=>$cek['namadepan'],
                    'loginstatus'=>true
                ];
                $session->set($userdata);
                return redirect()->to(base_url('/'));
            }else{
                return redirect()->back()->withInput()->with('data','Password yang anda masukkan salah');
            }
            var_dump($cek['password']);
        }else{ 
            echo 'data gagal ditemukan';
        }
        
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}