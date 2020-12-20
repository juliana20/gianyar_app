<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\UserModel;

class UserController extends Controller
{
	public function __construct()
	{
		$this->model = New UserModel;
	}
	public function index()
	{ 
		$data = [
			'item' => $this->model->get_all()
		];
		return view('backend.user.index',$data);
	}
   
}
