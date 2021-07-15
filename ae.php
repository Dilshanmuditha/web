<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "userlogin";

$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
	echo "DB Connection is faild!!!".mysqli_connect_error();
}
else{
	echo "Database connection Success<br><br>";


$table = "
CREATE TABLE details(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR (30) NOT NULL,
Lname VARCHAR (30) NOT NULL,
Email VARCHAR (30) NOT NULL,
Password VARCHAR (35) NOT NULL
)
";
if ($con->query($table)=== true) {
	echo "Table creation success";
}
else{
	echo "Failed";
}

}
$con->close();

?>