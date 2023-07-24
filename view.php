<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>View Users</title>
        <link rel="stylesheet" href="Admin.css">
        <?php
        @include 'config.php';
        $sql = "SELECT * from user";
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
    <form action="view.php" method="post">
<input type="submit" value="Show all the users and their Informations" name="submit" id="vbtn">
    </form>
</body>
</html>