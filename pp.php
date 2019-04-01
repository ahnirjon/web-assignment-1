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
$con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }

$email=$_SESSION['email'];
 $sql="SELECT * FROM userportfolio WHERE email = '$email'";
 $result=mysqli_query($con, $sql);

 ?>
 
<html>
<head>
	<title>my portfolio</title>
</head>
<body>
<a href="logout.php" >Logout</a><br>
<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>project name</th>
			<th>project URL</th>
			
		</tr>
<?php
while($user=mysqli_fetch_assoc($result)){	echo "<tr>";

				echo "<td>".$user['projectname']."</td>";
				if($user['projecturl']=="no"){
				echo "<td>".$user['projecturl']."</td>";
}
else{
				echo "<td><a href='".$user['email']."'>".$user['projectname']."</a></td>";
}
				echo "</tr>";
			}




 ?>

 		<form action="" method="POST">
			
				
					 Project Name<br>
					<input type="text" name="pn" placeholder=""><br>
				
						Project source</br>
					<input type="text" name="ps" placeholder=""><br>
				
				
					<input type="submit" name="submit" value="submit">
					

						
			
		</form>

 <?php 
mysqli_close($con);
 				//db connection for login procedure;

 if (isset($_POST['login'])) {

    $pn=$_POST['pn'];
    $ps=$_POST['ps'];
   $sql="INSERT INTO userportfolio (email,projectname,projecturl) VALUES ('$email','$pn','$ps')";
    $result=mysqli_query($con,$sql);
 
mysqli_close($con);
    }
 

 ?>

</body>
</html>