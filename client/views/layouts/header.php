<header>
	<!-- header-top-area start -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<!-- header-top-left start -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="header-top-left">
						<div class="phone-number"> Call support free: <span>123 456 789</span></div>

					</div>
				</div>
				<!-- header-top-left end -->
				<!-- header-top-right start -->
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="header-top-right">
						<div class="top-menu">
							<ul>
								<li><a href="<?= BASE_URL . 'favorite' ?>">Sản phẩm yêu thích</a></li>
								<li><a href="cart.html">Giỏ Hàng</a></li>
								<li>
									<?php if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) : ?>
										<p><a href="<?= BASE_URL . 'my-user' ?>"><?= $_SESSION['auth']['fullname'] ?></a> &nbsp<a href="<?= BASE_URL . 'dang-xuat' ?>">Đăng xuất</a></p>
									<?php else : ?>
										<a href="<?= BASE_URL . 'dangnhap' ?>">Đăng nhập</a>
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
						<a href="<?= BASE_URL ?>"><img src="<?= CLIENT_ASSET ?>img/logo/logo.png" alt="" /></a>
					</div>
				</div>
				<!-- logo end -->
				<div class="col-lg-6 col-md-8 col-sm-12">
					<!-- cart-total start -->
					<div class="cart-total">
						<ul>
							<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">Giỏ Hàng: (2)</span></a>
								<div class="mini-cart-content">
									<div class="cart-img-details">
										<div class="cart-img-photo">
											<a href="#"><img src="<?= CLIENT_ASSET ?>img/product/total-cart.jpg" alt="" /></a>
											<span class="quantity">1</span>
										</div>
										<div class="cart-img-contaent">
											<a href="#">
												<h4>Vestibulum suscipit</h4>
											</a>
											<span>£165.00</span>
										</div>
										<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a>
										</div>
									</div>
									<div class="clear"></div>
									<div class="cart-img-details">
										<div class="cart-img-photo">
											<a href="#"><img src="<?= CLIENT_ASSET ?>img/product/total-cart2.jpg" alt="" /></a>
											<span class="quantity">1</span>
										</div>
										<div class="cart-img-contaent">
											<a href="#">
												<h4>Donec sodales mauris in</h4>
											</a>
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
							<input type="text" placeholder="Tìm Kiểm Sản Phẩm..." name="timkiem" />
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
								<li><a href="<?= BASE_URL ?>">Trang Chủ</a></li>

								<li>

									<a href="<?= BASE_URL . 'category' ?>">Shop</a>

									<div class="mega-menu">
										<?php foreach ($list as $menu) : ?>
											<span>

												<a href="<?= BASE_URL . 'category?id=' . $menu['id'] ?>">
													<?php echo $menu['name'] ?> </a>

											</span>
										<?php endforeach; ?>
									</div>


								</li>
								<li>
									<a href="<?= BASE_URL . 'thuonghieu' ?>">Thương hiệu</a>

									<div class="mega-menu">
										<?php foreach ($thuonghieu as $menu) : ?>
											<span>

												<a href="<?= BASE_URL . 'thuonghieu?id=' . $menu['id'] ?>">
													<?php echo $menu['name_brand'] ?> </a>

											</span>
										<?php endforeach; ?>
									</div>


								</li>

								<li><a href="<?= BASE_URL . 'tintuc' ?>">Tin Tức</a></li>
								<li><a href="<?= BASE_URL . 'lien_he' ?>">Liên Hệ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- mainmenu-area end -->
</header>