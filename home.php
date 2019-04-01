<?php 
session_start();
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
$sql="SELECT propic from registration where email = ".$_SESSION['email'];
$result=mysqli_query($con,$sql);

echo $result;
    if (mysqli_num_rows($result)>0) {
   		 $row=mysqli_fetch_array($result);
$propic=$row[0];
echo $propic;
   		}
   		 else
   		 {
   		 	"no data found. Please try again.</br>";
   		 }
mysqli_close($con);
    
 

?>
<div class="card">
  <img src="img/default.png" alt="babu" style="width:100%">
  <h1>Boss</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
 

  <?php
echo "<p>"."<a href=".$propic."png>My TimeLine</a>"."</p>";
  ?>
  
  <p><a href="displayrecords.php">Friend List</a></p>

  <p><a href="pp.php">My Portfolio</a></p>
</div>

</body>
</html>
