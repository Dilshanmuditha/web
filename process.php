<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "userLogin";

$con = mysqli_connect($host, $user, $password, $db);

$Email = $_POST['Email'];
$Pass = $_POST['Pw'];


$Email = stripcslashes($Email);
$Pass = stripcslashes($Pass);


$Email = mysql_real_escape_string($Email);
$Pass = mysql_real_escape_string($Pass);

$result = mysql_query("select * from users where Email = '$Email' password = 'Pass'")
               or die("Failed to query database " .mysql_error());
$row = mysql_fetch_array($result);
if ($row['Email'] == $Email && $row['Pass'] == $Pass){
	echo "Login success!! welcome" .$row['Email'];
}
else{
	echo "Failedto login!!";
}
?>