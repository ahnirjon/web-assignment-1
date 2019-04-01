<?php 
session_start();

if(!isset($_SESSION['email']))
{

 header("Location:login.php");
}
else{


}
?>

<?php 
 //database connection here
    $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }
 
$sql="SELECT * FROM registration";
$result=mysqli_query($con, $sql);

?>
<html>
<head>
	<title>Show Details</title>
</head>
<body>
<?php 
	if(isset($_SESSION['email']))
	{
		echo "<h1>"."Welcome ".$_SESSION['email']."</h1>";
	}
	else
	{
		echo "bung chung";
	}
?>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>E-mail</th>
			<th>Profile</th>
		</tr>

<?php
		while($user=mysqli_fetch_assoc($result))
		{
				echo "<tr>";
				echo "<td>".$user['firstname']."</td>";
				echo "<td>".$user['lastname']."</td>";
				echo "<td>".$user['dob']."</td>";
				echo "<td>".$user['gender']."</td>";
				echo "<td>".$user['phone']."</td>";
				echo "<td><a href='message.php?email=".$user['email']."'>".$user['email']." </a></td>"; 					//passing get message through email to inbox
	  			echo "<td><a href='friendprofile.php?email=".$user['email']."'>".$user['email']."</a></td>";					//passing get message through email to friend profile
				echo "</tr>";
			}
		 ?>

	</table>
</body>
</html>