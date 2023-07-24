<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="Admin.css">
    </head>
    <body>
<div id="header">
<img src="admin.png" alt="adminpic" id="adminlogo" height="95%" width="10%">
<div id="log"><a href="home.html">Logout</a></div>
<h3>This is Admin Panel</h3>
</div>
<div id="side_bar">
    <h5><b>Users</b></h5>
<ul>
    <a href="add.php"  style="color:black; text-decoration:none;"><li>Add user </li></a>
    <a href="delete.php"  style="color:black; text-decoration:none;"><li>Delete user</li></a>
    <a href="update.php"  style="color:black; text-decoration:none;"><li>Update user's information</li></a>
    <a href="view orders.php"  style="color:black; text-decoration:none;"><li>View Orders Of Users </li></a>
    <a href="set_user_password.php"  style="color:black; text-decoration:none;"><li>Set user password</li></a>
</ul>
</div>
<div id="side_bar_item">
    <h5><b>Items</b></h5>
    <ul>
        <a href="add_items.php"  style="color:black; text-decoration:none;"><li>Add Item </li></a>
        <a href="delete_items.php" style="color:black; text-decoration:none;"><li>Delete Item </li></a>
        <a href="update_item.php"  style="color:black; text-decoration:none;"><li>Update Item's information</li></a>
        <a href="view_items.php"  style="color:black; text-decoration:none;"><li>View items </li></a>
    </ul>
    </div>
<div id="data">
<h1>Hello Admin</h1>
<h2>You can perform any of the following operations</h2>
</div>
    </body>
    </html>