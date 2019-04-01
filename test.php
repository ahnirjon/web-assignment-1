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
$con=mysqli_connect("localhost","root","","credentials"); //database connection
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }

$email=$_SESSION['email'];
 $sql="SELECT * FROM registration WHERE email = '$email'";
 echo "<a href='logout.php'> logout</a> <br/><br/>";
 $result=mysqli_query($con, $sql);

 ?>
 
 <html>
 <head>
 	<title>My Profile</title>
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
<h2 style="text-align:center">Profile Card</h2>
<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Phone</th>
			<th>E-mail</th>
		</tr>
<?php
	while($user=mysqli_fetch_assoc($result))
			{	echo "<tr>";

				echo "<td>".$user['firstname']."</td>";
				echo "<td>".$user['lastname']."</td>";
				echo "<td>".$user['dob']."</td>";
				echo "<td>".$user['gender']."</td>";
				echo "<td>".$user['phone']."</td>";
				echo "<td><a href='message.php?email=".$user['email']."'>".$user['email']."</a></td>";

				echo "</tr>";
			}



 ?>
  <p><a href="displayrecords.php">Friend List</a></p>
  <p><a href="pp.php">My Portfolio</a></p>
  <p><a href="inbox.php">Inbox</a></p>
 </body>
 </html>

