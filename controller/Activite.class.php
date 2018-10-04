<?php 

/**
 * 
 */
class Activite extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'model/ActiviteDB.php';
	}

	public function index()
	{
		return $this->view->load("activite/index");
	}

	public function add()
	{
		$tdb = new ActiviteDB();
		session_start();
		//$ok = $tdb->addActivite($_SESSION['id_r'], 'mon activité', 'mes résultats', 'mes contraintres', 'mes observation');
		//echo $ok;
		if (isset($_POST['valider'])) {
			extract($_POST);
			$data['ok'] = 0;
			if(!empty($_SESSION['id']) && !empty($_SESSION['id_r']) && !empty($_POST['a_titre']) && !empty($_POST['a_resultat'])){
				$ok = $tdb->addActivite($_SESSION['id_r'], $_POST['a_titre'], $_POST['a_resultat'], $_POST['a_contrainte'], $_POST['a_observation']);
				$data['ok'] = $ok;
				return $this->view->load("activite/add", $data);
			}
			return $this->view->load("activite/add", $data);
		} else {
			return $this->view->load("activite/add");
		}
		
		return $this->view->load("activite/add");
		
	}
}

 ?>