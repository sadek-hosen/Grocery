<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery store</title>

	<link rel="icon" type="image/icon" href="image/favicon.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

<meta name='viewport' content="width=device-width, initial-scale=1.0">



<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>
<body>


<!-- header section -->
<header class="header">
	<a href="#" class="logo"> <i class="fa fa-shopping-basket"></i> grocery </a>


<nav class="navbar">
	<a href="#Home">Home</a>
	<a href="#Features">Features</a>
	<a href="#Products">Products</a>
	<a href="#Catagories">Catagories</a>
	<a href="#Review">Review</a>
	<a href="#Blogs">Blogs</a>

</nav>

<div class="icons">
	<div class="fa fa-bars" id="menu-btn"></div>
	<div class="fa fa-search" id="search-btn"></div>
	<div class="fa fa-shopping-cart" id="cart-btn"></div>
	<div class="fa fa-user" id="login-btn"></div>
</div>

<form class="search-form">
	<input type="search" id="search-box" placeholder="Search Here.....">
	<label for="search-box" class="fa fa-search"></label>
</form>



<div class="shopping-cart">
	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-1.png">
		<div class="content">
			<h3>watermelon</h3>
			<span class="price">$250/-</span>
			<span class="quantity">Qty : 1</span>
		</div>
	</div>


	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-2.png">
		<div class="content">
			<h3>onion</h3>
			<span class="price">$120/-</span>
			<span class="quantity">Qty : 1</span>
		</div>
	</div>

	<div class="box">
		<i class="fa fa-trash"></i>
		<img src="image/cart-img-3.png">
		<div class="content">
			<h3>chicken</h3>
			<span class="price">$215/-</span>
			<span class="quantity">Qty : 1</span>
		</div>
	</div>



<div class="total"> total : $585/- </div>
<a href="#" class="btn">Checkout</a>

</div>

<form action="login.php" class="login-form" method="POST">
	<h3>login now</h3>
	<input type="email" placeholder="your email" class="box" name="femail">
	<input type="password" placeholder="your password" class="box" name="fpass">

<p>Forget Your Password <a href="#"> Click Here</a></p>
<p>Don't Have an Account <a href="#"> Create Now </a></p>

	<input type="submit" value="Login Now" class="btn">
</form>


</header>



<section class="home" id="home">
	<div class="content">
		<h3>Fresh And <span>Organic</span> Products For You</h3>
		<p>This Website Is Designed By Towhid</p>

		<a href="#" class="btn">shop now</a>
	</div>	
</section>





<section class="features" id="features">
	<h1 class="heading"> our <span>features</span> </h1>

	<div class="box-container">
		<div class="box">
			<img src="image/feature-img-1.png">
			<h3>fresh and organic</h3>

			<p>Lorem, Ispum Dolor Sit Amet Consectetur Adipisicing Elit.Deserunt,Earum!</p>

			<a href="#" class="btn">read more</a>
		</div>

				<div class="box">
			<img src="image/feature-img-2.png">
			<h3>fresh and organic</h3>
			
			<p>Lorem, Ispum Dolor Sit Amet Consectetur Adipisicing Elit.Deserunt,Earum!</p>

			<a href="#" class="btn">read more</a>
		</div>

				<div class="box">
			<img src="image/feature-img-3.png">
			<h3>fresh and organic</h3>
			
			<p>Lorem, Ispum Dolor Sit Amet Consectetur Adipisicing Elit.Deserunt,Earum!</p>

			<a href="#" class="btn">read more</a>
		</div>
	</div>
</section>



<!-- our product section -->
<section class="products" id="Products">
	<h1 class="heading"> Our <span>Products</span></h1>

	<div class="swiper product-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-1.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>
			</div>

			<div class="swiper-slide box">
				<img src="image/product-2.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>


			<div class="swiper-slide box">
				<img src="image/product-3.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>

			<div class="swiper-slide box">
				<img src="image/product-4.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>
		</div>
	</div>



	<div class="swiper  product-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="image/product-4.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>

			</div>

			<div class="swiper-slide box">
				<img src="image/product-5.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>


			<div class="swiper-slide box">
				<img src="image/product-6.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>

			<div class="swiper-slide box">
				<img src="image/product-7.png">
				<h1>Freh Orange</h1>
				<div class="price"> $200/- - 250/-</div>
				<div class="stars">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half"></i>
				</div>
				<a href="order.php" class="btn">Order</a>


			</div>
		</div>
	</div>
</section>



<!-- our product section -->




