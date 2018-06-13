
<!DOCTYPE html>
<html>
<head>
<title>Bookrentals</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/scripts.js" type="text/javascript"></script>
<!--js-->

</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-sec">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					    <ul class="nav">
						  
						<li class="dropdown1">
							 <a href="book.php">BOOK</a>
						 </li>  
						  <li class="dropdown1"><a href="login.php">LOG IN</a>
						  <ul class="dropdown2">
									<li><a href="register.php">REGISTER</a></li>
						  </ul>				
						 </li>               
						 <li class="dropdown1"><a href="aboutus.php">HELP</a>
							 <ul class="dropdown2">
									<li><a href="index.php">CONTACT US</a></li>
									<li><a href="aboutus.php">ABOUT US</a></li>
							  </ul>
						 </li>
						  <a class="shop" href="cart.php"><img src="images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<center>


<div class="login"> 

<h3>Sign In</h3>
  <form action="user_login_res.php" method="POST">
  <table><tr><td>
    <label for="fname">Email</label></td>
    <td><input type="text" id="" name="ml" placeholder="Your Email..">
	</td></tr>
	<br>
	<tr><td>
    <label for="lname">Password</label></td>
    <td><input type="password" id="" name="pass" placeholder="Your password..">
	</td></tr>
	
  <tr><td >
    
    <input type="submit" value="Login"></td></tr></table>

  </form>
</div>  </center>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 
				 <li><a href="book.php">BOOK</a></li>
				  <li><a href="login.php">LOG IN</a></li>
				 <li><a href="aboutus.php">HELP</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

