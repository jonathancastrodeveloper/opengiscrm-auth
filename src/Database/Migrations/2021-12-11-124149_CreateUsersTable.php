<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{

	
	public function up()
	{
		$this->forge->addField([
			'id_user' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'id_lead' => [
				'type' => 'INT',
				'constraint' => '11',			
			],
			'img' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'unique'         => true,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'id_country' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'id_state' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'id_role' => [
				'type' => 'INT',
				'constraint' => '11',
			],
			'created_at' => [
				'type' => 'DATETIME',				
			],
			'updated_at' => [
				'type' => 'DATETIME',				
			],
			'deleted_at' => [
				'type'   => 'DATETIME',				
			],	                          
		]);

		$this->forge->addKey('id_user', true);
		$this->forge->createTable('users');     
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
