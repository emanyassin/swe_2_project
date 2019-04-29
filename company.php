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
            public $passed_quizzes;
            public $skills;
            public $vacancy;
      private $table3 ='recomneders';
            public $rec_name;
						public $rec_email;
						public $rec_phone_number;
            public $rec_interested;
		      	public $rec_skills;
            public $interested_score;
						public $rec_gender;
						public $rec_address;
						public $rec_age;

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
          public function applied(){
              	$query = 'SELECT * FROM `users` ORDER BY `users`.`vacancy` ASC';
			        	$strmt=mysqli_query($this->conn,$query);
			   	return $strmt;

            }
        public function Sort(){
              	$query = 'SELECT * FROM `recomneders` ORDER BY `recomneders`.`interested_score` ASC';
			        	$strmt=mysqli_query($this->conn,$query);
			  	return $strmt;

				}

		}
	?>
