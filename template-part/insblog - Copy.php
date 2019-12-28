<?php
session_start();
include "config.php";
$u_title 		= $_POST['u_title'];
$u_desc 		= $_POST['u_desc'];
$u_url			= $_FILES['image']['name'];
$target 		= "upload/".basename($_FILES['image']['name']);
$u_loc 			= $_POST['u_loc'];
$u_size 		= $_POST['u_size'];
$u_id 			= $_POST['id'];
$user_id 		= $_SESSION['id'];


echo "<h1>" . $u_title 	. "</h1>";
echo "<h1>" . $_FILES['image']['tmp_name'] 	. "</h1>";
echo "<h1>" . $u_desc 	. "</h1>";
echo "<h1>" . $u_url 	. "</h1>";
echo "<h1>" . $u_id 	. "</h1>";

$sql = "INSERT INTO blog (`title`, `desc` , `url`, `location`, `size`, `u_id`, `stats`) VALUES ('$u_title', '$u_desc', '$u_url', '$u_loc', '$u_size', '$u_id', '1')";

if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
	echo "sucess";
}
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$result_usr = $conn->query("SELECT * FROM u_info WHERE id='$user_id'");
	while($row_usr = $result_usr->fetch_assoc()) {
		$finance = $row_usr['u_finance'];
//		header( "Location: process_finance.php?substract=true&&finance=$finance" );
	}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




?>