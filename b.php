
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
<table border="1px">
	<thead style="background-color: yellow;">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Password</th>
	</thead>
<tbody>
	<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "userlogin";
$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
	echo "DB Connection is faild!!!".mysqli_connect_error();
}

	echo "Database connection Success<br><br>";
$sql = "SELECT * FROM details";
$data = $con->query($sql);
if ($data->num_rows >0) {
	while($row = $data->fetch_assoc())
	{
        ?>
		<tr>
			<td><?php echo $row['Fname'];  ?></td>
			<td><?php echo $row['Lname'];  ?></td>
			<td><?php echo $row['Email'];  ?></td>
			<td><?php echo $row['Password'];  ?></td>
			
		</tr>
		 <?php
             }
         }
		?>
</tbody>
</table>
</div>
</body>
</html>