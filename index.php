<!DOCTYPE html>
<html>
<head lang="en">
	<title>NCST E-RECORD</title>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--------------------- Main Container --------------------->
    <div class="container-fluid d-flex justify-content-left align-items-center min-vh-100">
        <div class="background-overlay"></div>

        <!--------------------- Login Container --------------------->
        <div class="row border rounded-4 p-3 bg-white shadow box-area">

            <!--------------------- Left box --------------------->
            <div class="col-md-6 rounded-4 d-flex align-items-center flex-column left-box">
                 <div class="featured-image mb-2">
                    <img src="img/NCST-logo.png" alt="NCST-logo" class="img-fluid" style="width: 210px;">
                 </div>
                 <p class="text-white" style="font-family: 'Courier New', Courier, monospace;">NCST</p>
                 <small class="text-white text-wrap text-center fs-6 mt-2" style="width: 19rem; font-family: 'Courier New', Courier, monospace; font-weight: 500;">Hello Nation Builders</small>
            </div>

            <!--------------------- Right box --------------------->
            <div class="col-md-6">
				<form action="login.php" method="post">
					<div class="row align-items-center d-flex align-items-center flex-column right-box">
						<div class="header-text mt-3 mb-2">
							<h2 style="font-size: 25px;">Hello, National Builder!</h2>
								<?php if (isset($_GET['error'])) { ?>
									<p class="error"><?php echo $_GET['error']; ?></p>
								<?php } ?>
						</div>
						<form action="login.php" method="post">
							<div class="input-group mb-2">
								<input type="text" name="uname" class="form-control form-control-lg bg-light fs-4" placeholder="2023-12345" autocomplete="username">
							</div>
							<div class="input-group mb-2">
								<input type="password" name="password" class="form-control form-control-lg bg-light fs-4" placeholder="Password" autocomplete="current-password">
							</div>
							<div class="input-group mb-3 d-flex justify-content-between p-2">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="formCheck">
									<label for="formCheck" class="form-check-label text-secondary"><medium>Remember Me</medium></label>
								</div>
								<div class="forgot">
									<medium><a href="#">Forgot Password?</a></medium>
								</div>
							</div>
							<div class="input-group mb-3">
								<button type="submit" class="btn btn-lg btn-primary w-100 fs-5" >Login</button>
							</div>
						</form>
					</div>
				</form>

            </div>
        </div>
    </div>
</body>
</html>

