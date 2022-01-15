<?php


class Database{
	private $dbhost="localhost";
	private $dbusername="root";
	private $dbpassword="root";
	private $dbname="scandiwebtest";
	
	protected $conn;
	
	public function __construct()
	{
		if (!isset($this->conn)) {
			
			$this->conn = new mysqli($this->dbhost, $this->dbusername, $this->dbpassword, $this->dbname);
			
			if (!$this->conn) {
				echo "Can't connect to the database";
				exit;
			}			
		}	
		
		return $this->conn;
	}

}
?>