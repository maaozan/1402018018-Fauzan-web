<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MAINOT GUITARS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="indexlogin.php"><h2>MAINOT <em>GUITARS</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="indexlogin.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products_login.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact_login.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="keranjang.php">Keranjang</a>
              </li>
              <li class="nav-item">
			          		<a class="btn btn2" href="indexlogin.php">Login, <?php echo ($_SESSION['username']); ?></a>
		      	  </li>
              <li class="nav-item">
                    <a class="btn btn1" href="index.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>MAINOT GUITARS</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
      $user = 'root';
      $password ='';
      $db = 'toko_gitar';
      $mysqli = new mysqli('localhost',$user,$password,$db) or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM produk_gitar") or die($mysqli->error);
      // pre_r($result);
      ?>

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Product</h2>
            <!--<a href="products.html">view all products <i class="fa fa-angle-right"></i></a>-->
            </div>
          </div>
          <?php
        while ($row = $result->fetch_assoc()): ?>   
          <div class="col-md-4">
            <div class="product-item">
              <a href="detail.php?id_gitar=<?php echo $row['id_gitar']; ?>"><img src="img/<?php echo $row['gambar_gitar']; ?>" alt=""></a>
              <div class="down-content">
                <a href="detail.php?id_gitar=<?php echo $row['id_gitar']; ?>"><h4><?php echo $row['nama_gitar']; ?></h4></a>                
                <br>Rp. <?php echo $row['harga_gitar']; ?></br>
                <p><?php echo $row['deskripsi_gitar']; ?></p>
              </div>
            </div>
          </div>
         
          <?php endwhile; ?>
        </div>
      </div>
    </div>




    <div class="call-to-action">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
            <a href=""><img src="img/merk_gitar.png" alt=""></a>
              <p>Copyright &copy; 2022 MAINOT GUITARS.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>