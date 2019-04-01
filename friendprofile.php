<?php 
session_start();

if(!isset($_SESSION['email']))
{

 header("Location:login.php");
}
else{


}
$uemail = $_GET['email']; //receiving the get request from display records
?>



<?php
$con=mysqli_connect("localhost","root","","credentials");    //db connection
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }

$email=$_SESSION['email'];
 $sql="SELECT * FROM registration WHERE email = '$uemail'";
 $result=mysqli_query($con, $sql);
$firstname="";
$lastname="";
$dob="";
$gender="";
$email="";
$phone="";

while($user=mysqli_fetch_assoc($result))
{

       $firstname=$user['firstname'];
      $lastname=$user['lastname'];
      $dob= $user['dob'];
       $gender=$user['gender'];
      $phone= $user['phone'];
      $email=$user['email'];
      $propic=$user['propic'];

}






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
else{

  echo "bung chung";
    }

  ?>

  <h2 style="text-align:center">Profile Card</h2>
  <?php


echo  '<img src="img/'.$propic.'.png" alt="babu" style="width:30 height:40">';

  ?>
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
 echo "<tr>";


        echo "<td>".$firstname."</td>";
        echo "<td>".$lastname."</td>";
        echo "<td>".$dob."</td>";
        echo "<td>".$gender."</td>";
        echo "<td>".$phone."</td>";
        echo "<td><a href='message.php?email=".$email."'>".$email."</a></td>";

        echo "</tr>";
      


 ?>


 </body>
 </html>




 
 


 
