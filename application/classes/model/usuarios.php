<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuarios extends ORM {

	protected $_table_names_plural = FALSE;
	
	public function get_users()
	{
		$users = ORM::factory('usuarios')->find_all();
		return $users;
	}
	
}