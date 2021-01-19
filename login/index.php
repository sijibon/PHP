<?php
$conn = new mysqli("localhost","root","","crud");

	if($conn->error){
		die("Error to".$conn->error);
	}else{
		//echo "okk";
    }

?>

<?php

    if (isset($_POST['submit'])) {
        $email=$_POST['email'];
        $pass=$_POST['password'];
    
        
             $insert_data="INSERT INTO `user_data`(`email`, `password`) VALUES ('email','password')";
             $result=$conn->query($insert_data);
             $fetch=$result->effected_rows(0>);


    }
            
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
   

<style type="text/css">
    h1{
        font-size:3rem;
    }
    input{
    border:1px solid olive;
    border-radius:5px;
    }
    h1{
    color:darkgreen;
    font-size:22px;
    text-align:center;
    
 }
 input[type=text]{
     height:30px;
     width:100%;
     margin:8px;
 }

</style>

</head>
<body>

<h1>Login Form<h1>
    <form action='welcome.php' method='post'>
        <table cellspacing='5' align='center'>
        <tr>
        <td>Email:</td><td><input placeholder="Enter your email" type='text'  name='email'/></td>
        </tr>
        <tr>
        <td>Password:</td><td><input  placeholder="Enter your password" type="text" name="password"></td>
        </tr>
        <tr>
        <td><input type='submit' name='submit' value='Submit'/></td>
        </tr>
    </table>
</form>
</body>
</html>