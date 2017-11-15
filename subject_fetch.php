<?php
	include('connection.php');
	$q = "select * from topic";
	$result = mysqli_query($con,$q);
?>