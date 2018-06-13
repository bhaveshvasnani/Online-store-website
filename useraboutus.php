

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
						 <a href="userhome.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<h style="color:white; font-family:arialblack; font-weight:bold; margin-left:500px">
						 Welcome <?php  
						 
						 
						 echo $_SESSION['name'];
						 
						 
						 
						 ?> </h>
						<input id="mobile_menu" type="checkbox">
					    <ul class="nav">
						 
						  
						  <li class="dropdown1">
							  <a href="userbook.php">BOOK</a>			
						 </li>      
						 
						
                        <li class="dropdown1">
				           <a href="login.php">LOG OUT</a>
						 </li>  
                         <li class="dropdown1"><a href="useraboutus.php">HELP</a>
							 <ul class="dropdown2">
									<li><a href="userhome.php">CONTACT US</a></li>
									<li><a href="useraboutus.php">ABOUT US</a></li>
							  </ul>
						 </li>
						  <a class="shop" href="usercart.php"><img src="images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="404-page">
	 <div class="container">
		 <div class="error-head">
			 <h1>Why We're Here  <label>BOOKRENTALS  </label></h1>
			 <span>Get Your Textbook Rental Here</span>
			 <h3>We're here because most of the students, couldn't stand how much they had to pay for textbooks at the college store. We bet that textbook rental would lower the cost of content better than sales and buyback ever did, and we have started BOOKRENTALS to prove it.


We love that you're here, and we love what we do. (And as it happens, other people love what we do, too!)

Grab us!

Questions? Great! Here's how to get in touch:</h3>
			 <a href="index.php">Contact us</a>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="userhome.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
		</div>
		<div class="ftr-menu">
			  <ul>
				
				 <li><a href="userbook.php">BOOK</a></li>
				  <li><a href="login.php">LOG OUT</a></li>
				 <li><a href="useraboutus.php">HELP</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

