<?php namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{

	protected $table = 'users';
	protected $primaryKey = 'id_user';
	
	protected $returnType = 'object';


	protected $allowedFields = ['img','first_name','last_name','email','password','id_country','id_state','id_role','created_at','updated_at','deleted_at'];

	protected $validationRules = [
		'first_name' => 'required',
		'last_name' => 'required',
		'email' => 'required',
		'password' => 'required'
	];

	

}
