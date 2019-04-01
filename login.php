<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>loginpage</title>
</head>
<body>
	<fieldset align ="center">
		<legend >Login form </legend>
		<form action="" method="POST">
			
				
					 Email<br>
					<input type="text" name="email" placeholder="write your email"><br>
				
						Password</br>
					<input type="password" name="password" placeholder="write your password"><br>
				
				
					<input type="submit" name="login" value="Login">
					

						
			
		</form>
	</fieldset>

</body>
</html>
 <?php 

 				//db connection for login procedure;

 if (isset($_POST['login'])) {
 	  $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }


    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)>0) {
   		 $row=mysqli_fetch_array($result);

       echo $row[0];
   		 //$name=$row['lastname'];
   		// $_SESSION['lastname']=$name;
   		 $_SESSION['email']=$email;
   	
echo $_SESSION['lastname'];
    	header("Location:homepage.php");
   		}
   		 else
   		 {
   		 	"no data found. Please try again.</br>";
   		 }
mysqli_close($con);
    }
 

 ?>









