<?php
session_start();

include "config.php";

$user_id 		= $_SESSION['id'];
if(isset($_POST['finance'])){
	$new_value = $_POST['finance'];
	if($new_value <= 0){
		header( "Location: ../user-single.php?userid=$user_id" );
	}
}
if(isset($_GET['finance'])){$new_value = $_GET['finance'];}
if(isset($_GET['substract']) == 'true'){
	$new_value	= $new_value - 500;
}

$sql = "UPDATE u_info SET u_finance=$new_value WHERE id=$user_id";

if ($conn->query($sql) === TRUE) {
	echo "Credit updated";
	header( "Location: ../user-single.php?userid=$user_id" );
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	header( "Location: ../user-single.php?userid=$user_id" );
}
header( "Location: ../user-single.php?userid=$user_id" );

?>