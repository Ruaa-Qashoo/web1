<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>View Orders</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $sql = "SELECT * from orders";
        if($_POST['submit']){
            if(mysqli_query($conn, $sql)){
                echo "Here user's orders";
            }
            else{
                echo "something went wrong";
            }
        }
        ?> 


</head>
<body id="view">
    <form action="view orders.php" method="post">
<input type="submit" value="Show all the orders of users and their Informations" name="submit" id="vbtn">
    </form>
</body>
</html>