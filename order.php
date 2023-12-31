<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Now</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php
  @include 'config.php';
  session_start();
  if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $number = $_POST['number'];
  $password = $_POST['password'];
  $payment = $_POST['method'];
  $flat = $_POST['flat'];
  $street = $_POST['street'];
  $data = $_POST['date'];

  $sql = "INSERT into orders (First_Name,Last_Name,Password,Paymet_Method,Flat_Number,Street_Number,Mobile_Number,Date_for_order)
   values ('$fname' , '$lname' , '$password','$payment','$flat','$street','$number','$data')";
      if(mysqli_query($conn, $sql)){
          echo "order is added successfully";
      }
      else{
          echo "something went wrong";
      }
  }
  ?> 
</head>
<body id="bOrder">   
<section class="order" id="order">
    <h1 class="heading"><b>Order From Our Restaurant Now</b></h1>
    <form action="order.php" method="post" id="Order">
        <div class="input-field">
            <label for="Ufname">User First Name:</label>
            <input type="text" id="Ufname" name ="fname" placeholder="name" required>
          </div>
        </br>
        <div class="input-field">
          <label for="Ulname">User Last Name:</label>
          <input type="text" id="Ulname" name ="lname" placeholder="name" required>
        </div>
      </br>
          <div class="input-field">
            <label for="Unumber">Mobile Number:</label>
            <input type="text" id="Unumber" name ="number" placeholder="number" required>
          </div>
        </br>
        <div class="input-field">
          <label for="password">Password:</label>
           <input type="password" id="password" name="password" placeholder="Your Password" required>
        </div>
      </br>
          <div class="input-field">
            <label for="Pmethod">Payment Method:</label>
             <select id="Pmethod" name="method" class="box" required>
                <option value="Cash upon receipt of the ordery">Cash upon receipt of the order</option>
                <option value="credit card">Credit Card</option>
                <option value="paypal">Paypal</option>
             </select>
          </div>
        </br>
          <div class="input-field">
            <label for="Uaddress">Address (Flat Number):</label>
             <input type="text" id="Uaddress" name="flat" placeholder="4" required>
          </div>
        </br>
        <div class="input-field">
        <label for="Uaddress2">Address (Street):</label>
        <input type="text" id="Uaddress2" name ="street" placeholder="East Street" required>
        </div>
    </br>
      <div class="input-field">
      <label for="date">Date for order:</label>
      <input type="date" id="date" name ="date" placeholder="Today's date" required>
      </div>
  </br>
     <input type="submit" value="Order" class="btn" name="submit">
    </form>
 </section>
 <script src="Pscript.js" type="text/javascript"></script>
</body>
</html> 