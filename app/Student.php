<?php 

	/**
	 * student data management
	 */
	class Student extends Db
	{

		/**
		 * Student add to database by dua of peyon
		 */
		public function peyonerDua($name, $email, $cell, $uname)
		{	
			$sql = "INSERT INTO students(name, email, cell, username) VALUES ('$name', '$email', '$cell', '$uname')";
			$data = parent::DbConnection() -> query($sql);

			if ($data) {
				return "<p class='alert alert-success'> Data send successfully! <button class='close' data-dismiss='alert'>&times;</button></p>";
			}
		}

		/**
		 * student data read by database
		 */	
		public function peyonerAgerbad()
			{
				$sql = "SELECT * FROM students";
				$data = parent::DbConnection() -> query($sql);

				return $data;
			}	

		/**
		*student data delete
		*/	

		public function  peyonerAvoishap($id)
		{
			$sql = "DELETE FROM students WHERE id='$id'";
			$data = parent::DbConnection() -> query($sql);

			if ($data) {
				return "<p class='alert alert-success'> Data delete successfully! <button class='close' data-dismiss='alert'>&times;</button></p>";
			}

		}



	}

























 ?>