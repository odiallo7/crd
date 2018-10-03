<?php 

/**
 * 
 */
class ServiceDB extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function addService($s_nom, $s_sigle, $s_telephone, $s_email, $s_adresse, $s_responsable, $s_responsabletel, $s_login, $s_password)
	{
		$sql = "INSERT INTO service VALUES (null,'$s_nom', '$s_sigle', $s_telephone, '$s_email', '$s_adresse', '$s_responsable', '$s_responsabletel', '$s_login', '$s_password')";
		if ($this->db != null) 
		{
			$this->db->exec($sql);
			return $this->db->lastInsertId();	
		} else {
			return null;
		}
		
	}

	public function getAccess($s_login)
	{
		$sql = "SELECT s_id, s_password FROM service
				WHERE s_login = '$s_login'";
		if ($this->db != null)
		 {
			return $this->db->query($sql)->fetch();
		 } 
		 else 
		 {
			return null;
		}
		
	}
}

 ?>