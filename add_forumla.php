<?php
	header('content-Type:application/json');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods');

	include('connection.php');
	include('company.php');
	$database = new connection();
	$db = $database->connect();

	$system =new system($db);
	$data=	json_decode(file_get_contents("php://input"));

	$system->name=$data->name;
	$system->categry=$data->categry;
	$system->formula=$data->formula;
	if($system->add_formula()){
			echo json_encode(array('message'=>'Formula created'));
	}
	else {
		echo json_encode (array('message'=>'Formula not created'));
	}
?>
