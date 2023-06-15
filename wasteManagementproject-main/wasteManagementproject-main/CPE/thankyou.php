<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	.hbtn {
    background: #ffffff;
    background-image: -webkit-linear-gradient(top, #ffffff, #ffff);
    background-image: -moz-linear-gradient(top, #fefefe, #ffff);
    background-image: -ms-linear-gradient(top, #ffffff, #ffff);
    background-image: -o-linear-gradient(top, #ffffff, #ffff);
    background-image: linear-gradient(to bottom, #ffffff, #ffff);
    -webkit-border-radius: 50px;
    -moz-border-radius: 28px;
    border-radius: 30px;
    font-family: Georgia;
    color: #080707;
    font-size: 20px;
    padding: 10px 20px 10px 20px;
    text-decoration: none;
  }
  
  .hbtn:hover {
    background: #1883d5;
    text-decoration: none;
  }
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU !</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">thank you to contect a SSPI Foundation & help to needed People.</p>
	</div>
	<a href="index.php">
	<button class="hbtn">HOME</button>
    </a>
	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2023 | All Rights Reserved</p>
	</footer>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$mysql = new mysqli($servername, $username, $password,$dbname);
if (isset($_POST['contect'])) 
 {
   $fname = $_POST['fname'];
   $mobileno = $_POST['mobileno'];
   $donation = $_POST['donation'];
   $address = $_POST['address'];
   $message = $_POST['message'];
   $query = "INSERT INTO form VALUES('$fname', '$mobileno', '$donation', '$address', '$message' )";
   $data  = mysqli_query($mysql,$query);
 }
?>
</body>
</html>