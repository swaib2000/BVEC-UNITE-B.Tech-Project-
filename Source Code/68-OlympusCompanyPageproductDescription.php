<!DOCTYPE html>
<html lang="en">
<head>

	<title>Company Page - Product Description</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

</head>
<body class="body-bg-white">


<!-- Preloader -->

<div id="hellopreloader">
	<div class="preloader">
		<svg width="45" height="45" stroke="#fff">
			<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="6" stroke="none">
					<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22"/>
					<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0"/>
					<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0"/>
				</circle>
				<circle cx="22" cy="22" r="8">
					<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6"/>
				</circle>
			</g>
		</svg>

		<div class="text">Loading ...</div>
	</div>
</div>

<!-- ... end Preloader -->

<!-- Stunning header -->

<div class="stunning-header bg-primary-opacity">

	
	<!-- Header Standard Landing  -->
	
	<div class="header--standard header--standard-landing" id="header--standard">
		<div class="container">
			<div class="header--standard-wrap">
	
				<a href="#" class="logo">
					<div class="img-wrap">
						<img loading="lazy" src="img/logo.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="34" height="34">
						<img loading="lazy" src="img/logo-colored-small.webp" width="34" height="34" alt="<?php echo $_SESSION['project_title']; ?>" class="logo-colored">
					</div>
					<div class="title-block">
						<h6 class="logo-title">olympus</h6>
						<div class="sub-title">SOCIAL NETWORK</div>
					</div>
				</a>
	
				<a href="#" class="open-responsive-menu js-open-responsive-menu">
					<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
				</a>
	
				<div class="nav nav-pills nav1 header-menu">
					<div class="mCustomScrollbar">
						<ul>
							<li class="nav-item">
								<a href="#" class="nav-link">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-bs-hover="dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Profile</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Profile Page</a>
									<a class="dropdown-item" href="#">Newsfeed</a>
									<a class="dropdown-item" href="#">Post Versions</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-has-megamenu">
								<a href="#" class="nav-link dropdown-toggle" data-bs-hover="dropdown" data-bs-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false" tabindex='1'>Forums</a>
								<div class="dropdown-menu megamenu">
									<div class="row">
										<div class="col col-sm-3">
											<h6 class="column-tittle">Main Links</h6>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-blue-light">new</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">BuddyPress</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page<span class="tag-label bg-primary">HOT!</span></a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Corporate</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
										<div class="col col-sm-3">
											<h6 class="column-tittle">Forums</h6>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
											<a class="dropdown-item" href="#">Profile Page</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Terms & Conditions</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Events</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Privacy Policy</a>
							</li>
							<li class="close-responsive-menu js-close-responsive-menu">
								<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
							</li>
							<li class="nav-item js-expanded-menu">
								<a href="#" class="nav-link">
									<svg class="olymp-menu-icon"><use xlink:href="#olymp-menu-icon"></use></svg>
									<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
								</a>
							</li>
							<li class="shoping-cart more">
								<a href="#" class="nav-link">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
									<span class="count-product">2</span>
								</a>
								<div class="more-dropdown shop-popup-cart">
									<ul>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img loading="lazy" src="img/product1.webp" alt="product" width="35" height="28">
											</div>
											<div class="product-content">
												<h6 class="title">White Enamel Mug</h6>
												<ul class="rait-stars">
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
	
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
													</li>
												</ul>
												<div class="counter">x2</div>
											</div>
											<div class="product-price">$20</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
											</div>
										</li>
										<li class="cart-product-item">
											<div class="product-thumb">
												<img loading="lazy" src="img/product2.webp" alt="product" width="28" height="45">
											</div>
											<div class="product-content">
												<h6 class="title">Olympus Orange Shirt</h6>
												<ul class="rait-stars">
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
	
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
													</li>
													<li>
														<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
													</li>
												</ul>
												<div class="counter">x1</div>
											</div>
											<div class="product-price">$40</div>
											<div class="more">
												<svg class="olymp-little-delete"><use xlink:href="#olymp-little-delete"></use></svg>
											</div>
										</li>
									</ul>
	
									<div class="cart-subtotal">Cart Subtotal:<span>$80</span></div>
	
									<div class="cart-btn-wrap">
										<a href="#" class="btn btn-primary btn-sm">Go to Your Cart</a>
										<a href="#" class="btn btn-purple btn-sm">Go to Checkout</a>
									</div>
								</div>
							</li>
	
							<li class="menu-search-item">
								<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#main-popup-search">
									<svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Header Standard Landing  -->
	<div class="header-spacer--standard"></div>

	<div class="stunning-header-content">
		<h1 class="stunning-header-title">Merchandise</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs-item">
				<a href="#">Home</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item">
				<a href="#">Shop Grid</a>
				<span class="icon breadcrumbs-custom">/</span>
			</li>
			<li class="breadcrumbs-item active">
				<span>White Enamel Mug</span>
			</li>
		</ul>
	</div>

	<div class="content-bg-wrap stunning-header-bg1"></div>
