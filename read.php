<?php
	header('Access-control-Allow-Origin:*');
	header('content-Type:application/json');

	include('connection.php');
	include('company.php');

	$database = new connection();
	$db = $database->connect();

	$system=new system($db);

	$result = $system->Recomend_company();

	$number = $result->num_rows;
	
	if($number >0)
	{
	  	$company_arr = array();
	  	$company_arr['Companies'] = array();
	  	while($row=mysqli_fetch_array($result)){
			extract($row);
			$company_item=array('name'=>$name,'categry'=>$categry,'formula'=>$formula);
			array_push($company_arr['Companies'],$company_item);
		}
		  echo json_encode($company_arr);
	}
	else {
	  echo json_encode(array('message'=>'no company found.'));
	}
?>
