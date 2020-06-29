<?php

class Home extends Controller{
	
	public function index($user = null){
		$userModel = $this->model('user');

		if($user){

			$user = $userModel->get($user);
		}
		

		$this->view('templates/header');

		$this->view('home/index', [
			'user'=> $user
		]);
		
		$this->view('templates/footer');
	
	}
}