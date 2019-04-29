<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');
	include('connection.php');
	include('company.php');
	$database = new connection();
	$db = $database->connect();
	$system=new system($db);
	$system->rec_interested=isset($_GET['rec_interested'])?$_GET['rec_interested']:die();
	$result=$system->list_interested();
	$allarr=array();
	while ($row=$result->fetch_assoc()) {
		$user_arr=array('rec_name'=>$row['rec_name'],'rec_email'=>$row['rec_email'],'rec_phone_number'=>$row['rec_phone_number'],'rec_interested'=>$row['rec_interested'], 'rec_gender'=>$row['rec_gender'] ,
		                'rec_skills'=>$row['rec_skills'],'rec_address'=>$row['rec_address'], 'interested_score'=>$row['interested_score'] ,
	                      'rec_age'=>$row['rec_age' ]);
		array_push($allarr,$user_arr);
	};
	print_r(json_encode($allarr));
?>