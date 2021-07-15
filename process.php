<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "userlogin";

$con = mysqli_connect($host, $user, $password, $db);

$Email = $_POST['Email'];
$password= $_POST['password'];


$Email = stripcslashes($Email);
$password = stripcslashes($password);
$Email = mysql_real_escape_string($Email);
$password = mysql_real_escape_string($password);

$result = mysql_query("select * from details where Email = '$Email' password = '$password'")
               or die("Failed to query database " .mysql_error());
$row = mysql_fetch_array($result);
if ($row['Email'] == $Email && $row['password'] == $password){
	echo "Login success!! welcome" .$row['Email'];
}
else{
	echo "Failed to login!!";
}
$con->close();
?>