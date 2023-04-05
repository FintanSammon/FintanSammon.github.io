<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EireRetroJerseys</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.shop.js"></script>

      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-light bg-light justify-content-between">
               <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="index.html">Home</a>
                  <a href="products.html">Products</a>
                  <a href="about.html">About</a>
                  <a href="contact.html">Contact</a>
               </div>
               <span class="toggle_icon" onclick="openNav()"><img src="images2/toggle-icon.png"></span>
               <a class="logo" href="index.html"><img src="images2/Logo1.gif"></a></a>
               <form class="form-inline ">
                  <div class="login_text">
                     <ul>
                        <li><a href="cart.html"><img src="images2/bag-icon.png"></a></li>
                     </ul>
                  </div>
               </form>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Retro <br>Jerseys</h1>
                           <p class="banner_text">Show your team spirit with our high-quality jerseys that stand out from the crowd.</p>
                           <div class="read_bt"><a href="products.html">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images2/JER1.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Retro <br>Jerseys</h1>
                           <p class="banner_text">Show your team spirit with our high-quality jerseys that stand out from the crowd.</p>
                           <div class="read_bt"><a href="products.html">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images2/JER2.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Retro <br>Jerseys</h1>
                           <p class="banner_text">Show your team spirit with our high-quality jerseys that stand out from the crowd.</p>
                           <div class="read_bt"><a href="products.html">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images2/JER3.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="banner_taital">Retro <br>Jerseys</h1>
                           <p class="banner_text">Show your team spirit with our high-quality jerseys that stand out from the crowd.</p>
                           <div class="read_bt"><a href="products.html">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                           <div class="banner_img"><img src="images2/JER4.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
     <!-- product section start -->

          <!-- product section start -->
    <div id="site">
                   <h1 class="product_taital">Our Products</h1>
               <p class="product_text">Elevate your game and show off your style with our premium quality jerseys.</p>
			<header id="masthead">
				<h1> <span class="tagline"></h1>
			</header>
			<div id="content">
				<div id="products">
					<ul>
						<li>
							<div class="product-image">
								<img src="images2/JER1.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #1" data-price="35">
								<h3 class="product-name">Scotland</h3>
								<h3 class="product-name">1991/93 Away Jersey</h3>

								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-1">Quantity</label>
										<input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="images2/JER2.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #2" data-price="35">
								<h3 class="product-name">Nottingham Forest</h3>
								<h3 class="product-name">1979 Home Jersey</h3>
								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-2">Quantity</label>
										<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>

						<li>
							<div class="product-image">
								<img src="images2/JER3.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #3" data-price="35">
								<h3 class="product-name">AC Milan</h3>
								<h3 class="product-name">2006/07 Home Jersey</h3>
								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-3">Quantity</label>
										<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="images2/JER4.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #4" data-price="35">
								<h3 class="product-name">Arsenal</h3>
								<h3 class="product-name">1993/94 Away Jersey</h3>
								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-3">Quantity</label>
										<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="images2/JER5.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #5" data-price="35">
								<h3 class="product-name">Manchester United</h3>
								<h3 class="product-name">1991 Home Jersey</h3>
								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-3">Quantity</label>
										<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
						</li>
						<li>
							<div class="product-image">
								<img src="images2/JER6.png" alt="" />
							</div>
							<div class="product-description" data-name="Jersey #6" data-price="35">
								<h3 class="product-name">Arsenal</h3>
								<h3 class="product-name">1986/88 Home Jersey</h3>
								<p class="product-price">&euro; 35</p>
								<form class="add-to-cart" action="cart.html" method="get">
									<div>
										<label for="qty-3">Quantity</label>
										<input type="text" name="qty-3" id="qty-3" class="qty" value="1" />
									</div>
									<p><input type="submit" value="Add to cart" class="btn" /></p>
								</form>
							</div>
							</div>
						</li>
            <div class="seemore_bt"><a href="products.html">See More</a></div>
         </div>
      </div>
   </div>
   <!-- product section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_main">
               <div class="row">
                  <div class="col-md-6">
                     <div class="about_taital_main">
                        <h1 class="about_taital">About Our Store</h1>
                        <p class="about_text">Welcome to Eire Retro Jerseys, your go-to destination for high-quality, vintage football jerseys.<br>
 
                           Our brand was founded on May 9th, 2020, with a mission to revive the nostalgia and memories associated with retro football jerseys. 
                           We believe that the stories and traditions behind each jersey are what make them unique and worth preserving.
                        </p>
                        <div class="readmore_bt"><a href="about.html">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div><img src="images2/JER28.png" class="image_3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6 mx-auto">
                  <h1 class="contact_taital">Get In Touch</h1>
                  <p class="contact_text">Got a question or concern? Click here to fill out our contact form and we'll get back to you as soon as possible!</p>
               </div>
            </div>
         </div>
      </div>
   </div>
               <div class="col-md-6 mx-auto">
                  <div class="contact_main">
                     <div class="contact_bt"><a href="contact.html">Contact Form</a></div>
                  </div>
               </div>
            </div>
        
      <!-- contact section end -->
      <!-- footer section start -->
        <!-- footer section start -->
        <div class="footer_section layout_padding">
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-sm-4">
                     <h3 class="address_text">Contact Us</h3>
                     <div class="address_bt">
                        <ul>
                           <li>
                              <a href="www.google.com/gmail/">
                              <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left10">Email : EireRetroJerseys@Gmail.com</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <h3 class="address_text1">EireRetroJerseys</h3>
                  </div>
                  <div class="col-sm-4">
                     <div class="main">
                        <h3 class="address_text">Policy</h3>
                        <p class="ipsum_text"><a href="returns.html" style="color: white;">Returns Policy</a></p>
                     </div>
                  </div>
                  
                  
               </div>
            </div>
     
      <!-- Javascript files-->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>      <!-- sidebar -->
      <!-- javascript --> 
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>  
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "100%";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script> 
   </body>
</html>