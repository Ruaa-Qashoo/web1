<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Update Item Information</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $sql = "UPDATE menu_items set Name = $name where Id=$id";$_sql->execute();
        $sql = "UPDATE menu_items set Price = $price where Id=$id";$_sql->execute();
        $sql = "UPDATE menu_items set image = $image where Id=$id";$_sql->execute();
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "Set item's information successfully";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 
    </head>
    <body id="set">
        <form action="update_item.php" method="post">
            <h2>Give id of the item</h2>
            <div class="input-field">
              <label for="id"> ID:</label>
              <input type="text" id="id" name ="id" placeholder="Id for user to delete" required>
            </div>
            <br>
          <h2>The Name of the item</h2>
          <div class="input-field">
            <label for="name">name of item:</label>
            <input type="text" id="name" name ="name" placeholder="set name" required>
          </div>
          <br>
          <h2>The price of the item</h2>
          <div class="input-field">
            <label for="price">price:</label>
            <input type="number" id="price" name ="price" placeholder="set price" required>
          </div>
          <br>
          <h2>The image of the item</h2>
          <div class="input-field">
            <label for="image">new password:</label>
            <input type="file" id="image" name ="image" placeholder="set image" required>
          </div>
          <br>
          <input type="submit" value="Update the item's informations" name="submit" id="Dbtn">
    </body>
</html>