<div class="shop-area">
	<div class="container">
		<div class="row">
			<!-- shop-left-sidebar start -->
			<div class="col-lg-3 col-md-12 order-2 order-lg-1">
				<div class="sider-bar-wrap">
					<!-- widget-categories start -->
					<aside class="widget widget-categories">
						<h3 class="sidebar-title">Categories</h3>
						<ul class="sidebar-menu">
							<li><a href="#">Clothes</a> <span class="count">(14)</span></li>
							<li><a href="#">Men</a> <span class="count">(9)</span></li>
							<li><a href="#">Shoes</a> <span class="count">(2)</span></li>
							<li><a href="#">Sunglasses</a> <span class="count">(2)</span></li>
							<li><a href="#">Women</a> <span class="count">(8)</span></li>
						</ul>
					</aside>
					<!-- widget-categories end -->
					<!-- shop-filter start -->
					<aside class="widget shop-filter">
						<h3 class="sidebar-title">price</h3>
						<div class="info_widget">
							<div class="price_filter">
								<div id="slider-range"></div>
								<div class="price_slider_amount">
									<input type="text" id="amount" name="price" placeholder="Add Your Price" />
									<input type="submit" value="Filter" />
								</div>
							</div>
						</div>
					</aside>
					<!-- shop-filter end -->
					<!-- filter-by start -->
					<aside class="widget filter-by">
						<h3 class="sidebar-title">Filter by</h3>
						<ul class="sidebar-menu">
							<li><a href="#">L</a> <span class="count">(1)</span></li>
							<li><a href="#">M</a> <span class="count">(1)</span></li>
							<li><a href="#">S</a> <span class="count">(1)</span></li>
							<li><a href="#">XL</a> <span class="count">(1)</span></li>
						</ul>
					</aside>
					<!-- filter-by end -->
					<!-- widget-tags start -->
					<aside class="widget widget-tags">
						<h3 class="sidebar-title">Tags</h3>
						<ul>
							<li><a href="#">asian</a></li>
							<li><a href="#">brown</a></li>
							<li><a href="#">euro</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">france</a></li>
							<li><a href="#">hat</a></li>
							<li><a href="#">travel</a></li>
							<li><a href="#">white</a></li>
							<li><a href="#">t-shirt</a></li>
							<li><a href="#">teen</a></li>
						</ul>
					</aside>
					<!-- widget-tags end -->
					<!-- widget-recent start -->
					<aside class="widget top-product-widget">
						<h3 class="sidebar-title">Top rated products</h3>
						<ul>
							<li>
								<div class="single-product">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/product/15.jpg" alt="" />
											<img class="secondary-image" src="img/product/16.jpg" alt="" />
										</a>
									</div>
									<div class="product-content">
										<div class="pro-info">
											<h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>
											<div class="price-box">
												<span class="new-price">£90.00</span>
												<span class="old-price">£120.00</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="single-product">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/product/women/8.jpg" alt="" />
											<img class="secondary-image" src="img/product/women/1.jpg" alt="" />
										</a>
									</div>
									<div class="product-content">
										<div class="pro-info">
											<h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>
											<div class="price-box">
												<span class="new-price">£70.00</span>
												<span class="old-price">£100.00</span>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="single-product">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="img/product/6.jpg" alt="" />
											<img class="secondary-image" src="img/product/7.jpg" alt="" />
										</a>
									</div>
									<div class="product-content">
										<div class="pro-info">
											<h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
											<div class="price-box">
												<span class="new-price">£50.00</span>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</aside>
					<!-- widget-recent end -->
				</div>
			</div>
			<!-- blog-left-sidebar end -->
			<div class="col-lg-9 col-md-12 order-1 order-lg-2">
				<!-- toolbar start -->
				<div class="toolbar">
					<div class="view-mode">
						<a class="active" href="shop.html"><i class="fa fa-th-large"></i></a>
						<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>
					</div>
					<div class="show-result">
						<p> Showing 1–12 of 19 results</p>
					</div>
					<div class="toolbar-form">
						<form action="#">
							<div class="tolbar-select">
								<select>
									<option value="volvo">Sort by popularity</option>
									<option value="saab">Default sorting</option>
									<option value="mercedes">Sort by average rating</option>
									<option value="audi">Sort by newness</option>
									<option value="audi">Sort by price: low to high</option>
									<option value="audi">Sort by price: high to low</option>
								</select>
							</div>
						</form>
					</div>
				</div>
				<!-- toolbar end -->
				<div class="clear"></div>
				<div class="grid-view">
					<div class="row">
						<!-- single-product start -->
						<?php foreach ($items as $item) : ?>
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="single-product">
									<span class="sale-text">Sale</span>
									<div class="product-img">
										<a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>">
											<img class="primary-image" src="<?= $item['thumbnail'] ?>" alt="" />
											<img class="secondary-image" src="<?= $item['image1'] ?>" alt="" />
										</a>
										<div class="actions">
											<div class="action-buttons">
												<div class="add-to-cart">
													<a href="#">Add to cart</a>
												</div>
												<div class="add-to-links">
													<div class="add-to-wishlist">
														<a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i>
														</a>
													</div>
													<div class="compare-button">
														<a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
													</div>
												</div>
												<div class="quickviewbtn">
													<a href="#" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#"><?= $item['title'] ?></a></h2>
										<div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="new-price"><?= $item['price'] ?>đ</span>
											<span class="old-price"><?= $item['discount'] ?>đ</span>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
				<!-- pagination start -->
				<div class="shop-pagination">
					<div class="pagination">
						<ul>
							<li class="active">1</li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- pagination end -->
			</div>
		</div>
	</div>
</div>