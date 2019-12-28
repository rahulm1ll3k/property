<?php
session_start();
if(isset($_SESSION["logedin"])){header( 'Location: ../index.php' ) ;}
include "config.php";
$email = $_POST['email'];
$pass = $_POST['pass'];

echo "<h1>" . $email . "</h1>";
echo "<h1>" . $pass . "</h1>";

/*
$sql = "INSERT INTO login (`email`, `usern`, `pass`) VALUES ('$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




*/



$result = $conn->query("SELECT * FROM u_info WHERE u_email='$email' and u_pass='$pass'");
if ($result && mysqli_num_rows($result) > 0)
    {
        echo 'Username and Password Found'; 
        echo "<br/> ".$email;
        while($row = $result->fetch_assoc()) {
            $_SESSION["id"] = $row["id"];
            # if (isset($_SESSION["id"]     ))  { echo "User is " . $_SESSION["id"];    }
            $_SESSION["email"] = $row["u_email"];
            # if (isset($_SESSION["email"]  ))  { echo "User is " . $_SESSION["email"]; }
            $_SESSION["name"] = $row["u_first"]." ".$row["u_last"];
            # if (isset($_SESSION["name"]   ))  { echo "User is " . $_SESSION["name"];  }
            
//            echo "id: " . $id. " - Name: " . $email;
        }
    	header( 'Location: ../index.php' ) ;
    	$_SESSION["logedin"] = "logedin";
    }
else
    {
    echo 'Username and Password NOT Found';
   	header( 'Location: ../login.php' ) ;
   	session_destroy();

    }

/*


$sql = "SELECT email FROM login WHERE email='$email'";
$result = $conn->query($sql);

if ($result && mysql_num_rows($result) > 0)

    {
        header("http://localhost/property/index.php");
        echo "found data";
    }
else
    {
        header("http://localhost/property/login.php");
        echo "No Data Found";
    }

*/
//$conn->close();
?>