<!-- our product section -->
<!-- our categories section -->
<section class="categories" id="categories">
	<h1 class="heading"> product <span>categories</span></h1>

	<div class="box-container">
		<div class="box">
			<img src="image/cat-1.png">
			<h3>Vegetables</h3>
			<p>Upto 45% Off</p>
			<a href="#" class="btn">shop now</a>
		</div>

				<div class="box">
			<img src="image/cat-2.png">
			<h3>Fresh Fruits</h3>
			<p>Upto 45% Off</p>
			<a href="#" class="btn">shop now</a>
		</div>

				<div class="box">
			<img src="image/cat-3.png">
			<h3>Daily Products</h3>
			<p>Upto 45% Off</p>
			<a href="#" class="btn">shop now</a>
		</div>

			<div class="box">
			<img src="image/cat-4.png">
			<h3>Fresh Meat</h3>
			<p>Upto 45% Off</p>
			<a href="#" class="btn">shop now</a>
		</div>
	</div>
</section>
<!-- our categories section -->



<!-- our Review section -->
<section class="review" id="review">
		<h1 class="heading"> Customer's <span>Review</span></h1>
		<div class="swiper review-slider">
			<div class="swiper-wrapper">
				
				<div class="swiper-slide box">
					<img src="image/pic-1.png">

					<h3>Towhid</h3>

					<div class="stars">
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star-half"></i>
				    </div>
				</div>

				<div class="swiper-slide box">
					<img src="image/pic-2.png">

					<h3>Arpi</h3>

					<div class="stars">
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star-half"></i>
				    </div>
				</div>

				<div class="swiper-slide box">
					<img src="image/pic-3.png">

					<h3>Sadek</h3>

					<div class="stars">
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star-half"></i>
				    </div>
				</div>

				<div class="swiper-slide box">
					<img src="image/pic-4.png">

					<h3>Akash</h3>

					<div class="stars">
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star"></i>
					  <i class="fa fa-star-half"></i>
				    </div>
				</div>
			</div>
		</div>

	
</section>

<!-- our Review section -->

<!-- Blog Section-->

<section class="blogs" id="blogs">
	<h1 class="heading"> Our <span>Blogs</span></h1>

	<div class="box-container">
		<div class="box">
			<img src="image/blog-1.jpg">
			<div class="content">
				<div class="icons">
					<a href="#"><i class="fa fa-user"></i> Towhid </a>
					<a href="#"><i class="fa fa-calendar"></i> 24th May,2024 </a>
				</div>
				<h3>Fresh And Organic Vegetables And Fruits</h3>
				<p></p>
				<a href="#" class="btn">Read More</a>
			</div>
		</div>

		<div class="box">
			<img src="image/blog-2.jpg">
			<div class="content">
				<div class="icons">
					<a href="#"><i class="fa fa-user"></i> Towhid </a>
					<a href="#"><i class="fa fa-calendar"></i> 24th May,2024 </a>
				</div>
				<h3>Fresh And Organic Vegetables And Fruits</h3>
				<p></p>
				<a href="#" class="btn">Read More</a>
			</div>
		</div>

		<div class="box">
			<img src="image/blog-3.jpg">
			<div class="content">
				<div class="icons">
					<a href="#"><i class="fa fa-user"></i> Towhid </a>
					<a href="#"><i class="fa fa-calendar"></i> 24th May,2024 </a>
				</div>
				<h3>Fresh And Organic Vegetables And Fruits</h3>
				<p></p>
				<a href="#" class="btn">Read More</a>
			</div>
		</div>
	</div>
</section>

<!-- Blog Section-->

<!--footer-->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>Grocery <i class="fa fa-shopping-basket"></i></h3>
			<p>Feel free to follow us on our social media handlers all the links are given below.</p>

			<div class="share">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-linkedin"></a>
			</div>
		</div>

		<div class="box">
			<h3>Contact Info </h3>
			<a href="#" class="links"><i class="fa fa-phone"></i> +880 1824-273304</a>
			<a href="#" class="links"><i class="fa fa-phone"></i> +880 1309-798807</a>
			<a href="#" class="links"><i class="fa fa-envelop"></i> grocery@gmail.com</a>
			<a href="#" class="links"><i class="fa fa-marker"></i> Patiya, Chattogram</a>
		</div>

		<div class="box">
			<h3> Quick Links </h3>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Home</a>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Features</a>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Products</a>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Categories</a>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Review</a>
			<a href="#" class="links"><i class="fa fa-arrow-right"></i> Blogs</a>
		</div>

		<div class="box">
			<h3> Newsletter </h3>
			<p>Subscribe For Latest Update</p>
			<input type="email" placeholder="Your Email" class="email">
			<input type="submit" value="Subscribe" class="btn">
			<img src="image/payment.png" class="payment-img">
		</div>


		

	</div>

 

<div class="credit">Created By <span>Akatsuki</span> | All right reserver</div>




</section>
<!--footer-->


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>


</body>
</html>