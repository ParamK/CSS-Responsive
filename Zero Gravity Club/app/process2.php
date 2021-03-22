<?php
require_once('config2.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	$course 			= $_POST['course'];
	$eventname	= $_POST['eventname'];
	$rollno 		= ($_POST['rollno']);

		$sql = "INSERT INTO users (firstname, lastname, course, eventname, rollno ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $course, $eventname, $rollno]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}