</div>

<!-- End Stunning header -->


<section>

	
	<!-- Shop Product Detail -->
	
	<div class="shop-product-detail">
		<div class="container">
			<div class="row">
				<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="thumbs-wrap">
						<div class="small-thumbs-wrap js-zoom-gallery">
							<a href="img/product-small1.webp" class="small-thumb">
								<img loading="lazy" src="img/product-small1.webp" width="61" height="50" alt="product">
							</a>
							<a href="img/product-small2.webp" class="small-thumb">
								<img loading="lazy" src="img/product-small2.webp" width="80" height="56" alt="product">
							</a>
						</div>
	
						<div class="shop-product-detail-thumb">
							<img class="main-img" alt="product" src="img/product3.webp" width="420" height="301">
						</div>
					</div>
				</div>
				<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="shop-product-detail-content">
						<div class="main-content-wrap">
							<div class="block-title">
								<a href="#" class="product-category">COFFEE MUGS</a>
								<h2 class="title bold">White Enamel Mug</h2>
								<ul class="rait-stars">
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
	
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
									</li>
								</ul>
							</div>
	
							<div class="block-price">
								<div class="product-price">$20</div>
							</div>
						</div>
	
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore eter
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
							ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit  voluptate velit
							esse cillum dolore.
						</p>
	
						<div class="inputs-wrap">
	
							<div class="form-group label-floating quantity">
								<label class="control-label">Quantity</label>
								<a href="#" class="quantity-minus">&#8744;</a>
								<input title="Qty" class="form-control" value="2" type="text">
								<a href="#" class="quantity-plus">&#8743;</a>
							</div>
	
							<div class="form-group label-floating is-select">
								<label class="control-label">Select Size</label>
								<select class="form-select">
									<option value="SM">Small Mug (2,5’’ High)</option>
									<option value="BI">Big Mug (3,5’’ High)</option>
								</select>
							</div>
	
						</div>
	
						<a href="#" class="btn btn-blue btn-md with--icon">
							<svg class="olymp-shopping-bag-icon icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
							<div class="text">
								<span class="title">Add to Cart</span>
							</div>
						</a>
	
						<ul class="tags">
							<li>
								Tags:
							</li>
							<li>
								<a class="tags-item" href="#">Enamel,</a>
							</li>
							<li>
								<a class="tags-item" href="#">Coffee,</a>
							</li>
							<li>
								<a class="tags-item" href="#">Mugs,</a>
							</li>
							<li>
								<a class="tags-item" href="#">White</a>
							</li>
						</ul>
	
						<div class="article-number">
							SKU:<span>ASF55GX</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- ... end Shop Product Detail -->

</section>

