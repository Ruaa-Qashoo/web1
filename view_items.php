<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>View Items</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $sql = "SELECT * from menu_items";
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "Here user's information";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 


</head>
<body id="view">
    <form action="view_items.php" method="post">
<input type="submit" value="Show all the Items and their Informations" name="submit" id="vbtn">
    </form>
</body>
</html>