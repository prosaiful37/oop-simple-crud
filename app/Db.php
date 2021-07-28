<?php 


	/**
	 * Database setup and management
	 */
	abstract class Db
	{
		private $host = "localhost";
		private $db = "oop-basic";
		private $user = "root";
		private $pass = "";


		private $conn;

		/**
		 * Database connection setup
		 */
		protected final function DbConnection()
		{
			$this -> conn = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);

			return $this -> conn;
		}
		
	}









 ?>