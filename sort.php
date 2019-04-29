<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');

	include('connection.php');
	include('company.php');

	$database = new connection();
	$db = $database->connect();

	$system=new system($db);

	$result = $system->Sort();

	$number = $result->num_rows;

	if($number >0)
	{
	  	$rec_arr = array();
	  	$rec_arr['recomneders'] = array();
	  	while($row=mysqli_fetch_array($result)){
			extract($row);
			$rec_item=array('rec_name'=>$rec_name,'rec_email'=>$rec_email,'rec_phone_number'=>$rec_phone_number,'rec_interested'=>$rec_interested,'interested_score'=>$interested_score);
			array_push($rec_arr['recomneders'],$rec_item);
		}
		  echo json_encode($rec_arr);
	}
	else {
	  echo json_encode(array('message'=>'no recomnders found.'));
	}
?>
