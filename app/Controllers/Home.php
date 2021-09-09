<?php namespace App\Controllers;

//use Models\testmodel;

class Home extends BaseController
{
	public function index()
	{
		echo "HI";
//		return view('welcome_message');
	}

	function round_down($num, $d = 0)
	{
		return $this->sgn($num)*$this->p_floor(abs($num), $d);
	}



	function p_floor( $val, $d )
	{
		return floor($val * pow (10, $d) )/ pow (10, $d) ;
	}


	function sgn($x)
	{
		return $x ? ($x>0 ? 1 : -1) : 0;
	}

	public function testPage()
	{
		$ff = floor(17.4/pow(10,-2));
		echo $this->round_down(17.40,2);
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
