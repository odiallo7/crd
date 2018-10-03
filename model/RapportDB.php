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
}


 ?>