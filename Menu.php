<!DOCTYPE html>
<html lang="en">
<head>
  <title>Restaurant Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Cart.css">
</head>
<body style="background-color: #F3C693;">
   
   <div ><br>
      <div><button class="clear-cart btn btn-danger">Clear the Cart</button></div>
     <div><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">My Cart (<span class="total-count"></span>)</button></div>
</div>

<div class="container">
   <div class="row">
     <div class="col-md-4">
       <div class="card">
 <img class="card-img-top" src="pizza-1.jpg" alt="Card image cap" height="100%" width="100%">
 <div class="card-block">
   <h4 class="card-title">Pizza 1</h4>
   <p class="card-text">Price: $2</p>
   <a href="#" data-name="Orange" data-price="2" class="add-to-cart btn btn-primary">Add to Cart</a>
 </div>
</div>
     </div>
     <div class="col-md-4">
       <div class="card">
 <img class="card-img-top" src="pizza-2.jpg" alt="Card image cap" height="100%" width="100%">
 <div class="card-block">
   <h4 class="card-title">Pizza 2</h4>
   <p class="card-text">Price: $4</p>
   <a href="#" data-name="Banana" data-price="4" class="add-to-cart btn btn-primary">Add to Cart</a>
 </div>
</div>
     </div>
     <div class="col-md-4">
       <div class="card">
 <img class="card-img-top" src="pizza-3.jpg" alt="Card image cap" height="100%" width="100%">
 <div class="card-block">
   <h4 class="card-title">Pizza 3</h4>
   <p class="card-text">Price: $2</p>
   <a href="#" data-name="Lemon" data-price="2" class="add-to-cart btn btn-primary">Add to Cart</a>
 </div>
</div>
     </div>
   </div> <br>
   <div class="row">
      <div class="col-md-4">
        <div class="card">
  <img class="card-img-top" src="pizza-4.jpg" alt="Card image cap"height="100%" width="100%">
  <div class="card-block">
    <h4 class="card-title">Pizza 4</h4>
    <p class="card-text">Price: $5</p>
    <a href="#" data-name="Orange" data-price="5" class="add-to-cart btn btn-primary">Add to Cart</a>
  </div>
 </div>
      </div>
      <div class="col-md-4">
        <div class="card">
  <img class="card-img-top" src="pizza-5.jpg" alt="Card image cap" height="100%" width="100%">
  <div class="card-block">
    <h4 class="card-title">Pizza 5</h4>
    <p class="card-text">Price: $3</p>
    <a href="#" data-name="Banana" data-price="3" class="add-to-cart btn btn-primary">Add to Cart</a>
  </div>
 </div>
      </div>
      <div class="col-md-4">
        <div class="card">
  <img class="card-img-top" src="pizza-6.jpg" alt="Card image cap" height="100%" width="100%">
  <div class="card-block">
    <h4 class="card-title">Pizza 6</h4>
    <p class="card-text">Price: $4</p>
    <a href="#" data-name="Lemon" data-price="4" class="add-to-cart btn btn-primary">Add to Cart</a>
  </div>
 </div>
      </div>
    </div> <br>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
  <img class="card-img-top" src="pizza-7.jpg" alt="Card image cap" height="100%" width="100%">
  <div class="card-block">
    <h4 class="card-title">Pizza 7</h4>
    <p class="card-text">Price: $3</p>
    <a href="#" data-name="Orange" data-price="3" class="add-to-cart btn btn-primary">Add to Cart</a>
  </div>
 </div>
      </div>
      <div class="col-md-4">
        <div class="card">
  <img class="card-img-top" src="pizza-8.jpg" alt="Card image cap" height="100%" width="100%">
  <div class="card-block">
    <h4 class="card-title">Pizza 8</h4>
    <p class="card-text">Price: $2</p>
    <a href="#" data-name="Banana" data-price="2" class="add-to-cart btn btn-primary">Add to Cart</a>
  </div>
 </div>
      </div>
      <div class="col-md-4">
         <div class="card">
   <img class="card-img-top" src="pizza-9.jpg" alt="Card image cap" height="100%" width="100%">
   <div class="card-block">
     <h4 class="card-title">Pizza 9</h4>
     <p class="card-text">Price: $3</p>
     <a href="#" data-name="Banana" data-price="3s" class="add-to-cart btn btn-primary">Add to Cart</a>
   </div>
  </div>
       </div>
    </div>
</div>
<br>

 <div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       </button>
     </div>
     <div class="modal-body">
       <table class="show-cart table">  
       </table>
       <div>Total price: $<span class="total-cart"></span></div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <a href="order.php"><button type="button" class="btn btn-primary">Order now</button></a>  
     </div>
   </div>
</div> 

<script src="cart.js"></script>

</body>
 </html>