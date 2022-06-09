<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mainot Guitars</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleIndex.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript"> 
    function preback() {window.history.forward();}
    setTimeout ("preback()",0);
    window.onunload=function(){null};
    </script>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

</head>
<!-- NAVBAR START -->
<body>
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
                        <a class="btn btn2" href="index.php" id="log">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn1" href="register.php">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
<!-- NAVBAR END -->
    <div class="container">
        <br>
        <!-- FORM LOGIN -->
		<div class="login-box" style="margin-left: 410px; >
        <div class="row">
		<div class="col-md-5">
        <center><h2 style="color: black">WELCOME</h2></center>
			<form action="validation.php" method="post">
				<div class="form-group">
                <h5>Username</h5>
					<input type="text" name="user" class="form-control" placeholder="Enter Your Username" required>
				</div>
				<div class="form-group">
                <h5>Password</h5>
					<input type="password" name="passwd" class="form-control" placeholder="Password" required>
				</div>
				<center><button type="submit" class="btn btn-primary" >Login</button>
				<a style="color: black" href="register.php">Register</a></center>

			</form>
		</div>
        </div>
		</div>	
        <!-- FORM LOGIN END -->

        <footer>
				<div class="container">
					<p style="text-align: center;">
					Copyright &copy; 2022 MAINOT GUITARS.
					</p>
				</div>
			</footer>

</body>

</html>