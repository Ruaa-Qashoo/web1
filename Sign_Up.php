<?php
session_start();
@include 'config.php';
$showAlert = false; 
$showError = false; 
$exists=false;
if(isset($_POST['submit'])){
    $fname = $_POST["fname"]; 
    $lname = $_POST["lname"]; 
    $email = $_POST["email"]; 
    $mobile = $_POST["number"]; 
    $photo = $_POST["Personal-Picture"]; 
    $password = $_POST['password'];
    $cpassword = $_POST['Cpassword'];     
    $sql = "SELECT * from user where Email='$email' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result); 
    if($num == 0) {
        if(($password == $cpassword) && $exists==false) {
    
            $hash = password_hash($password,PASSWORD_DEFAULT);
                
            $sql ="INSERT into user (`First_Name`,`Last_Name`,`Email`,`Mobile_Number`,`Personal_Picture`,`Password`) values ('$fname' , '$lname' , '$email' , '$mobile' , '$photo' , '$password')";    
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }
    if($num>0) 
   {
      $exists="email not available"; 
   } 
    
}  
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">  
        <link rel="stylesheet" href="sign up.css">
    </head>
    <body>
    <?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success" role="alert"><strong>Success!</strong> Your account is now created and you can login. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
 echo ' <div class="alert alert-danger" role="alert"><strong>Error!</strong> '. $showError.'<button type="button" class="close" data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> </button>  </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger" role="alert"><strong>Error!</strong> '. $exists.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     } 
?>
        <div class="The-Full-Page">
            <div class="form-box">
                <form action="Sign_Up.php"  id="sign-up" class="input-group-signUp" method="post"> 
                    <input type="text" name="fname" class="input-field" placeholder="First Name" required>
                    <input type="text" name="lname"  class="input-field" placeholder="Last Name" required>
                    <input type="email" name="email" class="input-field" placeholder="Email" required>
                    <input type="text" name="number" class="input-field" placeholder="Your Mobile Phone" required>
                    Personal-Picture: <input type="file" name="Personal-Picture" class="input-field" accept=".png, .jpg, .jpeg">
                    <input type="password" name="password" class="input-field" placeholder="Enter The Password" required>
                    <input type="password" name="Cpassword" class="input-field" placeholder="Confirm The Password" required><br/>
                    <input type="submit" name="submit" class="submit-btn" value="sign_up">
                    <div id="lgn"><a href="login.php">Already a member? Login here</a></div>
                </form>
            </div>
        </div>
  </body>
  </html>