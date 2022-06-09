<?php
session_start();

// echo "<pre>";
// print_r($_SESSION['keranjang']);
// echo "</pre>";

    $user = 'root';
    $password ='';
    $db = 'toko_gitar';
    $mysqli = new mysqli('localhost',$user,$password,$db) or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM produk_gitar") or die($mysqli->error);


?>
<!DOCTYPE html>
<html>
<head>
    <title>keranjang belanja</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<!-- BODY -->
<body>
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
<!-- header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="indexlogin.php"><h2>MAINOT <em>GUITARS</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="indexlogin.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
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
<!-- header -->

<!-- mulai dari sini -->
<!-- Banner Starts Here -->
<div class="banner header-text">

</div>
<!-- Banner Ends Here -->
    <section class="latest-products">
      <div class="container">
        <h1>Keranjang Belanja</h1>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_git => $jumlah): ?>
                <?php 
                    $ambil = $mysqli->query("SELECT * FROM produk_gitar WHERE id_gitar='$id_git'");
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["harga_gitar"]*$jumlah;
                    // echo "<pre>";
                    // print_r($pecah);
                    // echo "</pre>";
                ?>   
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah["nama_gitar"]; ?></td>
                    <td>Rp. <?php echo number_format($pecah["harga_gitar"]); ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td>Rp. <?php echo number_format($subharga); ?> </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>

        <a href="indexlogin.php" class="btn btn-primary">Lanjutkan Belanja</a>
<!--  -->
        <div class="row">
             
          <div class="col-md-4">
          </div>

          <div class="col-md-6">
          </div>
         
         
        </div>
      </div>
    </section>





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
  cleared[0] = cleared[1] = cleared[2] = 0; 
  function clearField(t){                   
  if(! cleared[t.id]){                      
      cleared[t.id] = 1;  
      t.value='';         
      t.style.color='#fff';
      }
  }
</script>    
</body>
</html>
