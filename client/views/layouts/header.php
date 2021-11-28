<header>
		<!-- header-top-area start -->
		<div class="header-top-area">
			<div class="container">
				<div class="row">
					<!-- header-top-left start -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="header-top-left">
							<div class="phone-number"> Call support free: <span>123 456  789</span></div>
						</div>
					</div>
					<!-- header-top-left end -->
					<!-- header-top-right start -->
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="header-top-right">
							<div class="lang-select">
								<ul>
									<li><a href="#"><img src="<?=CLIENT_ASSET ?>img/en.png" alt="" /></a></li>
								</ul>
							</div>
							<div class="top-menu">
								<ul>
									<li><a href="wishlist.html">Sản phẩm yêu thích</a></li>
									<li><a href="cart.html">Giỏ Hàng</a></li>
									<li>
										<?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != null):?>
							            <p><a href="<?= BASE_URL . 'my-user'?>"><?= $_SESSION['auth']['fullname'] ?></a> &nbsp<a href="<?= BASE_URL . 'dang-xuat'?>">Đăng xuất</a></p>
								        <?php else: ?>
								            <a href="<?= BASE_URL . 'dangnhap'?>">Đăng nhập</a>
								        <?php endif ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- header-top-right end -->
				</div>
			</div>
		</div>
		<!-- header-top-area end -->
		<!-- header-mid-area start -->
		<div class="header-mid-area">
			<div class="container">
				<div class="row">
					<!-- logo start -->
					<div class="col-lg-6 col-md-4 col-sm-12">
						<div class="logo">
							<a href="index.html"><img src="<?=CLIENT_ASSET ?>img/logo/logo.png" alt="" /></a>
						</div>
					</div>
					<!-- logo end -->
					<div class="col-lg-6 col-md-8 col-sm-12">
						<!-- cart-total start -->
						<div class="cart-total">
							<ul>
								<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">My cart: (2)</span></a>
									<div class="mini-cart-content">
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="<?=CLIENT_ASSET ?>img/product/total-cart.jpg" alt="" /></a>
												<span class="quantity">1</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><h4>Vestibulum suscipit</h4></a>
												<span>£165.00</span>
											</div>
											<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="clear"></div>
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="<?=CLIENT_ASSET ?>img/product/total-cart2.jpg" alt="" /></a>
												<span class="quantity">1</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><h4>Donec sodales mauris in</h4></a>
												<span>£50.00</span>
											</div>
											<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="cart-inner-bottom">
											<p class="total">Subtotal: <span class="amount">£215.00</span></p>
											<div class="clear"></div>
											<p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- cart-total end -->
						<!-- header-search start -->
						<div class="header-search">
							<form action="#">
								<input type="text" placeholder="Search product..." />
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- header-search end -->
					</div>
				</div>
			</div>
		</div>
		<!-- header-mid-area end -->
		<!-- mainmenu-area start -->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 d-none d-md-block">
						<div class="mainmenu">
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul class="sub-menu">
											<li><a href="index-2.html">Home 2</a></li>
											<li><a href="index-3.html">Home 3</a></li>
											<li><a href="index-4.html">Home 4</a></li>
										</ul>									
									</li>
									<li><a href="blog.html">Blog</a>
										<div class="mega-menu">
											<span>
												<a class="mega-menu-title" href="#"> Blog Pages </a>
												<a href="blog-archive.html">Archive</a>
												<a href="blog-category.html">Category</a>
												<a href="blog-tag.html">Tags </a>
												<a href="blog-author.html">Blog Author</a>
											</span>
											<span>
												<a class="mega-menu-title" href="#"> Post Formats </a>
												<a href="blog-post-img.html">Image format</a>
												<a href="blog-post-video.html">Video format</a>
												<a href="blog-post-audio.html">Audio format</a>
												<a href="blog-post-gallery.html">Gallery format</a>
											</span>
										</div>
									</li>
									<li><a href="shop.html">Shop</a>
										<div class="mega-menu">
											<span>
												<a class="mega-menu-title" href="#">Shop Pages</a>
												<a href="shop-list.html">List View </a>
												<a href="shop-category.html">Category</a>
												<a href="my-account.html">My Account</a>
												<a href="wishlist.html">Wishlist</a>
												<a href="cart.html">Cart </a>
												<a href="checkout.html">Checkout </a>
											</span>
											<span>
												<a class="mega-menu-title" href="#">Product Types</a>
												<a href="product-simple.html">Simple Product</a>
												<a href="#">Variables Product</a>
												<a href="#">Grouped Product</a>
												<a href="#">Downloadable</a>
												<a href="product-virtual.html">Virtual Product</a>
												<a href="#">External Product</a>
											</span>
										</div>									
									</li>
									<li><a href="#">Pages</a>
										<div class="mega-menu">
											<span>
												<a href="shop.html">Shop Grid View </a>
												<a href="shop-list.html">Shop List View </a>
												<a href="shop-category.html">Shop Category</a>
												<a href="my-account.html">My Account</a>
												<a href="wishlist.html">Wishlist</a>
												<a href="cart.html">Cart </a>
												<a href="checkout.html">Checkout </a>
											</span>
											<span>	
												<a href="product-simple.html">Simple Product</a>
												<a href="product-virtual.html">Virtual Product</a>
												<a href="about-us.html">About Us</a>
												<a href="contact.html">Contact</a>
												<a href="faq.html"> FAQS </a>
												<a href="sample-page.html"> Sample Page </a>
												<a href="404.html"> 404 Error </a>
											</span>
										</div>									
									</li>
									<li><a href="portfolio-3-column.html">Portfolio </a>
										<ul class="sub-menu">
											<li><a href="portfolio-2-column.html">2 Columns</a></li>
											<li><a href="portfolio-3-column.html">3 Columns</a></li>
											<li><a href="portfolio-4-column.html">4 Columns</a></li>
											<li><a href="single-portfolio.html">Single Project</a></li>
										</ul>									
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- mainmenu-area end -->
		<!-- mobile-menu-area start -->
		<div class="mobile-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index-2.html">Home 2</a></li>
											<li><a href="index-3.html">Home 3</a></li>
											<li><a href="index-4.html">Home 4</a></li>
										</ul>
									</li>
									<li><a href="blog.html">blog</a>
										<ul>
											<li><a href="#">Blog Pages</a>
												<ul>
													<li><a href="blog-archive.html">Archive</a></li>
													<li><a href="blog-category.html">Category</a></li>
													<li><a href="blog-tag.html">Tags </a></li>
													<li><a href="blog-author.html">Blog Author</a></li>
												</ul>
											</li>
											<li><a href="#">Post Formats</a>
												<ul>
													<li><a href="blog-post-img.html">Image format</a></li>
													<li><a href="blog-post-video.html">Video format</a></li>
													<li><a href="blog-post-audio.html">Audio format</a></li>
													<li><a href="blog-post-gallery.html">Gallery format</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop.html">Shop</a>
										<ul>
											<li><a href="#">Shop Pages</a>
												<ul>
													<li><a href="shop-list.html">List View </a></li>
													<li><a href="shop-category.html">Category</a></li>
													<li><a href="my-account.html">My Account</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="cart.html">Cart </a></li>
													<li><a href="checkout.html">Checkout </a></li>
												</ul>
											</li>
											<li><a href="#">Product Types</a>
												<ul>
													<li><a href="product-simple.html">Simple Product</a></li>
													<li><a href="#">Variables Product</a></li>
													<li><a href="#">Grouped Product</a></li>
													<li><a href="#">Downloadable</a></li>
													<li><a href="product-virtual.html">Virtual Product</a></li>
													<li><a href="#">External Product</a></li>
												</ul>
											</li>											
										</ul>
									</li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="shop.html">Shop Grid View </a></li>
											<li><a href="shop-list.html">Shop List View </a></li>
											<li><a href="shop-category.html">Shop Category</a></li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="wishlist.html">Wishlist</a></li>
											<li><a href="cart.html">Cart </a></li>
											<li><a href="checkout.html">Checkout </a></li>
											<li><a href="product-simple.html">Simple Product</a></li>
											<li><a href="product-virtual.html">Virtual Product</a></li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="faq.html"> FAQS </a></li>
											<li><a href="sample-page.html"> Sample Page </a></li>
											<li><a href="404.html"> 404 Error </a></li>
										</ul>
									</li>
									<li><a href="portfolio-3-column.html">Portfolio</a>
										<ul>
											<li><a href="portfolio-2-column.html">2 Columns</a></li>
											<li><a href="portfolio-3-column.html">3 Columns</a></li>
											<li><a href="portfolio-4-column.html">4 Columns</a></li>
											<li><a href="single-portfolio.html">Single Project</a></li>
										</ul>									
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- mobile-menu-area end -->
	</header>