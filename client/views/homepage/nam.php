<div class="shop-area">
		<div class="container">
			<div class="row">
				<!-- shop-left-sidebar start -->
				<div class="col-lg-3 col-md-12 order-2 order-lg-1">
                    <div class="sider-bar-wrap">
                        <!-- shop-filter start -->
                        <aside class="widget shop-filter">
                            <h3 class="sidebar-title">price</h3>
                            <div class="info_widget">
                                <div class="price_filter">
                                    <div id="slider-range"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        <input type="submit"  value="Filter"/>  
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
							<div class="col-lg-4 col-md-4 col-sm-12">
                            <?php foreach($itemcungloais as $itemcungloai): ?>
                                <div class="single-product">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="<?=$itemcungloai['thumbnail']?>" alt="" />
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
										<h2 class="product-name"><a href=""><?=$itemcungloai['title']?></a></h2>
										<div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<div class="price-box">
											<span class="new-price"><?=$itemcungloai['price']?></span>
										</div>
									</div>
								</div>
                            <?php endforeach;?>

							</div>
							<!-- single-product end -->			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>