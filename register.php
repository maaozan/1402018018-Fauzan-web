<!DOCTYPE html>
<html>
    <head>
		<title>Mainot Guitars</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styleIndex.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
		
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <body>
	<!-- NAVBAR START -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.php"><marquee behavior="scroll" direction="left">Mainot Guitars</marquee></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
					aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mx-auto mt-2 mt-lg-0">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
						</li>
					</ul>
	
					<ul class="nav navbar-nav pull-sm-right">
						<li class="nav-item">
							<a class="btn btn2" href="login.php" id="log">Login</a>
						</li>
						<li class="nav-item">
							<a class="btn btn1" href="index.php">Home</a>
						</li>
					</ul>
	
				</div>
			</div>
		</nav>
		<br>
		<br>
		<br>
		 <!-- NAVBAR END -->
		 <!-- FORM REGISTRASI START -->
			<center><table>
				<tr><td rowspan="3">
					
					<div style="padding: 70px; background-color:white; text-align: center;margin-top: 300;">
						
					<div class="row">
				<div class="col-md-200">
					<h2 style="color: black">Registrasi</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
						<input type="text" name="user" class="form-control" placeholder="Username" required>
						</div>
						<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
						</div>
						<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Email" required>
						</div>
						<div class="form-group">
						<input type="text" name="no" class="form-control" placeholder="No HP" required>
						</div>
						<div class="form-group">
						<input type="text" name="addres" class="form-control" placeholder="Alamat">
						</div>
						<div class="form-group">
						<input type="password" name="passwd" class="form-control" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Daftar</button>
						<a style="color: black" href="login.php">Login</a>

					</form>
				</div>	
				</div>	

				
			</table></center>
			<!-- FORM REGISTRASI START -->
			<!-- Footer -->
            <footer>
				<div class="container">
					<p style="text-align: center;">
					Copyright &copy; 2022 MAINOT GUITARS.
					</p>
				</div>
			</footer>
	<!-- Footer END -->
		
    </body>
</html>