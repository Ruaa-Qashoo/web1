<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Add Item</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $name = $_POST['name'];
        $price = $_POST['price'];
        $photo = $_POST['image'];
        $sql = "INSERT into menu_items (Name,Price,image) vlaues ('$name' , '$price' , 'photo')";
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "item is added successfully";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 


</head>
<body>
    <div id="add">
<form action="add_items.php" method="post">
    <div class="input-field">
        <label for="name"> Name:</label>
        <input type="text" id="name" name ="name" placeholder="Name of item" required>
      </div>
    </br>
    <div class="input-field">
      <label for="price">Price:</label>
      <input type="text" id="price"  name ="price" placeholder="Price of item" required>
    </div>
  </br>
      <div class="input-field">
        <label for="image">Image:</label>
         <input type="file" id="image"  name="image" placeholder="image of item" required>
      </div>
    </br>
    <input type="submit" value="Add the item" name="submit" id="btn">
    </div>
</body>
</html>