<section class="medium-padding120">
	<div class="container">
		<div class="row">
			<div class="col col-xl-8 m-auto col-lg-8 col-md-12 col-sm-12 col-12">

				
				<!-- Product Description -->
				
				<div class="product-description">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="tab" href="#additional" role="tab">
								Additional Description
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="tab" href="#rewievs" role="tab">
								Customer Reviews
								<span class="total-topic">3</span>
							</a>
						</li>
					</ul>
				
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active align-center" id="additional" role="tabpanel">
							<h2 class="title">The Best Camping Mug!</h2>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
								sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
								voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
								laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
								qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
								fugiat quo voluptas nulla pariatur?
							</p>
				
							<p>
								Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
								nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
								deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
								voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
								inventore veritatis et quasi hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
								voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
								dolores eos qui ratione voluptatem sequi nesciunt Sed ut perspiciatis unde omnis
								iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
								eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
								explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
								quia consequuntur magni dolores.
							</p>
						</div>
				
						<div class="tab-pane fade" id="rewievs" role="tabpanel">
				
							<div class="comments-title-wrap">
								<div class="block-title">
									<h2 class="title">3 Reviews</h2>
									<ul class="rait-stars">
										<li>
											<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
										</li>
										<li>
											<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
										</li>
				
										<li>
											<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
										</li>
										<li>
											<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
										</li>
										<li>
											<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
										</li>
										<li class="numerical-rating">4.3 / 5</li>
									</ul>
								</div>
				
								<a href="#" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#popup-write-rewiev">Write a Review</a>
							</div>
				
							<ul class="comments__list-review">
				
								<li class="comments__item-review">
				
									<div class="comment-entry comment comments__article">
				
										<div class="comments__body ovh">
				
											<h5 class="title">Really Great for Camping</h5>
				
											<ul class="rait-stars">
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
				
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
												</li>
				
											</ul>
				
											<div class="comment-content comment">
												Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
												fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
												sequi nesciunt. Sed ut perspiciatis unde omnis iste natus error sit
												voluptatem accusantium ntium, totam rem aperiam, eaque ipsa quae ab illo
												inventore veritatis et quasi architecto.
											</div>
				
											<header class="comment-meta comments__header-review">
				
				
												<time class="published comments__time-review" datetime="2017-10-02 12:00:00">4 hours ago by</time>
				
				
												<cite class="fn url comments__author-review">
													<a href="#" rel="external" class=" ">Nicholas Grissom</a>
												</cite>
				
											</header>
				
				
										</div>
				
									</div>
								</li>
				
								<li class="comments__item-review">
				
									<div class="comment-entry comment comments__article">
				
										<div class="comments__body ovh">
				
											<h5 class="title">The Best Mug I’ve ever Bought!!</h5>
				
											<ul class="rait-stars">
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
				
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
				
											</ul>
				
											<div class="comment-content comment">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor labore eter dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
											</div>
				
											<header class="comment-meta comments__header-review">
				
				
												<time class="published comments__time-review" datetime="2017-10-02 12:00:00">12 hours ago by</time>
				
				
												<cite class="fn url comments__author-review">
													<a href="#" rel="external" class=" ">Marina Valentine</a>
												</cite>
				
											</header>
				
				
										</div>
				
									</div>
								</li>
				
								<li class="comments__item-review">
				
									<div class="comment-entry comment comments__article">
				
										<div class="comments__body ovh">
				
											<h5 class="title">Really Cool Design</h5>
				
											<ul class="rait-stars">
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
				
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
												</li>
												<li>
													<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
												</li>
				
											</ul>
				
											<div class="comment-content comment">
												Duis aute irure dolor in reprehenderit  voluptate velit esse cillum
												dolore. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
												aut fugit, sed quia consequuntur magni dolores eos qui ratione.
											</div>
				
											<header class="comment-meta comments__header-review">
				
				
												<time class="published comments__time-review" datetime="2017-10-02 12:00:00">2 days ago by</time>
				
				
												<cite class="fn url comments__author-review">
													<a href="#" rel="external">Jack Stevens</a>
												</cite>
				
											</header>
				
				
										</div>
				
									</div>
								</li>
				
							</ul>
						</div>
					</div>
				
				</div>
				
				<!-- ... end Product Description -->

			</div>
		</div>
	</div>
</section>


