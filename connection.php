<?php
	class connection
	{
		//DBPrpgram
		private $host='localhost';
		private $db_name='apidatabase';
		private $username='root';
		private $password='';
		private $conn;
		//db connect
		public function connect(){
		  $this->conn=null;
		  try{
		  	$this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
		  }
		  catch(PDOException $e)
		  {
		    echo 'connection Error:';
		  }
		  return $this->conn;
	}

}
?>
