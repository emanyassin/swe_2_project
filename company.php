<?php
		class system
		{
			private $conn ;
			private $table ='commpanies';
			public $name;
			public $categry;
			public $formula;

			public function __construct($db){
				$this->conn = $db;
			}
			public function Recomend_company(){
			  	$query = 'SELECT * FROM '.$this->table.'';
				$strmt=mysqli_query($this->conn,$query);
				return $strmt;
			}
	      
		}
	?>
