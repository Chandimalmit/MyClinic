<?php
session_start();
require("../config/config.php");

$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = check_input($_POST["username"]);
    $password = check_input($_POST["password"]); 
    $password = sha1($password);  // hash password 

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    
    $count = mysqli_num_rows($result);
      
    // If result matched $username and $password, table row must be 1 row
		
    if($count == 1) { 
         $_SESSION['login_user'] = $username;
         header("location: ../welcome.php");
    }else {
          header("location: ../index.php?error=Invalid username or password. Try again.");
         
    }
}


?>