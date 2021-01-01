<?php namespace App\Controllers;
use App\Models\DataModel;
use App\Models\UserModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Home extends BaseController
{
	// fungsi yang digunakan untuk melindungi controller
	public function lindungi()
	{
		$cekdata = new UserModel();
		if(isset($_SESSION['nama'])){
			var_dump('data session sudah di set');
		}else{
			var_dump('data session belum berhasil di set');
		}
		var_dump('hai');
	}
	// fungsi yang digunakan untuk meload index
	public function index()
	{
		return view('welcome_message');
	}
	// fungsi yang digunakan untuk menampilkan data
	public function getdata()
	{
		echo view('tampildata');
	}
	public function tes()
	{
		$data = new DataModel();
		$pegawai = ["nama"=>$data->findAll()];
		echo view('tampil',$pegawai);
	}
	// untuk menampilkan tampilan registrasi
	public function create()
	{
		return view('create');
	}
	// ini digunakan untuk mencoba bagian yang akan di coba
	public function postcreate()
	{
		$model = new DataModel();
		$model->save([
			'nama'=>'JACKY CHAN',
			'jabatan'=>'Mandor',
			'golongan'=>'atas'
		]);
	}
	public function dashboard()
	{
		$session = session();
		var_dump($session->get());
		return view('dashboard');
	}

}
