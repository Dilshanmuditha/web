<?php
if ($_POST) {
	$host = "localhost";
    $user = "root";
    $password = "";
    $db = "userlogin";

$Email = $_POST['Email'];
$Password =$_POST['Password'];

$conn = mysqli_connect($host, $user, $password, $db);
$query= "SELECT * from details where Email='$Email' and Password='$Password'";
$result=mysqli_query($conn,$query);
if (mysqli_num_rows($result)==1) {
	session_start();
    $_SESSION['userlogin']='true';
    echo "<script>
alert('Sign in Successfull!!!');
window.location.href='text.html';
</script>";
}
else {
	echo "<script>
alert('Sign in Faild!!! Please Retry');
window.location.href='signin.html';

</script>";
}
}

?>

