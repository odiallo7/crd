<?php 

/**
 * 
 */
class RapportDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addRapport($s_id, $r_mois, $r_annee)
	{
		$sql = "INSERT INTO rapport VALUES(null, $s_id, '$r_mois', '$r_annee')";
		if ($this->db != null) {
			$this->db->exec($sql);
			return $this->db->lastInsertId();
		} else {
			return null;
		}
	}
	
	public function getRapport($r_mois, $r_annee)
		{
			$sql = "SELECT s_sigle, r_mois, r_annee, a_titre, a_resultat, a_contrainte, a_observation
				FROM service, rapport, activite
				WHERE service.s_id = rapport.s_id
				AND rapport.r_id = activite.r_id
				AND	rapport.r_mois = '$r_mois'
				AND	rapport.r_annee = '$r_annee'";
			if ($this->db != null) {
				return $this->db->query($sql)->fetchAll();
			} else {
				return null;
			}
			
		}	

	public function getAllRapport()
	{
		$sql = "SELECT s_sigle, r_mois, r_annee, a_titre, a_resultat, a_contrainte, a_observation
				FROM service, rapport, activite
				WHERE service.s_id = rapport.s_id
				AND rapport.r_id = activite.r_id";
		if ($this->db != null) {
			return $this->db->query($sql)->fetchAll();
		} else {
			return null;
		}
		
	}
}


 ?>