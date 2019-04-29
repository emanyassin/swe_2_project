<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');

	include('connection.php');
	include('company.php');

	$database = new connection();
	$db = $database->connect();

	$system=new system($db);

	$result = $system->applied();

	$number = $result->num_rows;

	if($number >0)
	{
	  	$user_arr = array();
	  	$user_arr['users'] = array();
	  	while($row=mysqli_fetch_array($result)){
			extract($row);
			$user_item=array('user_name'=>$user_name,'interested'=>$interested,'skills'=>$skills,'passed_quizzes'=>$passed_quizzes,'vacancy'=>$vacancy);
			array_push($user_arr['users'],$user_item);
		}
		  echo json_encode($user_arr);
	}
	else {
        echo json_encode(array('message'=>'there is no candidates applied.'));
		}
?>
