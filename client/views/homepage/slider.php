<div class="slider-wrap">
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <?php foreach ($itemsl as $newitem) : ?>
                    <li data-transition="parallaxtoright,parallaxtoleft" data-slotamount="7" data-masterspeed="600" data-saveperformance="off"> <img src="<?= $newitem['slideshow_img'] ?>" alt="banner_slider02" data-bgposition="left bottom" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption customin" data-x="304" data-y="111" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:3;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1500" data-easing="easeInOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;"><img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider-text-1.png" alt="">
                        </div>

                    </li>
                <?php endforeach; ?>
                <!-- <li data-transition="parallaxtoright,parallaxtoleft" data-slotamount="7" data-masterspeed="300" data-saveperformance="off"> <img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider2.jpg" alt="banner_slider01" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption lft" data-x="304" data-y="111" data-speed="1000" data-start="1200" data-easing="easeInOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 5;"><img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider-text-1.png" alt="">
                    </div>
                    <div class="tp-caption lfb" data-x="303" data-y="196" data-speed="1200" data-start="1500" data-easing="easeInOutExpo" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 6;"><img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider-text-2.png" alt="">
                    </div>
                    <div class="tp-caption small_text lfl tp-resizeme" data-x="305" data-y="308" data-speed="1000" data-start="2000" data-easing="easeInOutBack" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 7; max-width: 372px; max-height: 39px; white-space: normal;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                    </div>
                    <div class="tp-caption randomrotate" data-x="301" data-y="390" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 8;"><a href="#"><img src="<?= CLIENT_ASSET ?>img/slider/slider-1/slider-text-4.png" alt=""></a>
                    </div>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!----------------------------------- and slider ------------------------------------------->
<div class="features-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>SẢN PHẨM NỔI BẬT</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li role="presentation" class="active"><a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">Men</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">women</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Clothes</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="row">
                                <div class="features-curosel">
                                    <!-- single-product start -->
                                    <?php foreach ($items as $item) : ?>
                                        <div class="col-12">
                                            <div class="single-product">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>">
                                                        <img style="width: 255px; height: 327px" class="primary-image" src="<?= $item['thumbnail'] ?>" alt="" />
                                                    </a>
                                                    <div class="actions">
                                                        <div class="action-buttons">
                                                            <div class="add-to-cart">
                                                                <a href="product-virtual.html">Add to cart</a>
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
                                                                <a href="" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $item['id'] ?>"><?= $item['title'] ?></a></h2>
                                                    <div class="pro-rating">
                                                        <a href=""><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="new-price"><?= $item['discount'] ?>đ</span>
                                                        <span class="old-price"><?= $item['price'] ?>đ</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="row">
                                <div class="features-curosel">
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/2.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/1.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/2.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/8.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/3.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Light house shoes</a></h2>
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
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/4.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                    <span class="old-price">£100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/6.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/9.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£130.00</span>
                                                    <span class="old-price">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/4.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Lorem ipsum dolor sit amet</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£150.00</span>
                                                    <span class="old-price">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/3.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/1.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Donec sodales</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£150.00</span>
                                                    <span class="old-price">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="row">
                                <div class="features-curosel">
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/15.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/16.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Curabitur vulputate urna</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£90.00</span>
                                                    <span class="old-price">£120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/1.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/2.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Vestibulum suscipit</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£50.00</span>
                                                    <span class="old-price">£80.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/9.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Light house shoes</a></h2>
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
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/5.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/6.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£90.00</span>
                                                    <span class="old-price">£120.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/8.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/6.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Donec sodales mauris in</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£150.00</span>
                                                    <span class="old-price">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <span class="sale-text">Sale</span>
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/4.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Kaoreet lobortis</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£60.00</span>
                                                    <span class="old-price">£100.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                    <!-- single-product start -->
                                    <div class="col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#">
                                                    <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/6.jpg" alt="" />
                                                    <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/9.jpg" alt="" />
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
                                                <h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">£130.00</span>
                                                    <span class="old-price">£180.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =======================END SẢN PHẨM NỔI BẬT=============================== -->

<!-- ======================= SẢN PHẨM MỚI=============================== -->
<div class="new-product-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>SẢN PHẨM MỚI</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="features-curosel">
                <!-- single-product start -->
                <?php foreach ($newitems as $newitem) : ?>
                    <div class="col-12">
                        <div class="single-product">
                            <span class="sale-text">Sale</span>
                            <div class="product-img">
                                <a href="<?= BASE_URL . 'chitietsp?id=' . $newitem['id'] ?>">
                                    <img style="width: 255px; height: 327px" class="primary-image" src="<?= $newitem['thumbnail'] ?>" alt="" />
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
                                            <a href="" data-toggle="tooltip" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content">
                                <h2 class="product-name"><a href="<?= BASE_URL . 'chitietsp?id=' . $newitem['id'] ?>"><?= $newitem['title'] ?></a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price"><?= $item['discount'] ?>đ</span>
                                    <span class="old-price"><?= $item['price'] ?>đ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!-- ================= END SẢN PHẨM MỚI NHẤT  ======================== -->
<!-- =================  SẢN PHẨM BÁN CHẠY  ======================== -->
<div class="top-sells-area">
    <div class="container">
        <!-- section-heading start -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>SẢN PHẨM BÁN CHẠY</h3>
                </div>
            </div>
        </div>
        <!-- section-heading end -->
        <div class="row">
            <div class="top-sells-curosel">
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/15.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/16.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£90.00</span>
                                    <span class="old-price">£120.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/1.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Tincidunt malesuada</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£100.00</span>
                                    <span class="old-price">£150.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/8.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£70.00</span>
                                    <span class="old-price">£100.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/6.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/7.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£50.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/3.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£60.00</span>
                                    <span class="old-price">£90.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/10.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/11.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Curabitur vulputate urna</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£50.00</span>
                                    <span class="old-price">£80.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/3.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£120.00</span>
                                    <span class="old-price">£140.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/2.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/9.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£150.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/7.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/5.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Sed libero Nulla</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£100.00</span>
                                    <span class="old-price">£130.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/women/4.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/women/3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Posuere Condimentum</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£110.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
                <!-- single-product start -->
                <div class="col-12">
                    <div class="single-product first-sells">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/3.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£130.00</span>
                                    <span class="old-price">£150.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-product">
                        <div class="product-img">
                            <a href="#">
                                <img class="primary-image" src="<?= CLIENT_ASSET ?>img/product/15.jpg" alt="" />
                                <img class="secondary-image" src="<?= CLIENT_ASSET ?>img/product/6.jpg" alt="" />
                            </a>
                        </div>
                        <div class="product-content">
                            <div class="pro-info">
                                <h2 class="product-name"><a href="#">Condimentum posuere</a></h2>
                                <div class="pro-rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="price-box">
                                    <span class="new-price">£150.00</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action-buttons">
                                    <div class="add-to-cart">
                                        <a href="#">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product end -->
            </div>
        </div>
    </div>
</div>
<!--====================== END SẢN PHẨM BÁN CHẠY ================== -->