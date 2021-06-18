<?php 
	
	$dns = "mysql:host=localhost; dbname=election;";
	$db_user="root";
	$db_pass="";

	try{
		$con = new PDO($dns,$db_user,$db_pass);
		
	}
	catch(PDOException $e){
		echo "Connetion faile".$e->getmessage();
	}

?>