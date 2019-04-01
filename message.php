
<?php 
session_start();
$email = $_GET['email'];

if(!isset($_SESSION['email']))
{

 header("Location:login.php");
}
else{


}
?>
<html>
<head>
	<title>send message</title>
</head>
<body>
	<fieldset align ="center">
		<legend >Message </legend>
		<form action="" method="post">
			
				
					 To<br>
					<input type="text" name="email" placeholder="write destination email" value="<?=$email?>"><br>
				
						message</br>
					<input type="text" name="message" placeholder="write your message"><br>
				
				
					<input type="submit" name="send" value="send">
					

						
			
		</form>
	</fieldset>

</body>
</html>

<?php      //db connetion
if (isset($_POST['message']))
{
    $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }
    //data insertation part here

    $sender = $_SESSION['email'];
    $receiver = $_POST['email'];
    $message = $_POST['message'];

    $sql="INSERT INTO message (sender,receiver,content) VALUES ('$sender','$receiver','$message')";
  

    if (mysqli_query($con,$sql)) {
             header("Location:homepage.php");      # code...
    }
    else
        {
            echo "Error in data insertation: ".mysqli_error($con);
}
}



?> 