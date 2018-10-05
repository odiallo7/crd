<?php 

/**
 * 
 */
class Rapport extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'model/RapportDB.php';
	}

	public function index()
	{
		return $this->view->load("rapport/index");
	}

	public function add()
	{
		$tdb = new RapportDB();
		session_start();
		// $ok = $tdb->addRapport($_SESSION['id'], 'Septembre', '2018' );
		// echo $ok;
		if (isset($_POST['creer'])) {
			extract($_POST);
			if(!empty($_SESSION['id']) && !empty($_POST['r_mois']) && !empty($_POST['r_annee'])){
				$ok = $tdb->addRapport($_SESSION['id'], $_POST['r_mois'], $_POST['r_annee']);
				echo $ok;
				$_SESSION['id_r'] = $ok;
				return $this->view->load("activite/add");
			}
		} else {
			return $this->view->load("rapport/add");
		}
		
		return $this->view->load("rapport/add");
	}

	public function check()
		{
			$tdb = new RapportDB();
			if (isset($_POST['chercher'])) {
				extract($_POST);
				$data['rapports'] = 0;
				if (!empty($_POST['r_mois']) && !empty($_POST['r_annee'])) {
					$data['rapports'] = $tdb->getRapport($_POST['r_mois'], $_POST['r_annee']);
					return $this->view->load("rapport/listemois", $data);
				} 
			} else {
				return $this->view->load("rapport/check");
			}			
		}


	public function liste()
		{
			$tdb = new RapportDB();
			$data['rapports'] = $tdb->getAllRapport();
			return $this->view->load("rapport/liste", $data);
		}	
}

 ?>