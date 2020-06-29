<?php

class Home extends Controller{
	
	public function index($name = ''){
		$user = $this->model('user');
		
		$user->name = $name;

		$this->view('templates/header');

		$this->view('home/index', [
			'name'=> $user->name
		]);
		
		$this->view('templates/footer');
	}
}