<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
                        <li><a href="shop.html">Shop</a> <i class="fa fa-angle-right"></i></li>
                        <li><a href="#">Women</a> <i class="fa fa-angle-right"></i></li>
                        <li><?=$item[0]['title']?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- product-simple-area start -->
<div class="product-simple-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="single-product-image">
                    <div class="single-product-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img alt="" src="<?=$item[0]['thumbnail']?>"></a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img alt="" src="<?=$item[0]['image1']?>"></a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img alt="" src="<?=$item[0]['image2']?>"></a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><img alt="" src="<?=$item[0]['image3']?>"></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home"><img alt="" src="<?=$item[0]['thumbnail']?>"></div>
                        <div role="tabpanel" class="tab-pane" id="profile"><img alt="" src="<?=$item[0]['image1']?>"></div>
                        <div role="tabpanel" class="tab-pane" id="messages"><img alt="" src="<?=$item[0]['image2']?>"></div>
                        <div role="tabpanel" class="tab-pane" id="settings"><img alt="" src="<?=$item[0]['image3']?>"></div>
                    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="single-product-info">
                    <div class="product-nav">
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <h1 class="product_title"><?=$item[0]['title']?></h1>
                    <div class="price-box">
                        <span class="new-price"><?=$item[0]['discount']?>đ</span>
                        <span class="old-price"><?=$item[0]['price']?>d</span>
                    </div>
                    <div class="pro-rating">
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                    </div>
                    <div class="short-description">
                        <p><?=$item[0]['description']?></p>						
                    </div>
                    <div class="stock-status">
                        <label>Availability</label>: <strong>In stock</strong>
                    </div>
                    <form action="#">
                        <div class="quantity">
                            <input type="number" value="1" />
                            <button type="submit">Add to cart</button>
                        </div>
                    </form>
                    <div class="add-to-wishlist">
                        <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i></a>
                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                    </div>
                    <div class="share_buttons">
                        <a href="#"><img src="img/share-img.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-simple-area end -->
<div class="product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="product-tabs">
                    <div class="product__tabs_inner">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs description-list" role="tablist">
                        <li role="presentation" class="active"><a class="active" href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Description</a></li>
                        <li role="presentation"><a href="#page-comments" aria-controls="page-comments" role="tab" data-toggle="tab">Reviews (1)</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-desc">
                            <div class="product-tab-desc">
                                <p><?=$item[0]['description']?></p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="page-comments">
                            <div class="product-tab-desc">
                                <div class="product-page-comments">
                                    <h2>1 review for Integer consequat ante lectus</h2>
                                    <ul>
                                        <li>
                                            <div class="product-comments">
                                                <img src="img/blog/avatar.png" alt="" />
                                                <div class="product-comments-content">
                                                    <p><strong>admin</strong> -
                                                        <span>March 7, 2015:</span>
                                                        <span class="pro-comments-rating">
                                                            <i class="fa fa-star"></i>								
                                                            <i class="fa fa-star"></i>								
                                                            <i class="fa fa-star"></i>								
                                                            <i class="fa fa-star"></i>								
                                                        </span>
                                                    </p>
                                                    <div class="desc">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="review-form-wrapper">
                                        <h3>Add a review</h3>
                                        <form action="#">
                                            <input type="text" placeholder="your name"/>
                                            <input type="email" placeholder="your email"/>
                                            <div class="your-rating">
                                                <h5>Your Rating</h5>
                                                <span>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </span>
                                                <span>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </span>
                                                <span>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </span>
                                                <span>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </span>
                                            </div>
                                            <textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
                                            <input type="submit" value="submit" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>						
                </div>
                <div class="clear"></div>
                <div class="upsells_products_widget">
                    <div class="section-heading">
                        <h3>Up-Sells</h3>
                    </div>
                    <div class="row">
                        <div class="top-sells-curosel">
                            <!-- single-product start -->
                            <div class="col-12">
                                <div class="single-product">
                                    <span class="sale-text">Sale</span>
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image" src="img/product/17.jpg" alt="" />
                                            <img class="secondary-image" src="img/product/18.jpg" alt="" />
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
                                        <h2 class="product-name"><a href="#">Convallis quam sit</a></h2>
                                        <div class="pro-rating">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">£90.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         >							
                            <!-- single-product end -->								
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <!-- widget-recent start -->
                <aside class="widget top-product-widget">
                    <h3 class="sidebar-title">SẢN PHẨM CÙNG LOẠI</h3>
                    <ul>
                        <?php foreach($itemcungloais as $itemcungloai):?>
                        <li>
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="<?=BASE_URL . 'chitietsp?id='.$itemcungloai['id']?>">
                                        <img  class="primary-image" src="<?=$itemcungloai['thumbnail']?>" alt="" />
                                    </a>						
                                </div>
                                <div class="product-content">
                                    <div class="pro-info">
                                        <h2 class="product-name"><a href="<?=BASE_URL . 'chitietsp?id='.$itemcungloai['id']?>"><?=$itemcungloai['title']?></a></h2>
                                        <div class="price-box">
                                            <span class="new-price"><?=$itemcungloai['price']?>đ</span>
                                            <span class="old-price"><?=$itemcungloai['discount']?>đ</span>
                                        </div>								
                                    </div>								
                                </div>
                            </div>	
                        </li>
                        <?php endforeach?>
                       
                    </ul>
                </aside>
                <!-- widget-recent end -->				
            </div>
        </div>
    </div>
</div>

<!-- brand-area start -->
<div class="brand-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Our Brands</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->		
        <div class="row">
            <div class="brand-curosel">
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
                <!-- single-brand start -->
                <div class="col-12">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                    </div>
                </div>
                <!-- single-brand end -->
            </div>
        </div>
    </div>
</div>
<!-- brand-area end -->	