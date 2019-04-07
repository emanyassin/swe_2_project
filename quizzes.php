<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');

	include('connection.php');
	include('quizdata.php');

	$database = new connection();
	$db = $database->connect();

	$quiz=new quiz($db);

	$result = $quiz->Recomend_quiez();

	$number = $result->num_rows;

	if($number >0)
	{
	  	$quize_arr = array();
	  	$quize_arr['quizzes'] = array();
	  	while($row=mysqli_fetch_array($result)){
			extract($row);
			$quize_item=array('name'=>$name,'grade'=>$grade);
			array_push($quize_arr['quizzes'],$quize_item);
		}
		  echo json_encode($quize_arr);
	}
	else {
	  echo json_encode(array('message'=>'no quizzes found.'));
	}
?>
