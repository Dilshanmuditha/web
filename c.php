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
if (isset($_POST['add'])) {
	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$Email = $_POST['Email'];
	$Pass = $_POST['Password'];

$sql = "INSERT INTO details (Fname, Lname,Email, Password)
VALUE ('$Fname','$Lname','$Email','$Pass')
";
if ($con->query($sql) === true) {
	echo "<script>
alert('Sign up Successfull!!');
window.location.href='signin.html';
</script>";
}
else{

	echo "Failed";
}

}
$con->close();
}


?>