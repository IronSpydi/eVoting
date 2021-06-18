<?php
header('Content-Type: application/json');
include('connect.php');


$sqlQuery = "SELECT P_ID,pname,partyvotecount FROM p_result ORDER BY P_ID";

$result = $con->prepare($sqlQuery);
$result->execute();

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}



echo json_encode($data);
?>