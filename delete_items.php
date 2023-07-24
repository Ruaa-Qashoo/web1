<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Delete item</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $id = $_POST['id'];
        $sql = "DELETE from menu_items where Id=$id";
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "user's information deleted successfully";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 
    </head>
    <body id="delete">
        <form action="delete_items.php" method="post">
          <h2>Give id to delete the user's information</h2>
          <div class="input-field">
            <label for="id">ID:</label>
            <input type="number" id="id" name ="id" placeholder="Id for item to delete" required>
          </div>
          <br>
          <input type="submit" value="Delete the item" name="submit" id="Dbtn">
    </body>
</html>