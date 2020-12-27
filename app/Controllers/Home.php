<?php namespace App\Controllers;
use App\Models\DataModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Home extends BaseController
{
	public function index()
	
	{
		return view('welcome_message');
	}

	public function getdata()
	{
		echo view('tampildata');
	}
	public function tes()
	{
		echo view('tes');
	}

}
