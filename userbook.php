

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
						 
						 session_start();
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
						  <li><a class="shop" href="cart.php"><img src="images/cart.png" alt=""/></a></li>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div> 				 
</div>
<!--/banner-->
<div class="parts">
	 <div class="container">
		 <h2>BIKE-PARTS ALL</h2>
		 <div class="bike-parts-sec">
		      <div class="bike-parts">
				<div class="top">
					 <ul>
						 <li><a href="index.php">home</a></li>
						 <li><a href="#"> / </a></li>
						 <li><a href="#">parts</a></li>
					 </ul>				 
				 </div>
				 <div class="bike-apparels">
					 <div class="parts1">
						 <a href="single.php"><div class="part-sec">					 
							 <img src="images/a1.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>And Then There Were None<span>Rs.142</span></h5></a>
								 <a class="add-cart" href="single.php">Quick View</a>
								 <a class="qck" href="single.php">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.php"><div class="part-sec">					 
							 <img src="images/a2.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>The ABC Murder<span>Rs.139</span></h5></a>
								 <a class="add-cart" href="single.php">Quick View</a>
								 <a class="qck" href="single.php">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="images/p2.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>The Spy<span>Rs.200</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="images/p4.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Brida<span>Rs.220</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <div class="clearfix"></div>
					 </div>
					 
					 <div class="parts2">
						 <a href="single.html"><div class="part-sec">					 
							 <img src="images/p5.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>The Alchemist<span>Rs.200</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec">					 
							 <img src="images/c1.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>Half Girlfriend<span>Rs.210</span></h5></a>
								 <a class="add-cart" href="single.html#">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="images/c2.JPG" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>The 3 Mistakes Of My Life<span>Rs.200</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <a href="single.html"><div class="part-sec none1">					 
							 <img src="images/c3.jpg" alt=""/>
							 <div class="part-info">
								 <a href="#"><h5>One Indian Girl<span>Rs.200</span></h5></a>
								 <a class="add-cart" href="single.html">Quick View</a>
								 <a class="qck" href="single.html">BUY NOW</a>
							 </div>
						 </div></a>
						 <div class="clearfix"></div>
					 </div>
					 
					
					 
				 </div>
			 </div>
			 <div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h3 class="m_2">Categories</h3>
							<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Frames</option>	
								<option value="1">Back Packs</option>
								<option value="2">Frame Bags</option>
								<option value="3">Panniers </option>
								<option value="4">Saddle Bags</option>								
						   </select>
						   <select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Body Armour</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Tools</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Services</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
						   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="1">Materials</option>
								<option value="2">Sub Category1</option>
								<option value="3">Sub Category2</option>
								<option value="4">Sub Category3</option>
						   </select>
					  </div>
			 
					 
				 </section>
				
			 </div>			 
			 <div class="clearfix"></div>
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

