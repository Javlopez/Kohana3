<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$nombre = Arr::get($_GET,'nombre','');
		
		$vista =  'demo';//View::factory('home')
					//	->set('name',$nombre);
		$this->response->body($vista);
	}

	public function action_usuarios()
	{
		$nombre = Arr::get($_GET,'nombre','');
		
		$usuarios =  ORM::factory('usuarios')->get_users();
		$vista = View::factory('home')
					->set('usuarios',$usuarios)
					->set('name',$nombre);
					
		$this->response->body($vista);

	}
} // End Welcome
