<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
      
    <div class="container">

       <div class="box">
        <div class="header">
            <header><img src="images/logo.png" alt=""></header>
            <p>Log In to Hebebiyon</p>
        </div>
        <div class="input-box">
            <label for="text">Username</label>
            <input type="text" class="input-field" id="username" name="username" required>
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <label for="pass">Password</label>
            <input type="password" class="input-field" id="pass" name="password" required>
            <i class="bx bx-lock"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="input-submit" value="SIGN IN" name="login_Btn">
        </div>
        <div class="bottom">
            <span><a href="#">Sign Up</a></span>
            <span><a href="#">Forgot Password?</a></span>
        </div>
        

       </div>
       <div class="wrapper"></div>
    </div>

</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","");
if(isset($_POST["login_Btn"])){
         $username = $_POST["username"];
         $password = $_POST["password"];
         $sql = "SELECT * FROM websitelogin.logindetails WHERE username = '$username';
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_array($result)){
             $resultPassword = $row["password"];
             if($password == $resultPassword){
                 header("Location:index.html");
             }
             else{
                 echo "<script>alert('Incorrect Password')</script>";
             }
         }
?>