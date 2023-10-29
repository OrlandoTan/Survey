<?php
	include 'connection.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$occupation = $_POST['occupation'];
	$enroll = $_POST['flexRadioDefault'];
	$course = $_POST['course'];
	$others = $_POST['others'];
	
	mysqli_query($mysqli, "insert into table1 (name,email,age,occupation,enroll,course,others)
	values('$name', '$email', '$age', '$occupation', '$enroll', '$course', '$others')");
	
?>