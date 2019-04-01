<?php
$error_msg = '';

// shortcut for isset
function is($var_name) {
    return isset($_POST[$var_name]);
}

// shortcut for $_POST
function p($var_name) {
    return $_POST[$var_name];
}
//my reg validation starts here 
if (is('submit')) {
    $failed = false;
    if (strlen(p('user_id')) == 0) {
        $error_msg = 'User id cannot be empty';
        $failed = true;
    } else if (strlen(p('password1')) == 0 or strlen(p('password2')) == 0) {
        $error_msg = 'Password cannot be empty';
        $failed = true;
    } else if (p('password1') !== p('password2')) {
        $error_msg = 'Passwords do not match';
        $failed = true;
    } else if (strlen(p('name')) == 0) {
        $error_msg = 'Name cannot be empty';
        $failed = true;
    } else if (strlen(p('email')) == 0) {
        $error_msg = 'Email cannot be empty';
        $failed = true;
    }

    
}
?>
                            <!--my reg page design-->

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset style="display: inline-block">
            <legend>REGISTRATION</legend>

            <?php if ($error_msg) echo '<strong><font color="red">Error: '.$error_msg.'</font></strong><br><br>'; ?>
            First Name <br><input type="text" size="30" name="firstname" required="enter firstname"><br>
            Last Name <br><input type="text" size="30" name="lastname" required="enter lastname"><br>
            Gender<br><input type="radio" name="gender" value="male" required="please select one">Male <br>
             <input type="radio" name="gender" value="female">Female <br>
              <input type="radio" name="gender" value="Other">Other <br>

            Date of Birth: <br>
            <input type="date" name="dob" required="select date of birth"><br>  
            Password <br><input type="password" size="30" name="password" required="please give password"><br>
            Confirm Password <br><input type="password" size="30" name="password" required="please give password"><br>
           
            Email <br><input type="text" size="30" name="email" required="please give email"><br>
            Phone <br><input type="phone" size="30" name="phone" required="please give phone number"><br>
            Profile Picture <br><input type="file" size="30"  name="fileToUpload"><br>
            
			
			<hr>
            <input type="submit" name="register" value="Register"> <a href="login.php">Login</a>
        </fieldset>
    </form>
</body>
</html>

<?php //db connetion
if (isset($_POST['register']))
{
    $con=mysqli_connect("localhost","root","","credentials");
    if(!$con)
    {
        die("connection Error: ".mysqli_connect_error()."</br>");
    }
    //data insertation part here;
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
   // $picture=$_POST['fileToUpload'];


////////////////////////////////////


$target_dir = "img/";

//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

 $inameD=date("Y_m_d_h_i_sa");
  $imageName =  $inameD.'.'.'png';

$target_file = $target_dir . $imageName;

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {

        echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;

    } else {

        echo "File is not an image.";

        $uploadOk = 0;

    }

}

// Check if file already exists

if (file_exists($target_file)) {

    echo "Sorry, file already exists.";

    $uploadOk = 0;

}

// Check file size

if ($_FILES["fileToUpload"]["size"] > 50000000000000) {

    echo "Sorry, your file is too large.";

    $uploadOk = 0;

}

// Allow certain file formats

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

&& $imageFileType != "gif" ) {

    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    $uploadOk = 0;

}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file

} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

    } else {

        echo "Sorry, there was an error uploading your file.";

    }

}


/////////////////////////////////////

if(!isset($_FILES['fileToUpload']))
{
    $sql="INSERT INTO registration (firstname,lastname,dob,gender,phone,email,password) VALUES ('$firstname','$lastname','$dob','$gender','$phone','$email','$password')";
}
else
{

     $sql="INSERT INTO registration (firstname,lastname,dob,gender,phone,email,password,propic) VALUES ('$firstname','$lastname','$dob','$gender','$phone','$email','$password','$inameD')";
   
}
    if(mysqli_query($con,$sql)){
        $sql="INSERT INTO login (email,password) VALUES ('$email','$password')";

        if (mysqli_query($con,$sql)) {
                header("Location:login.php");      # code...
        }
        else
            {
                echo "Email exist try another one";
                echo "Error in data insertation: ".mysqli_error($con);
            }
    }
    else
        {
            echo "Email exist try another one";
            echo "Error in data insertation: ".mysqli_error($con);
        }
mysqli_close($con);
}

?> 