<section class="medium-padding100">
	<div class="container">
		<div class="related-products">
			<div class="row">
				<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="crumina-module crumina-heading with-title-decoration">
						<h5 class="heading-title">Related Products</h5>
					</div>
				</div>
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

					
					<!-- Product Item -->
					
					<div class="shop-product-item">
						<div class="product-thumb">
							<img loading="lazy" src="img/shop-product1.webp" alt="product" width="230" height="218">
						</div>
						<div class="product-content">
							<div class="block-title">
								<a href="#" class="product-category">COFFEE MUGS</a>
								<a href="#" class="h5 title">White Enamel Mug</a>
							</div>
							<div class="block-price">
								<ul class="rait-stars">
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
					
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
									</li>
								</ul>
								<div class="product-price">$20</div>
					
								<a href="#" class="in-cart">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
								</a>
							</div>
						</div>
					</div>
					
					<!-- ... end Product Item -->

				</div>
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

					
					<!-- Product Item -->
					
					<div class="shop-product-item">
						<div class="product-thumb">
							<img loading="lazy" src="img/shop-product2.webp" alt="product" width="240" height="336">
						</div>
						<div class="product-content">
							<div class="block-title">
								<a href="#" class="product-category">CLOTHING</a>
								<a href="#" class="h5 title">Olympus White Shirt</a>
							</div>
							<div class="block-price">
								<ul class="rait-stars">
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
					
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
									</li>
								</ul>
								<div class="product-price">$20</div>
					
								<a href="#" class="in-cart">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
								</a>
							</div>
						</div>
					</div>
					
					<!-- ... end Product Item -->

				</div>
				<div class="col col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

					
					<!-- Product Item -->
					
					<div class="shop-product-item">
						<div class="product-thumb">
							<img loading="lazy" src="img/shop-product3.webp" alt="product" width="212" height="313">
						</div>
						<div class="product-content">
							<div class="block-title">
								<a href="#" class="product-category">ACCESORIES</a>
								<a href="#" class="h5 title">Ringed Notepad</a>
							</div>
							<div class="block-price">
								<ul class="rait-stars">
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
					
									<li>
										<svg class="star-icon c-primary" width="10" height="10"><use xlink:href="#olymp-star-full"></use></svg>
									</li>
									<li>
										<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
									</li>
									<li>
										<svg class="star-icon" width="10" height="10"><use xlink:href="#olymp-star-null"></use></svg>
									</li>
								</ul>
								<div class="product-price">$16</div>
					
								<a href="#" class="in-cart">
									<svg class="olymp-shopping-bag-icon"><use xlink:href="#olymp-shopping-bag-icon"></use></svg>
								</a>
							</div>
						</div>
					</div>
					
					<!-- ... end Product Item -->

				</div>
			</div>
		</div>
	</div>
</section>



<!-- Section Call To Action Animation -->

<section class="align-right pt160 pb80 section-move-bg call-to-action-animation">
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12">
				<a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#registration-login-form-popup">Start Making Friends Now!</a>
			</div>
		</div>
	</div>
	<img class="first-img" alt="guy" src="img/guy.webp" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" width="297" height="254">
	<img class="second-img" alt="rocket" src="img/rocket1.webp" data-aos="fade-up" data-aos-delay="500" data-aos-duration="500">
	<div class="content-bg-wrap bg-section1"></div>
</section>

<!-- ... end Section Call To Action Animation -->

<!-- Window-popup Restore Password -->

<div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password" aria-hidden="true">
	<div class="modal-dialog window-popup restore-password-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Restore your Password</h6>
			</div>

			<div class="modal-body">
				<form  method="get">
					<p>Enter your email and click the send code button. You’ll receive a code in your email. Please use that
						code below to change the old password for a new one.
					</p>
					<div class="form-group label-floating">
						<label class="control-label">Your Email</label>
						<input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
					</div>
					<button class="btn btn-purple btn-lg full-width">Send me the Code</button>
					<div class="form-group label-floating">
						<label class="control-label">Enter the Code</label>
						<input class="form-control" placeholder="" type="text" value="">
					</div>
					<div class="form-group label-floating">
						<label class="control-label">Your New Password</label>
						<input class="form-control" placeholder="" type="password" value="olympus">
					</div>
					<button class="btn btn-primary btn-lg full-width">Change your Password!</button>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Restore Password -->


