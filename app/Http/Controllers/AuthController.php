<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	private $user_model;

	function __construct()
	{
		$this->user_model = new User;
	}

	public function postLogin(Request $request)
	{
		
		\Validator::make($request->all(), [
            'email' => 'required',
	        'password' => 'required'
        ]);

		$email = $request->get('email');
		$password = $request->get('password');

		if (\Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back();
	}

	public function postRegister(Request $request)
	{
		\Validator::make($request->all(),[
			'name' => 'required',
	        'username' => 'required|unique:tbl_user|max:255',
	        'email' => 'required|unique:tbl_user',
	        'password' => 'required'
	    ]);

		$data['name'] = $request->get('name');
		$data['username'] 	= $request->get('username');
		$data['email'] 		= $request->get('email');
		$data['password'] 	= $request->get('password');

		$success = $this->user_model->register($data);

		return $success ? 'true' : 'false';
	}
}