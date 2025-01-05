<?php
 session_start();

 include ('db.php');

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    if(!empty($email)&&!empty($password)&&!is_numeric($email))
    {
        $query = "select * from tb-users where email='$email'limit 1";
        $result = mysqli_query($conn, $query);
        if($result){
            if($result&& mysqli_num_row($result)>0){
                $user_data=mysqli_fetch_assos($result);
                if($user_data['pass']==$password){
                    header("location:index.php");
                }
            }
        }
        echo"<script type='text/javascript'>alert('registration successful');</script>";
    }
        else{
            echo"<script type='text/javascript'>alert('password dose not match');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="stylelo.css" />
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
    <h2>login</h2>
        <lable for="email">username or email:</lable>
        <input type="text" name="usernameemail" id="usernameemail"required value=""><br>
        <lable for="password">password</lable>
        <input type="password" name="password" id="password"required value=""><br>
        <button type="submit" name="submit">login</button><br>
    <a href="registration.php">registration</a>
    </form>
</body>
</html>