<div class="modal fade" id="registration-login-form-popup" tabindex="-1" role="dialog" aria-labelledby="registration-login-form-popup" aria-hidden="true">
	<div class="modal-dialog window-popup registration-login-form-popup" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<div class="registration-login-form">

					<!-- Nav tabs -->
					<ul class="nav nav-tabs" id="registration-form-tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
								<svg class="olymp-login-icon"><use xlink:href="#olymp-login-icon"></use></svg>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
								<svg class="olymp-register-icon"><use xlink:href="#olymp-register-icon"></use></svg>
							</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content" id="registration-form-tabs-content">
						<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
							<div class="title h6">Register to Olympus</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">First Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Last Name</label>
											<input class="form-control" placeholder="" type="text">
										</div>
									</div>
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="form-group date-time-picker label-floating">
											<label class="control-label">Your Birthday</label>
											<input name="datetimepicker" value="10/24/1984" />
											<span class="input-group-addon">
														<svg class="olymp-calendar-icon"><use xlink:href="#olymp-calendar-icon"></use></svg>
													</span>
										</div>

										<div class="form-group label-floating is-select">
											<label class="control-label">Your Gender</label>
											<select class="form-select">
												<option value="MA">Male</option>
												<option value="FE">Female</option>
											</select>
										</div>

										<div class="remember">
											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													I accept the <a href="#">Terms and Conditions</a> of the website
												</label>
											</div>
										</div>

										<a href="#" class="btn btn-purple btn-lg full-width">Complete Registration!</a>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="title h6">Login to your Account</div>
							<form class="content">
								<div class="row">
									<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group label-floating">
											<label class="control-label">Your Email</label>
											<input class="form-control" placeholder="" type="email">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Your Password</label>
											<input class="form-control" placeholder="" type="password">
										</div>

										<div class="remember">

											<div class="checkbox">
												<label>
													<input name="optionsCheckboxes" type="checkbox">
													Remember Me
												</label>
											</div>
											<a href="#" class="forgot" data-bs-toggle="modal" data-bs-target="#restore-password">Forgot my Password</a>
										</div>

										<a href="#" class="btn btn-lg btn-primary full-width">Login</a>

										<div class="or"></div>

										<a href="#" class="btn btn-lg bg-facebook full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-facebook-icon"></use></svg>Login with Facebook</a>

										<a href="#" class="btn btn-lg bg-twitter full-width btn-icon-left"><svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>Login with Twitter</a>


										<p>Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Footer Full Width -->

<div class="footer footer-full-width" id="footer">
	<div class="container">
		<div class="row">
			<div class="col col-lg-4 col-md-4 col-sm-12 col-12">

				
				<!-- Widget About -->
				
				<div class="widget w-about">
				
					<a href="02-ProfilePage.php" class="logo">
						<div class="img-wrap">
							<img loading="lazy" src="img/logo-colored.webp" alt="<?php echo $_SESSION['project_title']; ?>" width="60" height="60">
						</div>
						<div class="title-block">
							<h6 class="logo-title">olympus</h6>
							<div class="sub-title">SOCIAL NETWORK</div>
						</div>
					</a>
					<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
					<ul class="socials">
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-facebook-square"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-twitter-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-youtube-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-google-plus-g-icon"></use></svg>
							</a>
						</li>
						<li>
							<a href="#">
								<svg width="16" height="16"><use xlink:href="#olymp-instagram-icon"></use></svg>
							</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget About -->

			</div>

			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<!-- Widget List -->
				
				<div class="widget w-list">
					<h6 class="title">Main Links</h6>
					<ul>
						<li>
							<a href="#">Landing</a>
						</li>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Events</a>
						</li>
					</ul>
				</div>
				
				<!-- ... end Widget List -->

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Your Profile</h6>
					<ul>
						<li>
							<a href="#">Main Page</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Friends</a>
						</li>
						<li>
							<a href="#">Photos</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Features</h6>
					<ul>
						<li>
							<a href="#">Newsfeed</a>
						</li>
						<li>
							<a href="#">Post Versions</a>
						</li>
						<li>
							<a href="#">Messages</a>
						</li>
						<li>
							<a href="#">Friend Groups</a>
						</li>
					</ul>
				</div>

			</div>
			<div class="col col-lg-2 col-md-4 col-sm-12 col-12">

				
				<div class="widget w-list">
					<h6 class="title">Olympus</h6>
					<ul>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="#">Terms & Conditions</a>
						</li>
						<li>
							<a href="#">Forums</a>
						</li>
						<li>
							<a href="#">Statistics</a>
						</li>
					</ul>
				</div>

			</div>

			<div class="col col-lg-12 col-md-12 col-sm-12 col-12">

				
				<!-- SUB Footer -->
				
				<div class="sub-footer-copyright">
					<span>
						Copyright <a href="index.php">Olympus Buddypress + WP</a> All Rights Reserved 2017
					</span>
				</div>
				
				<!-- ... end SUB Footer -->

			</div>
		</div>
	</div>
</div>

<!-- ... end Footer Full Width -->



