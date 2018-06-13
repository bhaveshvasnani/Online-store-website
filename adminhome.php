
<!DOCTYPE html>
<html>
<head>
<title>Bookrentals</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
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
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->


</head>
<body>
<!--banner-->
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
				 
			       <div class="logo">
						 <a href="adminhome.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
				   </div>	
				   					 
				  <div class="top-nav">		
					  <label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<h style="color:white; font-family:arialblack; font-weight:bold; margin-left:500px">
						 Welcome, Admin </h>
						<input id="mobile_menu" type="checkbox">
						
					   <ul class="nav">
						 <li class="dropdown1">
							 <a href="show.php">SHOW BOOK</a>
						 </li>  
						  
						
                        <li class="dropdown1">
				           <a href="admin.php">LOG OUT</a>
						 </li>  
                         
						  
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>LITERATURE</h1></li>
								<li><h1>COMICS</h1></li>	
								<li><h1>NOVELS</h1></li>	
						  </ul>
						  <p>You <span>create</span> the <span>future,</span> we supply the <span>source</span></p>
						  
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->


<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="adminhome.php"><img src="images/logo.png" alt=""/><h2>BOOKRENTALS</h2></a>
			 
		</div>
		
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
</html>

