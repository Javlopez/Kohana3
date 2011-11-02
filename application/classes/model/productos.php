<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 
 * Model_Productos
 * 
 * Modelo que se encarga de hacer operaciones con la base de datos de Productos
 * @author Javier Lopez Lopez
 * @package RelampagoPHP
 * 
 */
class Model_Productos extends ORM {

	/**
	 * 
	 * Evitar que kohana pluralize los nombres(son propiedades del ORM)
	 * @var Boolean $_tables_names_plural 
	 */
	protected $_table_names_plural = FALSE;
	
	/**
	 * 
	 * Retorna el listado de todos los productos en un objeto
	 * @return Model_Productos ORM::factory('productos')  
	 */
	public function get_productos()
	{
		return ORM::factory('productos')->find_all();
	}
	
}//End of Model_Productos

