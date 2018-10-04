<?php 

/**
 * 
 */
class ActiviteDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addActivite($r_id, $a_titre, $a_resultat, $a_contrainte, $a_observation)
	{
		$sql = "INSERT INTO activite VALUES(null, $r_id, '$a_titre', '$a_resultat', '$a_contrainte', '$a_observation')";
		if ($this->db != null) {
			$this->db->exec($sql);
			return $this->db->lastInsertId();
		} else {
			return null;
		}
		
	}
}

 ?>