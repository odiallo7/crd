<?php 

/**
 * 
 */
class Service extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		require_once 'model/ServiceDB.php';
	}

	public function index()
	{
		return $this->view->load("service/index");
	}

	public function add()
	{
		$tdb = new ServiceDB();

		/*if(isset($_POST['valider']))
		{
			extract($_POST);
			//$pass_hache = password_hash($_POST['s_password'], PASSWORD_DEFAULT);
			if(!empty($s_nom) && !empty($s_sigle))
			{
				$ok = $tdb->addService($s_nom, $s_sigle, $s_telephone, $s_email, $s_adresse, $s_responsable, $s_responsabletel, $s_login, $s_password);
				return $this->view->load("service/index");
			}
		}else{
			return $this->view->load("service/add");
		}*/



			//Récupération des données qui viennent du formulaire view/test/add.html (à créer)
            if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
            {
                extract($_POST);
                $data['ok'] = 0;
                if(!empty($s_nom) && !empty($s_sigle)) {
                    $ok = $tdb->addService($s_nom, $s_sigle, $s_telephone, $s_email, $s_adresse, $s_responsable, $s_responsabletel, $s_login, $s_password);
                    $data['ok'] = $ok;
                }
                return $this->view->load("service/add", $data);
            }else{
                return $this->view->load("service/add");
            }

}

	public function connexion()
	{	
		$tdb = new ServiceDB();
		if (isset($_POST['connecter']))
		 {
			extract($_POST);
			$data = $tdb->getAccess($_POST['s_login']);
			if ($data['s_password'] == $_POST['s_password']) {
				  session_start();
			      $_SESSION['id'] = $data['s_id'];
				  $_SESSION['login'] = $s_login;				 
				return $this->view->load("rapport/index");
			 }else {
		 		return $this->view->load("service/connexion", $data);
		 }
		}
		else {
			return $this->view->load("service/connexion");
		}
				
	}
}

 ?>