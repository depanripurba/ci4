<?php namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
// https://www.xvideos.com/video54820709/19_year_old_korean_girl_with_perfect_big_tits_fucks_to_get_into_calendar#

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }
    public function login()
    {
        $autentikasi = new UserModel();
        $cek = $autentikasi->where('email',$_POST['email'])->first();
        // var_dump($cek);
        if($cek){
            $cekpassword = password_verify($_POST['password'],$cek['password']);
            if($cekpassword){
                echo 'password yang anda masukkan sudah benar';
            }else{
                echo 'password yang anda masukkan salah';
            }
            var_dump($cek['password']);
        }else{
            echo 'data gagal ditemukan';
        }
        
    }
}