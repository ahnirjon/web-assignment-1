<?php 
session_start();

if(!isset($_SESSION['email']))
{

 header("Location:login.php");
}
else{


}

    $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }
 

$sql="SELECT * FROM message WHERE receiver='".$_SESSION['email']."'";
 echo "<a href='logout.php'> logout</a> <br/><br/>";
$result=mysqli_query($con, $sql);

?>
<html>
<head>
	<title>Show Details</title>
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>From</th>
			<th>Message Box</th>
		</tr>

		<?php
			while($user=mysqli_fetch_assoc($result)){
				echo "<tr>";

				echo "<td>".$user['sender']."</td>";
				echo "<td>".$user['content']."</td>";

				echo "</tr>";
			}
		 ?>

	</table>


</body>
</html>