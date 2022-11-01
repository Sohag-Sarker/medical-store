<!DOCTYPE html>
<html>

<head>
  <title>Medical store</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css1/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css1/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css1/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="homepage.php">
            <img src="images/logo.png" alt="Home">
            <span>
              Medical store
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php"> Products </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Online Doctor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Admin_Login.php">Admin</a>
                </li>
              </ul>
              <form class="form-inline ">
                <input type="search" name="search" placeholder="Search">
                <button class="btn  my-2 my-sm-0 nav_search-btn" name="submit" type="submit"></button>
              </form>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="login.php">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Welcome To Our <br>
                      <span>
                        Online Medical Store
                      </span>

                    </h1>
                    <p>
                      There are many variations of passages of medical items available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
    <!-- end slider section -->
  </div>

  <!-- health section -->

  <section class="health_section layout_padding">
    <div class="health_carousel-container">
      <h2 class="text-uppercase">
        Medicines & Equipments
      </h2>
      <div class="carousel-wrap layout_padding2">
        <div class="owl-carousel" align="center">
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-1.png" alt="">
              </div>
              <div class="detail-box">
    
                <div class="text">
                  <h6>
                    Napa 10 pcs
                  </h6>
                  <h6 class="price">
                    <span>
                      ৳
                    </span>
                    15
                  </h6>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
              
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-2.jpg" alt="">
              </div>
              <div class="detail-box">
      
                <div class="text">
                  <h6>
                    Metformin 1 pack
                  </h6>
                  <h6 class="price">
                    <span>
                      ৳
                    </span>
                    84
                  </h6>
                </div>
              </div>
            </div>

          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-3.jpg" alt="">
              </div>
              <div class="detail-box">
          
                <div class="text">
                  <h6>
                    Dormicum 1 pack
                  </h6>
                  <h6 class="price">
                    <span>
                      ৳
                    </span>
                    200
                  </h6>
                </div>
              </div>
            </div>

          </div>
          <div class="item">
            <div class="box">
              <div class="btn_container">
                <a href="">
                  
                </a>
              </div>
              <div class="img-box">
                <img src="images/p-4.jpg" alt="">
              </div>
              <div class="detail-box">
                
                <div class="text">
                  <h6>
                   Blood Pressure Monitor
                  </h6>
                  <h6 class="price">
                    <span>
                      ৳
                    </span>
                    1800
                  </h6>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center">
      <a href="index.php">
        See more
      </a>
    </div>
  </section>

  <!-- end health section -->



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  +8801750881604
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  1234saikatsarker@gmail.com
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="homepage.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="medicine.php"> Medicine </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; Design by 19104016 & 19104018
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>
</html>










<?php

$con =new PDO("mysql:host=localhost;dbname=shop_db",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `products` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Price</th>
        <th>Image</th>
			</tr>
			<tr>
				<td><?php echo $row->name; ?></td>
				<td><?php echo $row->price;?></td>
        <td><?php echo $row->image;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>