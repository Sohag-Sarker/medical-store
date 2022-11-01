<!DOCTYPE html>
<html>
    <head>
      <title>Update Product</title>

      <link rel="stylesheet" type="text/css" href="Style2.css">

      <div class="topnav">

        <a href="Admin_Login.php">DashBoard</a>
        <a href="Add_Product.php">Add Product</a>
        <a class="active" href="Update_Product.php">Update Product</a>
        <a href="Delete_Product.php">Delete Product</a>
        <a href="Confirm_order.php">Confirm order</a>
        <a id="logout" href="Admin_Login.php">Log out</a>
       
      </div>

      <br>
      <center><font color="Red"><h1></h1></font></center>
      <br>
      <div class="">
       
      

        <form class="form-signin" method="post" action=""> 

              <h2 class="form-signin-heading">Product Details</h2>

              

              <input type="text" class="form-control" name="id" placeholder="Product ID"       required=""/>

              <br>
              <br>  
              <input type="number" class="form-control" name="price" placeholder="Product Price"       required=""/>

              <br>
              <br>    
              <input type="text" class="form-control" name="image" placeholder="image"       required=""/>

              <br>
              <br>   


              <input type="submit" value="Submit" name="searching">

              <input type="reset" value="Reset">
              
        </form>
        
    </div>

    </head>
    <body>

    </body>
</html>
<?php
    if(isset($_POST['searching'])){

      
      $id = filter_input(INPUT_POST, 'id');
      $price = filter_input(INPUT_POST, 'price');
      $image = filter_input(INPUT_POST, 'image');
    

      $host = "localhost";
      $dbusername = "root";
      $dbpassword = "";
      $dbname = "shop_db";

      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

      if (mysqli_connect_error()){

        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
      }
      $c=0;
      // Create connection
      $id2 = $_POST['id'];
      $sql2 = "SELECT * FROM products WHERE id='$id2'";
      $result = mysqli_query($conn, $sql2);
      if (mysqli_num_rows($result) > 0) {

       
        $sql = "UPDATE products SET price='$price' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            $c=1;
            //echo "<br><center><font color=Red>Congrats! Price of Product is successfully updated.</font></center>";

        } 
        else {
            //echo "Error updating record: " . mysqli_error($conn);
        }
        $sql = "UPDATE product SET image='$image' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            $c=1;
            //echo "<br><center><font color=Red>Congrats! Amount of Product is successfully updated.</font></center>";

        } 
        else {
            //echo "Error updating record: " . mysqli_error($conn);
        }
        if($c==1){

            echo "<br><center><font color=Red>Congrats! Details of Product is successfully updated.</font></center>";


        }

      }
      else{
      
        echo "<br><center><font color=Red>Wrong Product ID !</font></center>";

        
    }
        $conn->close();


    

    }
?>