<?php
class Connection
{
	private $servername = "localhost:3307";
	private $username = "root";
	private $password = "";
	private $dbname = "ons";
	public $con = null;
	function __construct()
	{
		$this->con = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname) or die("Connection Error");
		
	}
	function isUnique($query)
	{
		$res = mysqli_query($this->con,$query);
		if(mysqli_num_rows($res)==0)
			return true;
		else 
			return false;
	}
}
?>