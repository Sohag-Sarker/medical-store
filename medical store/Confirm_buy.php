<!DOCTYPE html>
  <html>
    <head>

      <title>Cash On Delivery</title>
      <link rel="stylesheet" type="text/css" href="Style2.css">

    </head>
    <body>
   
      <br>

     
      <br>

      <div class="">
       
      

        <form class="form-signin" method="post" action=""> 

              <h2 class="form-signin-heading">Cash On Delivery</h2>
              <br>
              <input type="text" class="form-control" name="address" placeholder="Address"       required="" autofocus="" />

              <br>
              <br>
              <input type="text" class="form-control" name="contact" placeholder="Contact no"       required="" autofocus="" />

              <br>
              <br>

              <input type="text" class="form-control" name="email" placeholder="Email Address"       required="" autofocus="" />

              <br>
              <br>

              <input type="password" class="form-control" name="pass" placeholder="Password"       required=""/>

              <br>
              <br>      

              <a href="cart.php">Back</a>

              <br>
              <br>

              <input type="submit" value="Submit" name="searching">

              <input type="reset" value="Reset">
              
        </form>
        
    </div>
  </body>
</html>
<?php
 if(isset($_POST['searching'])){

  $address = filter_input(INPUT_POST, 'address');
  
  $email = filter_input(INPUT_POST, 'email');
  $contact = filter_input(INPUT_POST, 'contact');
  $pass = filter_input(INPUT_POST, 'pass');
  
 

 
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "shop_db";

  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

  if (mysqli_connect_error()){

    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
  }
  // Create connection
  
  else{

    $sql = "INSERT INTO buy (Address, Email , Contact, Confirm )
    values ('$address','$email','$contact','YES')";
    if ($conn->query($sql)){
        
      echo '<script>alert("Congrats!Order Confirmed Successfully")</script>';
      
    }
    else{
        echo "Error: ". $sql ."
        ". $conn->error;
    }
    $conn->close();


  }
}
?>
