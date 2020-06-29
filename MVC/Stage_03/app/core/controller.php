<?php

class Controller{

	public function getDb(){
		//echo "db requested";
		return new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
	}

	protected function model($model){		
		require_once '../app/models/'.$model.'.php';
		return new $model($this->getDb());
	}

	protected function view($view, $data = []){
		require_once '../app/views/'.$view.'.php';
	}
}