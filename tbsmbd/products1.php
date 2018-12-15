<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 	
	session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Bazaar an E-commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Products1 :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/owl.carousel.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts -->
<!-- scroll to fixed-->
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed-->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {

		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
		};

		$().UItoTop({ easingType: 'easeOutQuart' });

	});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<!-- the mousewheel plugin -->
</head>
<body>
	<!-- header -->
	<div class="header">
		<?php include('kepala.php'); ?>
		<div class="header-two"><!-- header-two -->
			<div class="container-fluid">
				<div class="header-logo">
					<h1><a href="index.php"><span>Red</span>Market <i></i></a>
					<h6>Your stores. Your place.</h6>
				</div>
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart">
					<div class="my-account">
						<a href="contact.php"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>
					</div>
					<div class="cart">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="display" value="1" />
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown">
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content">
								<li><a href="offers.php">Today's Offers</a></li>
								<li class="has-children">
									<a href="#">Electronics</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.php">All Electronics</a></li>
										<li class="has-children">
											<a href="#">MOBILE PHONES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics</a></li>
												<li class="has-children">
													<a href="#0">SmartPhones</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.php">Android</a></li>
														<li><a href="products.php">Windows</a></li>
														<li><a href="products.php">Black berry</a></li>
													</ul>
												</li>
												<li> <a href="products.php">IPhones</a> </li>
												<li><a href="products.php">Tablets</a></li>
												<li><a href="products.php">IPad</a></li>
												<li><a href="products.php">Feature Phones</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">LARGE APPLIANCES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics </a></li>
												<li><a href="products.php">Refrigerators</a></li>
												<li><a href="products.php">Washing Machine</a></li>
												<li><a href="products.php">Office Technology</a></li>
												<li><a href="products.php">Air conditioner</a></li>
												<li><a href="products.php">Home Automation</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">ENTERTAINMENT</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Electronics</a></li>
												<li><a href="products.php">Tv & Accessories</a></li>
												<li><a href="products.php">Digital Camera</a></li>
												<li><a href="products.php">Gaming</a></li>
												<li><a href="products.php">Home Audio & Theater</a></li>
												<li class="has-children">
													<a href="#">Computer</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.php">Laptop </a></li>
														<li><a href="products.php">Gaming PC</a></li>
														<li><a href="products.php">Monitors</a></li>
														<li><a href="products.php">Networking</a></li>
														<li><a href="products.php">Printers & Supplies</a></li>
														<li><a href="products.php">Accessories</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">HOME APPLIANCES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li class="has-children"><a href="#">Kitchen appliances</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.php">Rice Cookers</a></li>
														<li><a href="products.php">Mixer Juicer</a></li>
														<li><a href="products.php">Grinder</a></li>
														<li><a href="products.php">Blenders & Choppers</a></li>
														<li><a href="products.php">Microwave Oven</a></li>
														<li><a href="products.php">Food Processors</a></li>
													</ul>
												</li>
												<li><a href="products.php">Purifiers</a></li>
												<li><a href="products.php">Geysers</a></li>
												<li><a href="products.php">Gas Stove</a></li>
												<li><a href="products.php">Vacuum Cleaner</a></li>
												<li><a href="products.php">Sewing Machine</a></li>
												<li><a href="products.php">Heaters & Fans</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">SMALL DEVICES</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.php">Wifi Dongle</a></li>
												<li><a href="products.php">Router & Modem</a></li>
												<li class="has-children"><a href="#">Storage Devices</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.php">Cloud Storage</a></li>
														<li><a href="products.php">Hard Disk</a></li>
														<li><a href="products.php">SSD</a></li>
														<li><a href="products.php">Pen Drive</a></li>
														<li><a href="products.php">Memory card</a></li>
														<li><a href="products.php">Security Devices</a></li>
													</ul>
												</li>
												<li><a href="products.php">Office Supplies</a></li>
												<li><a href="products.php">Cut the Cable</a></li>
												<li><a href="products.php">Auto Electronics</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">PERSONAL CARE</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.php">Epilator</a></li>
												<li><a href="products.php">Hair Styler</a></li>
												<li><a href="products.php">Trimmer & Shaver</a></li>
												<li><a href="products.php">Health Care</a></li>
												<li><a href="products.php">cables</a></li>
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Fashion Store</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products1.php">All Fashion Stores</a></li>
										<li class="has-children">
											<a href="#">GIRLS' CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Ethnic wear </a></li>
												<li><a href="products1.php">Maternity wear</a></li>
												<li><a href="products1.php">inner & nightwear </a></li>
												<li><a href="products1.php">casual wear </a></li>
												<li><a href="products1.php">formal wear</a></li>
												<li><a href="products1.php">Sports wear</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">BOYS' CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Jeans</a></li>
												<li><a href="products1.php">Casual wear</a></li>
												<li><a href="products1.php">Shorts</a></li>
												<li><a href="products1.php">T-Shirts & Polos</a></li>
												<li><a href="products1.php">Trousers & Chinos</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">JACKETS</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Blazers</a></li>
												<li><a href="products1.php">Bomber jackets</a></li>
												<li><a href="products1.php">Denim Jackets</a></li>
												<li><a href="products1.php">Duffle Coats</a></li>
												<li><a href="products1.php">Leather Jackets</a></li>
												<li><a href="products1.php">Parkas</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">ACCESSORIES </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Watches </a></li>
												<li><a href="products1.php">Eyewear </a></li>
												<li><a href="products1.php">Jewellery </a></li>
												<li class="has-children">
													<a href="#">Footwear </a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products1.php">Ethnic</a></li>
														<li><a href="products1.php">Casual wear</a></li>
														<li><a href="products1.php">Sports Shoes</a></li>
														<li><a href="products1.php">Boots</a></li>
													</ul>
												</li>
												<li><a href="products1.php">Stoles & Scarves</a></li>
												<li><a href="products1.php">Handbags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">BEAUTY</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Perfumes & Deos</a></li>
												<li><a href="products1.php">Lipsticks & Nail Polish</a></li>
												<li><a href="products1.php">Beauty Gift Hampers</a></li>
												<li><a href="products1.php">Personal Grooming</a></li>
												<li><a href="products1.php">Travel bags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="products1.php">PERSONAL CARE</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.php">Face Care</a></li>
												<li><a href="products1.php">Nail Care</a></li>
												<li><a href="products1.php">Hair Care</a></li>
												<li><a href="products1.php">Body Care</a></li>
												<li><a href="products1.php">Bath & Spa</a></li>
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="products2.php">Kids Fashion & Toys</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products2.php">All Kids Fashions</a></li>
										<li class="has-children">
											<a href="products2.php">KIDS CLOTHING</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Ethnic wear </a></li>
												<li><a href="products2.php">inner & Sleepwear </a></li>
												<li><a href="products2.php">Dresses & Frocks </a></li>
												<li><a href="products2.php">Winter wear</a></li>
												<li><a href="products2.php">Diaper & Accessories</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="#">KIDS FASHION</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Footwear</a></li>
												<li><a href="products2.php">Sunglasses </a></li>
												<li><a href="products2.php">School & Stationery</a></li>
												<li><a href="products2.php">Jewellery</a></li>
												<li><a href="products2.php">Hair bands & Clips</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="#">Baby Care</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Lotions, Oil & Powder </a></li>
												<li><a href="products2.php">Soaps, Shampoo </a></li>
												<li><a href="products2.php">Bath Towels</a></li>
												<li class="has-children">
													<a href="#">Feeding</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products2.php">Baby Food </a></li>
														<li><a href="products2.php">Bottle Feeding </a></li>
														<li><a href="products2.php">Breast Feeding</a></li>
													</ul>
												</li>
												<li><a href="products2.php">Toddlers' Rooms</a></li>
											</ul><!-- .cd-secondary-dropdown -->
										</li> <!-- .has-children -->
										<li class="has-children"><a href="#">TOYS & GAMES </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Art & Crafts</a></li>
												<li><a href="products2.php">Educational Toys </a></li>
												<li><a href="products2.php">Baby Toys</a></li>
												<li><a href="products2.php">Outdoor Play </a></li>
												<li><a href="products2.php">Musical Instruments</a></li>
											</ul>
										</li>
										<li>
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.php">Toy Tips & Trends</a></li>
												<li><a href="products2.php">Preschool Toys</a></li>
												<li><a href="products2.php">Musical Instruments</a></li>
												<li><a href="products2.php">Bikes & Ride-Ons</a></li>
												<li><a href="products2.php">Video Games</a></li>
												<li><a href="products2.php">PC & Digital Gaming</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Home, Furniture & Patio</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products3.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Kitchen Uses</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Dinner Sets </a></li>
												<li><a href="products3.php">Cookware & Bakeware </a></li>
												<li><a href="products3.php">Containers & Jars </a></li>
												<li><a href="products3.php">Kitchen Tools </a></li>
												<li><a href="products3.php">Food Storage</a></li>
												<li><a href="products3.php">Casseroles</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Furniture </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Bedroom </a></li>
												<li><a href="products3.php">Dining Room </a></li>
												<li><a href="products3.php">Kids' Furniture </a></li>
												<li><a href="products3.php">Living Room</a></li>
												<li><a href="products3.php">Office</a></li>
												<li><a href="products3.php">Mattresses</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Home Decor </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Lighting</a></li>
												<li><a href="products3.php">Painting</a></li>
												<li><a href="products3.php">Curtains & Blinds</a></li>
												<li><a href="products3.php">Patio Furniture</a></li>
												<li><a href="products3.php">Wardrobes & Cabinets</a></li>
												<li><a href="products3.php">Mattresses</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Gardening & Lawn </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"> </a></li>
												<li><a href="products3.php">Gardening </a></li>
												<li><a href="products3.php">Landscaping </a></li>
												<li><a href="products3.php">Sheds</a></li>
												<li><a href="products3.php">Outdoor Storage  </a></li>
												<li><a href="products3.php">Garden & Ideas </a></li>
												<li><a href="products3.php">Patio Tips</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Garage Storage</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.php">Baskets & Bins </a></li>
												<li><a href="products3.php">Garage Door Openers</a></li>
												<li><a href="products3.php">Free Standing Shelves </a></li>
												<li><a href="products3.php">Floor cleaning</a></li>
												<li><a href="products3.php">Tool Kits</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Sports, Fitness & Outdoor</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products4.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Single Sports </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Bikes </a></li>
												<li><a href="products4.php">Fishing  </a></li>
												<li><a href="products4.php">Cycling </a></li>
												<li><a href="products4.php">Musical Instruments</a></li>
												<li><a href="products4.php">Archery </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Team Sports</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Cricket </a></li>
												<li><a href="products4.php">Badminton </a></li>
												<li><a href="products4.php">Swimming Gear </a></li>
												<li><a href="products4.php">Sports Apparel </a></li>
												<li><a href="products4.php">Indoor games</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Fitness </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Fitness Accessories </a></li>
												<li><a href="products4.php">Exercise Machines </a></li>
												<li><a href="products4.php">Ellipticals </a></li>
												<li><a href="products4.php">Home Gyms</a></li>
												<li><a href="products4.php">Exercise Bikes</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Camping </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php"> Airbeds</a></li>
												<li><a href="products4.php">Tents </a></li>
												<li><a href="products4.php">Gazebo's & Shelters</a></li>
												<li><a href="products4.php">Coolers </a></li>
												<li><a href="products4.php">Canopies</a></li>
												<li><a href="products4.php">Sleeping Bags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Camping Tools</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Shooting </a></li>
												<li><a href="products4.php">Knives & Tools </a></li>
												<li><a href="products4.php">Optics & Binoculars </a></li>
												<li><a href="products4.php">Lights & Lanterns </a></li>
												<li><a href="products4.php">Hunting Clothing </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Other</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.php">Riding Gears & More </a></li>
												<li><a href="products4.php">Body Massagers </a></li>
												<li><a href="products4.php">Health Monitors </a></li>
												<li><a href="products4.php">Health Drinks </a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Grocery store</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products5.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Veggies & Fruits </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Vegetables </a></li>
												<li><a href="products5.php">Fruits </a></li>
												<li><a href="products5.php">Dry Fruits</a></li>
												<li><a href="products5.php">Snacks & Cookies </a></li>
												<li><a href="products5.php">Breakfast & Cereal</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Packet Food</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Beverages </a></li>
												<li><a href="products5.php">Baking </a></li>
												<li><a href="products5.php">Emergency Food </a></li>
												<li><a href="products5.php">Candy & Gum </a></li>
												<li><a href="products5.php">Meals & Pasta </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Shop All Pets </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Dogs </a></li>
												<li><a href="products5.php">Fish </a></li>
												<li><a href="products5.php">Cats</a></li>
												<li><a href="products5.php">Birds </a></li>
												<li><a href="products5.php">Pet Food </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Household Essentials </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Laundry Room </a></li>
												<li><a href="products5.php">Paper & Plastic</a></li>
												<li><a href="products5.php">Pest Control </a></li>
												<li><a href="products5.php">Batteries </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Food Shops </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Fresh Food</a></li>
												<li><a href="products5.php">Food Gifts </a></li>
												<li><a href="products5.php">Frozen Food </a></li>
												<li><a href="products5.php">Organic </a></li>
												<li><a href="products5.php">Gluten Free </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Tips </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.php">Pets Growth</a></li>
												<li><a href="products5.php">Recipes </a></li>
												<li><a href="products5.php">Snacks</a></li>
												<li><a href="products5.php">Nutrition</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Photo, Gifts & Office Supplies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products6.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Trending Now </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Best Priced</a></li>
												<li><a href="products6.php">Chocolates </a></li>
												<li><a href="products6.php">Gift Cards </a></li>
												<li><a href="products6.php">Fashion & Accessories </a></li>
												<li><a href="products6.php">Decorative Plants </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Photos </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Shelf animation </a></li>
												<li><a href="products6.php">3D-rendered </a></li>
												<li><a href="products6.php">gift builder </a></li>
												<li><a href="products6.php">Frames</a></li>
												<li><a href="products6.php">Wall Decor</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Gifts </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Personalized Gifts </a></li>
												<li><a href="products6.php">Flowers </a></li>
												<li><a href="products6.php">Cards & Toys</a></li>
												<li><a href="products6.php">Show pieces </a></li>
												<li><a href="products6.php">Photo Books</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Favourite Brands </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Archies </a></li>
												<li><a href="products6.php">Jewel Fuel </a></li>
												<li><a href="products6.php">Ferns N Petals </a></li>
												<li><a href="products6.php">Happily Unmarried</a></li>
												<li><a href="products6.php">Chumbak</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Office</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Calendars</a></li>
												<li><a href="products6.php">Mousepads</a></li>
												<li><a href="products6.php">Phone Cases</a></li>
												<li><a href="products6.php">Tablet & Laptop Cases</a></li>
												<li><a href="products6.php">Mounted Photos</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Combos </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.php">Chocolates </a></li>
												<li><a href="products6.php">Dry Fruits</a></li>
												<li><a href="products6.php">Sweets</a></li>
												<li><a href="products6.php">Snacks</a></li>
												<li><a href="products6.php">Cakes</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Health, Beauty & Pharmacy</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products7.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Health</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Home Health Care </a></li>
												<li><a href="products7.php">Sports Nutrition </a></li>
												<li><a href="products7.php">Vision </a></li>
												<li><a href="products7.php">Vitamins </a></li>
												<li><a href="products7.php">Diet & Nutrition </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Health Tips</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Diet</a></li>
												<li><a href="products7.php">Exercise Tips  </a></li>
												<li><a href="products7.php">Vitamin Balance</a></li>
												<li><a href="products7.php">Health Insurance</a></li>
												<li><a href="products7.php">Funeral</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Beauty </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Massage & Spa </a></li>
												<li><a href="products7.php">Face Wash</a></li>
												<li><a href="products7.php">Facial Cleanser</a></li>
												<li><a href="products7.php">Makeup </a></li>
												<li><a href="products7.php">Beauty Tips</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Pharmacy </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Home Delivery </a></li>
												<li><a href="products7.php">History & Reports </a></li>
												<li><a href="products7.php">Transfer Prescriptions </a></li>
												<li><a href="products7.php">Health CheckUp</a></li>
												<li><a href="products7.php">Mobile App</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Pharmacy Center </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.php">Diabetes Shop </a></li>
												<li><a href="products7.php">Medicine Cabinet </a></li>
												<li><a href="products7.php">Vitamin Selector</a></li>
												<li><a href="products7.php">Pharmacy Help</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Automotive</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products8.php">All Products</a></li>
										<li class="has-children">
											<a href="#">All Motors </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Bikes </a></li>
												<li><a href="products8.php">Yachts </a></li>
												<li><a href="products8.php">Scooters </a></li>
												<li><a href="products8.php">Autos</a></li>
												<li><a href="products8.php">Bus</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Accessories </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Vehicle Electronics</a></li>
												<li><a href="products8.php">Stereos & Monitors</a></li>
												<li><a href="products8.php">Bluetooth Devices</a></li>
												<li><a href="products8.php">GPS Navigation</a></li>
												<li><a href="products8.php">Speakers & Tweeters</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Safety & Security </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Anti-Theft Devices </a></li>
												<li><a href="products8.php">Helmets</a></li>
												<li><a href="products8.php">Sensors</a></li>
												<li><a href="products8.php">Auto Repair Tools </a></li>
												<li><a href="products8.php">Antifreeze & Coolants </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Car Interiors</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Stereos </a></li>
												<li><a href="products8.php">Floor Mats </a></li>
												<li><a href="products8.php">Seat Covers</a></li>
												<li><a href="products8.php">Chargers </a></li>
												<li><a href="products8.php">Audio Finder </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Exterior Accessories </a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Wheel covers </a></li>
												<li><a href="products8.php">Car Lighting </a></li>
												<li><a href="products8.php">Polish & Waxes</a></li>
												<li><a href="products8.php">Cargo Management</a></li>
												<li><a href="products8.php">Car Decoration </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Car Care</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.php">Auto Tips & Advice </a></li>
												<li><a href="products8.php">Car Washes & Cleaners </a></li>
												<li><a href="products8.php">Car Wax & Polish</a></li>
												<li><a href="products8.php">Cleaning Tools</a></li>
												<li><a href="products8.php">Detailing Kits </a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li class="has-children">
									<a href="#">Books, Music & Movies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products9.php">All Products</a></li>
										<li class="has-children">
											<a href="#">Books</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li class="has-children"><a href="#">Exam books </a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products9.php">CAT/MAT/XAT</a></li>
														<li><a href="products9.php">Civil Services</a></li>
														<li><a href="products9.php">AFCAT</a></li>
														<li><a href="products9.php">New Releases</a></li>
													</ul>
												</li>
												<li><a href="products9.php">Academic Text </a></li>
												<li><a href="products9.php">Romance Books </a></li>
												<li><a href="products9.php">Journals </a></li>
												<li><a href="products9.php">Children's & Teen Books </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Music</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">New Releases </a></li>
												<li><a href="products9.php">Country Music </a></li>
												<li><a href="products9.php">Musical Instruments </a></li>
												<li><a href="products9.php">Collections</a></li>
												<li><a href="products9.php">Boxed Sets </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Music Combo</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Pop </a></li>
												<li><a href="products9.php">Preorders </a></li>
												<li><a href="products9.php">Album Songs</a></li>
												<li><a href="products9.php">Top 50 CDs </a></li>
												<li><a href="products9.php">Music DVDs </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Movies</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">New Releases </a></li>
												<li><a href="products9.php">Children & Family </a></li>
												<li><a href="products9.php">Action</a></li>
												<li><a href="products9.php">Classic Movies </a></li>
												<li><a href="products9.php">Bollywood Movies </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Movies Combo</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Hollywood Movies </a></li>
												<li><a href="products9.php">Digital Movies </a></li>
												<li><a href="products9.php">Boxed Sets</a></li>
												<li><a href="products9.php">Animated</a></li>
												<li><a href="products9.php">Adventure</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">TV Shows</a>
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.php">Serials</a></li>
												<li><a href="products9.php">Best Programs</a></li>
												<li><a href="products9.php">Celebrations</a></li>
												<li><a href="products9.php">Top Shows</a></li>
											</ul>
										</li>
									</ul><!-- .cd-secondary-dropdown -->
								</li>
								<li><a href="sitemap.php">Full Site Directory </a></li>
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.php"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header -->
	<!-- products -->
	<div class="products">
		<div class="container">
			<div class="col-md-9 product-w3ls-right">
				<!-- breadcrumbs -->
				<ol class="breadcrumb breadcrumb1">
					<li><a href="index.php">Home</a></li>
					<li class="active">Products</li>
				</ol>
				<div class="clearfix"> </div>
				<!-- //breadcrumbs -->
				<div class="product-top">
					<h4>Fashion Store</h4>
					<ul>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Low price</a></li>
								<li><a href="#">High price</a></li>
								<li><a href="#">Latest</a></li>
								<li><a href="#">Popular</a></li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Brand1</a></li>
								<li><a href="#">Brand2</a></li>
								<li><a href="#">Brand3</a></li>
								<li><a href="#">Brand4</a></li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="products-row">
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>18%<br>Off</h6></div>
							<a href="single.php"><img src="images/f7.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Leather Jacket</a></h5>
								<h6><del>$25</del> $20</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Leather Jacket" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Women Sandal</a></h5>
								<h6><del>$22</del> $20</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Women Sandal" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>30% <br> Off</h6></div>
							<a href="single.php"><img src="images/f3.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Jewellery</a></h5>
								<h6><del>$100</del> $70</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Jewellery"/>
									<input type="hidden" name="amount" value="70.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f5.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Jackets</a></h5>
								<h6><del>$32</del> $30</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Jackets"/>
									<input type="hidden" name="amount" value="30.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>25%<br>Off</h6></div>
							<a href="single.php"><img src="images/f4.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Party dress</a></h5>
								<h6><del>$20</del> $15</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Party dress" />
									<input type="hidden" name="amount" value="15.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f1.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">T Shirt</a></h5>
								<h6><del>$20</del> $10</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="T Shirt"/>
									<input type="hidden" name="amount" value="10.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f8.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Boys short</a></h5>
								<h6><del>$14</del> $12</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Boys short"/>
									<input type="hidden" name="amount" value="12.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Women Sandal</a></h5>
								<h6><del>$22</del> $20</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Women Sandal" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>30% <br> Off</h6></div>
							<a href="single.php"><img src="images/f3.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Jewellery</a></h5>
								<h6><del>$100</del> $70</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Jewellery"/>
									<input type="hidden" name="amount" value="70.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f2.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Women Sandal</a></h5>
								<h6><del>$22</del> $20</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Women Sandal" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f5.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Jackets</a></h5>
								<h6><del>$32</del> $30</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Jackets"/>
									<input type="hidden" name="amount" value="30.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>18%<br>Off</h6></div>
							<a href="single.php"><img src="images/f7.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Leather Jacket</a></h5>
								<h6><del>$25</del> $20</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Leather Jacket" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f8.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Boys short</a></h5>
								<h6><del>$14</del> $12</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Boys short"/>
									<input type="hidden" name="amount" value="12.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>25%<br>Off</h6></div>
							<a href="single.php"><img src="images/f4.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Party dress</a></h5>
								<h6><del>$20</del> $15</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Party dress" />
									<input type="hidden" name="amount" value="15.00" />
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>New</h6></div>
							<a href="single.php"><img src="images/f1.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">T Shirt</a></h5>
								<h6><del>$20</del> $10</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="T Shirt"/>
									<input type="hidden" name="amount" value="10.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6>30% <br> Off</h6></div>
							<a href="single.php"><img src="images/f3.png" class="img-responsive" alt="img"></a>
							<div class="agile-product-text">
								<h5><a href="single.php">Jewellery</a></h5>
								<h6><del>$100</del> $70</h6>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/>
									<input type="hidden" name="w3ls_item" value="Jewellery"/>
									<input type="hidden" name="amount" value="70.00"/>
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!-- add-products -->
				<div class="w3ls-add-grids w3agile-add-products">
					<a href="#">
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<!-- //add-products -->
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="slider-left">
						<h4>Filter By Price</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - $100 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100 - $200 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200 - $250  </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$250 - $300 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$350 - $400 </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$450 - $500  </label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>More</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Fashion Store</h4>
						<ul class="faq">
							<li class="item1"><a href="#">Clothing<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Ethnic wear</a></li>
									<li class="subitem1"><a href="#">Maternity wear</a></li>
									<li class="subitem1"><a href="#">Sports wear</a></li>
									<li class="subitem1"><a href="#">Inner & nightwear</a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Accessories<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Watches</a></li>
									<li class="subitem1"><a href="#">Eyewear</a></li>
									<li class="subitem1"><a href="#">Jewellery</a></li>
									<li class="subitem1"><a href="#">Footwear</a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Beauty<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
									<li class="subitem1"><a href="#">Face Care</a></li>
									<li class="subitem1"><a href="#">Perfumes & Deos</a></li>
									<li class="subitem1"><a href="#">Personal Grooming</a></li>
								</ul>
							</li>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {

								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');

								menu_ul.hide();

								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});

							});
						</script>
						<!-- script for tabs -->
					</div>
					<div class="sidebar-row">
						<h4>DISCOUNTS</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Upto - 10% (20)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70% - 60% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50% - 40% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (5)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						</div>
					</div>
					<div class="sidebar-row">
						<h4>Color</h4>
						<div class="row row1 scroll-pane">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>White</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pink</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Blue</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> Brown</label>
						</div>
					</div>
				</div>
				<div class="related-row">
					<h4>Related Searches</h4>
					<ul>
						<li><a href="products.php">Travel Bags</a></li>
						<li><a href="products.php">Casual Wear</a></li>
						<li><a href="products.php">Beauty Gift Hampers</a></li>
						<li><a href="products.php">T-Shirts</a></li>
						<li><a href="products.php">Blazers</a></li>
						<li><a href="products.php">Parkas</a></li>
						<li><a href="products.php">Shoes</a></li>
						<li><a href="products.php">Hair Care</a></li>
						<li><a href="products.php">Bath & Spa</a></li>
						<li><a href="products.php">Handbags</a></li>
					</ul>
				</div>
				<div class="related-row">
					<h4>YOU MAY ALSO LIKE</h4>
					<div class="galry-like">
						<a href="single.php"><img src="images/e1.png" class="img-responsive" alt="img"></a>
						<h4><a href="products.php">Audio speaker</a></h4>
						<h5>$100</h5>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			<!-- recommendations -->
			<div class="recommend">
				<h3 class="w3ls-title">Our Recommendations </h3>
				<script>
					$(document).ready(function() {
						$("#owl-demo5").owlCarousel({

						  autoPlay: 3000, //Set AutoPlay to 3 seconds

						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true

						});

					});
				</script>
				<div id="owl-demo5" class="owl-carousel">
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products1.php"><img src="images/f2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products1.php">Women Sandal</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Women Sandal" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<a href="products.php"><img src="images/e4.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products.php">Digital Camera</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Digital Camera"/>
									<input type="hidden" name="amount" value="100.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>New</h6></div>
							<a href="products4.php"><img src="images/s1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products4.php">Roller Skates</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$180</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Roller Skates"/>
									<input type="hidden" name="amount" value="180.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<a href="products1.php"><img src="images/f1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products1.php">T Shirt</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$10</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="T Shirt" />
									<input type="hidden" name="amount" value="10.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>New</h6></div>
							<a href="products6.php"><img src="images/p1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products6.php">Coffee Mug</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$14</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Coffee Mug" />
									<input type="hidden" name="amount" value="14.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>20% <br> Off</h6></div>
							<a href="products6.php"><img src="images/p2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products6.php">Teddy bear</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$20</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Teddy bear" />
									<input type="hidden" name="amount" value="20.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<a href="products4.php"><img src="images/s2.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products4.php">Football</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$70</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Football"/>
									<input type="hidden" name="amount" value="70.00"/>
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6>Sale</h6></div>
							<a href="products3.php"><img src="images/h1.png" alt="img"></a>
							<div class="view-caption agileits-w3layouts">
								<h4><a href="products3.php">Wall Clock</a></h4>
								<p>Lorem ipsum dolor sit amet consectetur</p>
								<h5>$80</h5>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="w3ls_item" value="Wall Clock" />
									<input type="hidden" name="amount" value="80.00" />
									<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //recommendations -->
		</div>
	</div>
	<!--//products-->
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li>
				</ul>
				<ul class="apps">
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div>
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>
				<form action="#" method="post">
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.php"><span>S</span>mart <i>Bazaar</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.php">About Us</a></li>
							<li><a href="marketplace.php">Marketplace</a></li>
							<li><a href="values.php">Core Values</a></li>
							<li><a href="privacy.php">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="login.php">Returns</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="sitemap.php">Site Map</a></li>
							<li><a href="login.php">Order Status</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<div class="copy-right">
		<div class="container">
			<p>© 2016 Smart bazaar . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
		</div>
	</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>
	<!-- //cart-js -->
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
