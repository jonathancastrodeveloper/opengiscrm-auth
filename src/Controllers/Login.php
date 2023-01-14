<?php namespace App\Controllers;

use App\Models\UserModel;


use App\Authentication\AuthenticatorInterface;


class Login extends BaseController implements AuthenticatorInterface
{

	protected $userModel;	

	protected $validation;

	protected $db;
	

	public function __construct()
	{

		$this->db = \Config\Database::connect();	

		$this->userModel = new UserModel();		

		helper(['form', 'url']);
		

		$this->validation =  \Config\Services::validation();

	}

	public function index()
	{		

		$data['tittle'] = 'Login';

		$data['session'] = $this->session;
		

		return view('login',$data);
	}	


	public function sign()
	{
		

		if ($this->request->isAJAX())
		{


			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');



			$rules = [
				'password' => [
					'rules'  => 'required',
					'errors' => [
						'required' => 'Password is required.'
					]
				],
				'email'    => [
					'rules'  => 'required|valid_email',
					'errors' => [
						'required' => 'Email is required.',
						'valid_email' => 'Verify email.'
					]
				],
			];




			if (!$this->validate($rules))
			{


				$data = $this->validator->listErrors();



				return $data;




			}else{
				

				if ($this->authenticator($email,$password)) {			


					$this->setSession($email);


					if ($this->session->get('id_role') == 1) {

						$access = array(
							'access' => 1,
							'token' => csrf_hash()
						);

						return $this->response->setJSON($access);

					}

					if ($this->session->get('id_role') == 2) {

						$access = array(
							'access' => 2,
							'token' => csrf_hash()
						);

						return $this->response->setJSON($access);

					}



				}else{

					$access = array(
						'access' => 3,
						'token' => csrf_hash()
					);

					return $this->response->setJSON($access);

				}



			}




    }//end is ajax		




}


public function out()
{	

	$this->session->destroy();	

	return redirect()->to('/');		

	
}

public function register()
{	

	$data['tittle'] = 'Register';

	$data['session'] = $this->session;

	
	return view('register',$data);


}

public function create()
{

	$first_name = $this->request->getPost('first_name');
	$last_name = $this->request->getPost('last_name');
	$email = $this->request->getPost('email');
	$password = $this->request->getPost('password');

	$hash = password_hash($password,PASSWORD_BCRYPT);

	$created_at = date('y-m-d');

	$updated_at = date('y-m-d');

	$deleted_at = date('y-m-d');	


	$data = array(
		'img' => 'user.png',
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'password' => $hash,
		'id_country' => 2,
		'id_state' => 2,
		'id_role' => 2,
		'created_at' =>  $created_at,
		'updated_at' => $updated_at,
		'deleted_at' => $deleted_at
	);


	if ($this->userModel->save($data) == false) {
		

		$data['tittle'] = 'Register';

		$data['session'] = $this->session;


		$data['errors'] = $this->userModel->errors();


		return view('register',$data);

	}


	$this->session->setFlashdata('create','Register success');

	return redirect()->to('/register');


}

public function authenticator($email, $password)
{
	
	$hash = $this->userModel->where('email',$email)
	->findColumn('password');

	return $this->verifyHash($password,$hash[0]);

}

public function verifyHash($password,$hash)
{
	return password_verify($password,$hash);

}

public function setSession($email)
{		

	$data = $this->userModel->where('email',$email)
	->find();

	$data=array(
		'id_user' => $data[0]->id_user,		
		'first_name' => $data[0]->first_name,
		'last_name' => 	$data[0]->last_name,	
		'email' => $data[0]->email,		
		'id_role' => $data[0]->id_role								
	);	


	return $this->session->set($data);

}

}
