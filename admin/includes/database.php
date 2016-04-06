<?php 

require_once 'new_config.php';

class Database
{

	public $connection;	

	function __construct()
	{
		$this->open_db_connection();		
	}

	public function open_db_connection()
	{
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if(mysqli_connect_errno())
		{
			die("Your database connection failed" . mysqli_error());
		}
	}

	public function query($sqli)
	{
		$result = mysqli_query($this->connection, $sqli);

		if(!$result)
		{
			die("Query failed." . mysqli_errno());
		}

		return $result;
	}
	


}

$database = new Database();



?>