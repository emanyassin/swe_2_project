<?php
		class quiz
		{
			private $conn ;
			private $table ='quizzes';
	        public $quiez_name;
	        public $grade;

			public function __construct($db){
				$this->conn = $db;
			}
	        public function Recomend_quiez(){
			  	$query = 'SELECT * FROM '.$this->table.'';
				$strmt2=mysqli_query($this->conn,$query);
				return $strmt2;
			}
		}
	?>
