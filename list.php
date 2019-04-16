<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');
	include('connection.php');
	include('company.php');
	$database = new connection();
	$db = $database->connect();
	$system=new system($db);
	$system->interested=isset($_GET['interested'])?$_GET['interested']:die();
	$result=$system->list_interested();
	$allarr=array();
	while ($row=$result->fetch_assoc()) {
		$user_arr=array('user_name'=>$row['user_name'],'email'=>$row['email'],'phone_number'=>$row['phone_number'],'interested'=>$row['interested'], 'gender'=>$row['gender'] ,
		                'skills'=>$row['skills'],'address'=>$row['address'], 'interested_score'=>$row['interested_score'] ,
	                      'age'=>$row['age' ]);
		array_push($allarr,$user_arr);
	};

	print_r(json_encode($allarr));
?>
