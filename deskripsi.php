<?php
session_start();
//header('Access-Control-Allow-Origin: *');
//header('Content-Type: application/json');

include_once 'config/database.php';
include_once 'models/post.php';

$database = new Database();
$db = $database->connect();

$post = new Post($db);

$id_gitar = $_GET["id_gitar"];
//
$post->id_gitar = isset($_GET['id_gitar']) ? $_GET['id_gitar'] : die();
//$ambil = $post->query("SELECT * FROM produk_gitar WHERE id_gitar='$id_gitar'");
//$detail = $ambil->fetch_assoc();
$post->read_single();

$post_arr = array(
    'id_gitar' => $post->id_gitar,
    'nama_gitar' => $post->nama_gitar,
    'harga_gitar' => $post->harga_gitar,
    'jenis_gitar' => $post->jenis_gitar,
    'deskripsi_gitar' => $post->deskripsi_gitar,
    'stok_gitar' => $post->stok_gitar,
    'gambar_gitar' => $post->gambar_gitar    
  );

//echo "<pre>";
//print_r(json_encode($post_arr));
//echo "<pre>";
?>

<!DOCTYPE html>
<html>
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
          <a class="navbar-brand" href="index.php"><h2>MAINOT <em>GUITARS</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
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
        <div class="row">
             
          <div class="col-md-4">
            <img src="img/<?php echo $post_arr["gambar_gitar"]; ?>" alt="">
          </div>

          <div class="col-md-6">
            <h2><?php echo $post_arr["nama_gitar"] ?></h2>
            <h4>Rp. <?php echo $post_arr["harga_gitar"] ?></h4>
            <p><?php echo $post_arr["deskripsi_gitar"] ?></p>
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