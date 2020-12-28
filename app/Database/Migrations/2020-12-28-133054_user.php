<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'auto_increament'=>true
			],
			
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
