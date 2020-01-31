<?php namespace App\Controllers;

//use Models\testmodel;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function testPage()
	{
		return view('test_page');
	}

	public function userAdd()
	{
		$user = new \Models\User();

		$data = [
			'id' => 'id_string'
			, 'name' => 'name_string'
			, 'deleted' => 0
		];

//		$user->insert($data);
		d($user->findAll());
	}


}
