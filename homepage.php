<?php 
session_start();

if(!isset($_SESSION['email']))
{

 header("Location:login.php");
}
else{


}
?>



<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">Profile Card</h2>
<?php

 	  $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }

    $email=$_SESSION['email'];
    echo "<a href='logout.php'> logout</a> <br/><br/>";
$sql="SELECT propic from registration where email = '$email' " ;
//echo $sql;
$result=mysqli_query($con,$sql);



    if (mysqli_num_rows($result)>0) {
   		 $row=mysqli_fetch_array($result);
$propic=$row[0];

   		}
   		 else
   		 {
   		 	"no data found. Please try again.</br>";
   		 }
mysqli_close($con);
    
 

?>
<div class="card">


  <?php
echo  '<img src="img/'.$propic.'.png" alt="babu" style="width:100%">';


  ?>
  
  <p><a href="test.php">My Details</a></p>
  
 

 
  
  <p><a href="displayrecords.php">Friend List</a></p>

  <p><a href="pp.php">My Portfolio</a></p>
  <p><a href="inbox.php">Inbox</a></p>
</div>

</body>
</html>
