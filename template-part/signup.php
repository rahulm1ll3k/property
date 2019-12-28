<?php
session_start();
include "config.php";
$u_first 		= $_POST['first'];
$u_last 		= $_POST['last'];
$u_email 		= $_POST['email'];
$u_password 	= $_POST['password'];
$u_gender 		= $_POST['gender'];
$u_phone 		= $_POST['phone'];
$u_finance 		= $_POST['finance'];
$u_organization = $_POST['organization'];


echo "<h1>" . $u_email . "</h1>";
echo "<h1>" . $u_first ." ". $u_last . "</h1>";
echo "<h1>" . $password . "</h1>";

$result = $conn->query("SELECT u_email FROM u_info WHERE u_email='$u_email'");
if ($result && mysqli_num_rows($result) > 0)
    {
    	echo "<h1>User Exists</h1>";
		header( 'Location: ../signup.php?userexists=1' );
    }
else
    {
		$sql = "INSERT INTO u_info (`u_first`, `u_last` ,`u_email`, `u_pass`, `u_gnd`, `u_mob`, `u_finance`, `u_comp`) VALUES ('$u_first', '$u_last', '$u_email', '$u_password', '$u_gender', '$u_phone', '$u_finance', '$u_organization')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
			header( 'Location: ../login.php' );
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }





//header( 'Location: ../login.php' );

/*
$sql = "SELECT id, email, usern FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["usern"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
//$conn->close();
?>