<?php

private class Database{
 
	private $server = "mysql:host=localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "db_loginRegister";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;


 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options, $this->dbname);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "มีปัญหาบางอย่างในการเชื่อมต่อ: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}
$pdo = new Database();
 
?>
