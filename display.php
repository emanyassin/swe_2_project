<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');

	include('connection.php');
	include('company.php');

	$database = new connection();
	$db = $database->connect();

	$system=new system($db);

	$result = $system->display();

	$number = $result->num_rows;
	
	if($number >0)
	{
	  	$company_arr = array();
	  	$company_arr['users'] = array();
	  	while($row=mysqli_fetch_array($result)){
			extract($row);
			$user_item=array('user_name'=>$user_name,'email'=>$email,'phone_number'=>$phone_number,'interested'=>$interested);
			array_push($user_arr['users'],$user_item);
		}
		  echo json_encode($user_arr);
	}
	else {
	  echo json_encode(array('message'=>'no users found.'));
	}
?>
