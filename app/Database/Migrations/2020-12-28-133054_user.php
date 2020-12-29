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
			'email'=>[
				'type'=>'VARCHAR',
				'constraint'=>'200'
			]
			,
			'password'=>[
				'type'=>'VARCHAR',
				'constraint'=>'300'
			]
			
		]);
		$this->forge->addKey('id', true);
    	$this->forge->createTable('autuser');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('autuser');
	}
}
