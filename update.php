<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Update User Information</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        $mobile = $_POST['number'];
        $photo = $_POST['photo'];
        $sql = "UPDATE user set First_Name = $fname where Id=$id"; $_sql->execute(); 
        $sql = "UPDATE user set Last_Name = $lname where Id=$id";$_sql->execute();
        $sql = "UPDATE user set Email = $email where Id=$id";$_sql->execute();
        $sql = "UPDATE user set Mobile_Number = $mobile where Id=$id";$_sql->execute();
        $sql = "UPDATE user set Personal_Picture = $photo where Id=$id";$_sql->execute();
        $sql = "UPDATE user set Password = $password where Id=$id";$_sql->execute();
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "Set user's information successfully";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 
    </head>
    <body id="set">
        <form action="update.php" method="post">
            <h2>Give id of the user</h2>
            <div class="input-field">
              <label for="id"> ID:</label>
              <input type="text" id="id" name ="id" placeholder="Id for user to delete" required>
            </div>
          <h2>The First Name of the user</h2>
          <div class="input-field">
            <label for="fname">first name:</label>
            <input type="text" id="fname" name ="fname" placeholder="set first name" required>
          </div>
          <h2>The Last Name of the user</h2>
          <div class="input-field">
            <label for="lname">last name:</label>
            <input type="text" id="lname" name ="lname" placeholder="set last name" required>
          </div>
          <h2>The password of the user</h2>
          <div class="input-field">
            <label for="pass">new password:</label>
            <input type="password" id="pass" name ="pass" placeholder="set new password" required>
          </div>
          <h2>The email of th user</h2>
          <div class="input-field">
            <label for="email">email:</label>
            <input type="email" id="email" name ="email" placeholder="set new email" required>
          </div>
          <h2>The mobile number of th user</h2>
          <div class="input-field">
            <label for="number">mobile:</label>
            <input type="text" id="number" name ="number" placeholder="set the number" required>
          </div>
          <h2>The photo of the user</h2>
          <div class="input-field">
            <label for="photo">personal photo:</label>
            <input type="file" id="photo" name ="photo" placeholder="set personal photo" required>
          </div>
          <br>
          <input type="submit" value="Update the user's informations" name="submit" id="Dbtn">
    </body>
</html>