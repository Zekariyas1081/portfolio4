<?php
   session_start();

   include('db.php');

 if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    if(!empty($email)&&!empty($password)&&!is_numeric($email))
    {
        $query="insert into tb-users (name, username,email,password) values (,'$name','$username',$email','$password')";

        mysqli_query($conn, $query);

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
    <title>registration</title>
    <link rel="stylesheet" href="stylelo.css" />
</head>
<body>
    <form class="" action="" method="post" autocomplete="off">
    <h2>registration</h2>
        <lable for="name">name:</lable>
        <input type="text" name="name" id="name"required value=""><br>
        <lable for="username">username:</lable>
        <input type="text" name="username" id="username"required value=""><br>
        <lable for="email">email:</lable>
        <input type="email" name="email" id="email"required value=""><br>
        <lable for="password">password:</lable>
        <input type="password" name="password" id="password"required value=""><br>
        <lable for="confirmpassword">confirmpassword</lable>
        <input type="password" name="confirmpassword" id="confirmpassword"required value=""><br>
        <button type="submit" name="submit">registration</button><br>
        <a href="login.php">login</a>
    </form>
</body>
</html>