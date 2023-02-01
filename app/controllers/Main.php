<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	function index(){
		$this->view('Main/index');
	}

	function index2(){
		$this->view('Main/index2');
	}

	function greetings($name = "Carl"){//optional parameter:$name
		$this->view('Main/greetings', $name);
	}

	function logUser(){
		if(isset($_POST['action']))
		{
			//data is sent
			$fh = fopen('log.txt', 'a');
			fwrite($fh, "$_POST[name] has visited!\n");
			fclose($fh);
			header('location:/Main/logUser');
		}
		else
		{
			//no data submitted
			$this->view('Main/logUser');
		}
	}
}