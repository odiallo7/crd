<?php 

/**
 * 
 */
class Activite extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		//require_once 'model/ActiviteDB.php';
	}

	public function index()
	{
		return $this->view->load("activite/index");
	}

	public function add()
	{
		return $this->view->load("activite/add");
	}
}

 ?>