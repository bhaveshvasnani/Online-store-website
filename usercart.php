
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
<meta name="keywords" content="bike Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
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
<div class="cart">
	 <div class="container">
		 <div class="cart-top">
			<a href="index.php">home</a>
		 </div>	
			
		 <div class="col-md-9 cart-items">
			 <h2>My Shopping Bag (2)</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="images/bik6.jpg"/>
						</div>
					   <div class="cart-item-info">
							 <h3 id="item1">MOUNTAIN HOPPER(XS R034)<span>Model No: 3578</span></h3>
							 <h4 id="cost1"><span>Rs. $ </span>5800.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity1" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p id="service1">Service Charges:: Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec">
						<div class="cart-item">
							 <img src="images/a3.png"/>
						</div>
					   <div class="cart-item-info">
							 <h3 id="item2">RIDE HELMET<span>Model No: 8768</span></h3>
							 <h4 id="cost2"><span>Rs. $ </span>200.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity2" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p id="service2">Service Charges:: Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>						
				  </div>
			  </div>		
		 </div>
		 
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="userbook.php">Continue to shopping</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total">6000.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">200.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final">6200.00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="cart.php">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
	 </div>
</div>
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

<?php
session_start();
$quantity1=$_POST['quantity1'];
$quantity2=$_POST['quantity2'];

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='admin_info';
$conn=mysql_connect($dbhost,$dbuser,$dbpass);
if(! $conn)
{
die('COULD NOT CONNECT:'.mysql_error());
}
$name=$_SESSION['name'];
$sql="insert into cart  values ('$name','MOUNTAIN HOPPER(XS R034','6000','100','$quantity1')";
mysql_select_db('admin_info');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{

}
$sql="insert into cart  values ('$name','RIDE HELMET','200','100','$quantity2')";
mysql_select_db('admin_info');
$retval=mysql_query($sql,$conn);
if(! $retval)
{
die('cannot create:'.mysql_error());
}
else{

}

?>