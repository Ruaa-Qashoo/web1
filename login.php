<?php

@include 'config.php';

session_start();
if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $sql = " SELECT * from user where Email = '$email' && Password = '$pass' ";
   $result = mysqli_query($conn, $sql);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
   }else{
      $error[] = 'incorrect email or password!, Have you previously registered?';
   }
};
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="The-Full-Page">
            <div class="form-box">
</form>
<form action="login.php" id='login' class='input-group-login' method="post" onsubmit="return LValidate(this)">
    <input type='text' name="email" class='input-field'placeholder="Email" required >
<input type='password' name="password" class='input-field'placeholder="Password" required>
<button type='submit' name="submit" class='submit-btn'>Login</button>
<br><br>
<h3 style="text-align:center;">If you don't have an account</h3>
<h3 style="text-align:centre ;">please click here to sign up!</p></h3>
<div id="lgn"><a href="Sign Up.php">Sign Up</a></div>
</form>
            </div>
        </div>
        <script src="Pscript.js"></script>
  </body>
  </html>
  <?php
  function islogin($conn){
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
$sql="SELECT * from user where Email='$email'";
$select=$conn ->query($sql);
$arr=$select ->fetch();
return $arr;
}
else header("location: login.php");
  }
  function isAdmin($data){
      if($data['Id']=='1')
      header("location: admin.php");

  }
  function isUser($data){
    if($data['Id']=='1')
    header("location: Menu.php");
  }
  ?>