<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
			<div class="more">
				<svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
				<svg class="olymp-little-delete js-chat-open"><use xlink:href="#olymp-little-delete"></use></svg>
			</div>
		</div>
		<div class="modal-body">
			<div class="mCustomScrollbar">
				<ul class="notification-list chat-message chat-message-field">
					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Don’t worry Mathilda!</span>
							<span class="chat-message-item">I already bought everything</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
						</div>
					</li>

					<li>
						<div class="author-thumb">
							<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
						</div>
						<div class="notification-event">
							<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
						</div>
					</li>
				</ul>
			</div>

			<form class="need-validation">

		<div class="form-group">
			<textarea class="form-control" placeholder="Press enter to post..."></textarea>
			<div class="add-options-message">
				<a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
							</a>
						</li>
						<li>
							<a href="#">
								<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</form>
		</div>
	</div>

</div>

<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


<!-- Popup Write Rewiev -->

<div class="modal fade" id="popup-write-rewiev" tabindex="-1" role="dialog" aria-labelledby="popup-write-rewiev" aria-hidden="true">
	<div class="modal-dialog window-popup popup-write-rewiev" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Write a Review</h6>
			</div>

			<div class="modal-body">
				<form class="form-write-rewiev">
			<div class="row">
				<div class="col col-xl-6 col-lg-6 col-md-6">
					<div class="form-group label-floating">
						<label class="control-label">First Name</label>
						<input class="form-control" placeholder="" type="text" value="Marina">
					</div>
				</div>
				<div class="col col-xl-6 col-lg-6 col-md-6">
					<div class="form-group label-floating">
						<label class="control-label">Last Name</label>
						<input class="form-control" placeholder="" type="text" value="Valentine">
					</div>
				</div>
				<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Email</label>
						<input class="form-control" placeholder="" type="email" value="mvalentine@yourmail.com">
					</div>

					<div class="form-group label-floating is-select">
						<label class="control-label">Select Rating</label>
						<select class="form-select">
							<option value="5">5 Stars Rating</option>
							<option value="4">4 Stars Rating</option>
							<option value="3">3 Stars Rating</option>
							<option value="2">2 Stars Rating</option>
							<option value="1">1 Stars Rating</option>
						</select>
					</div>

					<div class="form-group label-floating">
						<label class="control-label">Review Title</label>
						<input class="form-control" placeholder="" type="text" value="The Best Mug I’ve Ever Bought!!">
					</div>

					<div class="form-group">
						<textarea class="form-control" placeholder="Write a little description about the review">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore eter dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
					</div>

					<a href="#" class="btn btn-primary btn-lg full-width">Post your Review</a>
				</div>
			</div>
		</form>
			</div>

		</div>
	</div>
</div>

<!-- ... end Popup Write Rewiev -->

<!-- Window Popup Main Search -->

<div class="modal fade" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<form class="form-inline search-form" method="post">
					<div class="form-group label-floating">
						<label class="control-label">What are you looking for?</label>
						<input class="form-control bg-white" placeholder="" type="text" value="">
					</div>

					<button class="btn btn-purple btn-lg">Search</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window Popup Main Search -->

<a class="back-to-top" href="#">
	<svg class="back-icon" width="14" height="18"><use xlink:href="#olymp-back-to-top"></use></svg>
</a>


<!-- JS Scripts -->
<script src="js/jQuery/jquery-3.5.1.min.js"></script>

<script src="js/libs/jquery.mousewheel.min.js"></script>
<script src="js/libs/perfect-scrollbar.min.js"></script>
<script src="js/libs/imagesloaded.pkgd.min.js"></script>
<script src="js/libs/material.min.js"></script>
<script src="js/libs/selectize.min.js"></script>
<script src="js/libs/moment.min.js"></script>
<script src="js/libs/daterangepicker.min.js"></script>
<script src="js/libs/isotope.pkgd.min.js"></script>
<script src="js/libs/ajax-pagination.min.js"></script>
<script src="js/libs/jquery.magnific-popup.min.js"></script>
<script src="js/libs/aos.min.js"></script>

<script src="js/main.js"></script>
<script src="js/libs-init/libs-init.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- SVG icons loader -->
<script src="js/svg-loader.js"></script>
<!-- /SVG icons loader -->

</body>
</html>