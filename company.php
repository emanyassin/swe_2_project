<?php
		class system
		{
			private $conn ;
			private $table ='commpanies';
			public $name;
			public $categry;
			public $formula;
            private $table2 ='users';
			public $user_name;
			public $email;
			public $phone_number;
            public $interested;
			public $interested_score;
			public $skills;
			public $gender;
			public $address;
			public $age;

			public function __construct($db){
				$this->conn = $db;
			}
			public function Recomend_company(){
			  	$query = 'SELECT * FROM '.$this->table.'';
				$strmt=mysqli_query($this->conn,$query);
				return $strmt;
			}
            public function display(){
			  	$query = 'SELECT * FROM '.$this->table2.'';
				$strmt=mysqli_query($this->conn,$query);
				return $strmt;
			}
	      
		}
	?>
