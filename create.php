<?php
include 'db.php';


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];


    $sql = "INSERT INTO user(fname,lname,email,phone,password) VALUES('$fname','$lname','$email','$phone','$password')";

    if($conn->query($sql)==TRUE){
        echo"new record inserted succcessfully";
    }
    else{
        //echo"error";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create.php</title>
     <link rel="stylesheet" href="create.css">
</head>
<body>
    <div class="create1">
        <form action="create.php" method="POST">
            <h1>please fill the form bellow correctly and carefully</h1>
            <label for="fname">First_name</label><br>
            <input type="text" id="fname" name="fname" required placeholder="please enter first-name"><br><br>
            <label for="lname">Last_name</label><br>
            <input type="text" id="lname" name="lname" required placeholder="please enter last-name"><br><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"required placeholder=" please enter your email"><br><br>
            <label for="phone">Phone-No</label><br>
            <input type="text" id="phone" name="phone" placeholder=" please enter your phone NO"><br><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"required placeholder=" please enter password"><br>
            <input type="submit" value="submit">
        
        </form>
    </div>
    
</body>
</html>