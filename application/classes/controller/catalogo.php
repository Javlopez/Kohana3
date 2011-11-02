<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 
 * Controller_Catalogo
 * 
 * Clase/Controlador que nos permite manipular un catalogo de productos
 * 
 * @author Javier Lopez Lopez
 * @package RelampagoPHP
 * @example visit URL::base()/catalogo
 *  
 */
class Controller_Catalogo extends Controller {

	/**
	 * 
	 * Informacion del Modelo/Entidad  productos
	 * @var Model_Productos $productos
	 */ 
	public $productos;
	
	/**
	 * 
	 * Variable que contiene la vista, para ser usada y mostrada en el metodo after()
	 * @var View|String $vista
	 */
	public $vista;
	
	/**
	 * (non-PHPdoc)
	 * @see system/classes/kohana/Kohana_Controller::before()
	 */
	public function before()
	{
		parent::before();
		$this->productos = ORM::factory('productos');
	}

	/**
	 * 
	 * Index del controlador, que se carga por default, pero en este caso
	 * ejecutamos el metodo action_listado(), para delagar la logica de listar
	 * a otra action/metodo
	 */
	public function action_index()
	{
		$this->action_listado();
	}

	/**
	 * 
	 * Muestra el listado de productos
	 */
	public function action_listado()
	{
		$productos = $this->productos->get_productos();
		$view = View::factory('listado')
						->set('productos',$productos);
		$this->vista = $view;
	}
	
	/**
	 * 
	 * Este metodo primero checa, que si recibe una peticion por post
	 * guarde dicha información en la base de datos, si no muestra el formulario
	 */
	public function action_add()
	{
		if($this->request->method() == "POST")
		{
			$post = $this->_validacion();
			if($post->check())
			{
				$nombre =  Arr::get($post,"nombre","");
				/**
				 *@todo Esto(guardar) deberia ir en un metodo del Model_Productos
				 *		para delegar esta logica a la capa de negocio
				 */
				$producto = $this->productos;
				$producto->Producto = $nombre;
				$producto->save();
				if($producto->saved())
				{
					$this->request->redirect(URL::base().'catalogo?add');
				}
				else
				{
					$this->request->redirect(URL::base().'catalogo/add?error');
				}
			}
			else
			{
				$this->request->redirect(URL::base().'catalogo/add?error');
			}
		}
		else
		{
			$view = View::factory('add');
			$this->vista = $view;
		}
	}
	
	/**
	 * 
	 * Realiza la validación, de lo que se esta recibiendo por post
	 * @return Object $post Retorna un objeto que es el que realizo la validación
	 */
	private function _validacion()
	{
		$post = Validation::factory($_POST);
		$post->rule('nombre','not_empty');
		return $post;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see system/classes/kohana/Kohana_Controller::after()
	 */
	public function after()
	{
		//Hace el render de la vista
		$this->response->body($this->vista);
		parent::after();
	}
}//End of Controller_Catalogo