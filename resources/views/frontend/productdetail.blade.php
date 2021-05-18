@include('frontPartial.nav')
<br>
<br>
<br>
<br>
<br>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 main-content">
                    <div class="product-single-container product-single-default">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 product-single-gallery">
                                <div class="product-slider-container">
                                    <div class="product-single-carousel owl-carousel owl-theme">
                                        <div class="product-item">
                                            <img class="product-single-image" src="{{asset('uploads/product/'.$productDetail->stock_image)}}" data-zoom-image="assets/images/products/zoom/product-1-big.jpg"/>
                                        </div>
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
											<i class="icon-plus"></i>
										</span>
                                </div>
                            </div><!-- End .col-lg-7 -->

                            <div class="col-lg-5 col-md-6 product-single-details">
                                <h1 class="product-title">{{$productDetail->stock_name}}</h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <a href="#" class="rating-link">( 6 Reviews )</a>
                                </div><!-- End .ratings-container -->

                                <hr class="short-divider">

                                <div class="price-box">
                                    <span class="product-price">$ {{$productDetail->stock_price}}</span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
                                    <p>{{$productDetail->stock_desc }}</p>
                                </div><!-- End .product-desc -->

                                <ul class="single-info-list">
                                    <li>AVAILABILITY: <strong>AVAILABLE</strong></li>
                                    <li>SKU: <strong>123456789</strong></li>
                                </ul>

                                <hr class="divider">

                                <div class="product-action">
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div><!-- End .product-single-qty -->

                                    <a href="cart.html" class="btn btn-dark add-cart" title="Add to Cart">Add to Cart</a>
                                </div><!-- End .product-action -->

                                <hr class="divider mb-1">

                                <div class="product-single-share">
                                    <label class="sr-only">Share:</label>

                                    <div class="social-icons mr-2">
                                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                                        <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank" title="Linkedin"></a>
                                        <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank" title="Google +"></a>
                                        <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank" title="Mail"></a>
                                    </div><!-- End .social-icons -->

                                    <a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>
                                </div><!-- End .product single-share -->
                            </div><!-- End .product-single-details -->
                        </div><!-- End .row -->
                    </div><!-- End .product-single-container -->

                    <div class="product-single-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-tab-more-info" data-toggle="tab" href="#product-more-info-content" role="tab" aria-controls="product-more-info-content" aria-selected="false">More Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                <div class="product-desc-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i>Any Product types that You want - Simple, Configurable</li>
                                        <li><i class="fa fa-check-circle"></i>Downloadable/Digital Products, Virtual Products</li>
                                        <li><i class="fa fa-check-circle"></i>Inventory Management with Backordered items</li>
                                    </ul>
                                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade fade" id="product-more-info-content" role="tabpanel" aria-labelledby="product-tab-more-info">
                                <div class="product-desc-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                                <div class="product-tags-content">
                                    <form action="#">
                                        <h4>Add Your Tags:</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm" required>
                                            <input type="submit" class="btn btn-dark" value="Add Tags">
                                        </div><!-- End .form-group -->
                                    </form>
                                    <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                </div><!-- End .product-tags-content -->
                            </div><!-- End .tab-pane -->

                            <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                                <div class="product-reviews-content">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <h2 class="reviews-title">3 reviews for Silver Porto Headset</h2>

                                            <ol class="comment-list">
                                                <li class="comment-container">
                                                    <div class="comment-avatar">
                                                        <img src="assets/images/avatar/avatar1.jpg" width="65" height="65" alt="avatar"/>
                                                    </div><!-- End .comment-avatar-->

                                                    <div class="comment-box">
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .ratings-container -->

                                                        <div class="comment-info mb-1">
                                                            <h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
                                                        </div><!-- End .comment-info -->

                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                        </div><!-- End .comment-text -->
                                                    </div><!-- End .comment-box -->
                                                </li><!-- comment-container -->

                                                <li class="comment-container">
                                                    <div class="comment-avatar">
                                                        <img src="assets/images/avatar/avatar2.jpg" width="65" height="65" alt="avatar"/>
                                                    </div><!-- End .comment-avatar-->

                                                    <div class="comment-box">
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .ratings-container -->

                                                        <div class="comment-info mb-1">
                                                            <h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
                                                        </div><!-- End .comment-info -->

                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                        </div><!-- End .comment-text -->
                                                    </div><!-- End .comment-box -->
                                                </li><!-- comment-container -->

                                                <li class="comment-container">
                                                    <div class="comment-avatar">
                                                        <img src="assets/images/avatar/avatar3.jpg" width="65" height="65" alt="avatar"/>
                                                    </div><!-- End .comment-avatar-->

                                                    <div class="comment-box">
                                                        <div class="ratings-container">
                                                            <div class="product-ratings">
                                                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                            </div><!-- End .product-ratings -->
                                                        </div><!-- End .ratings-container -->

                                                        <div class="comment-info mb-1">
                                                            <h4 class="avatar-name">John Doe</h4> - <span class="comment-date">Novemeber 15, 2019</span>
                                                        </div><!-- End .comment-info -->

                                                        <div class="comment-text">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                        </div><!-- End .comment-text -->
                                                    </div><!-- End .comment-box -->
                                                </li><!-- comment-container -->
                                            </ol><!-- End .comment-list -->
                                        </div>

                                        <div class="col-xl-5">
                                            <div class="add-product-review">
                                                <form action="#" class="comment-form m-0">
                                                    <h3 class="review-title">Add a Review</h3>

                                                    <div class="rating-form">
                                                        <label for="rating">Your rating</label>
                                                        <span class="rating-stars">
																<a class="star-1" href="#">1</a>
																<a class="star-2" href="#">2</a>
																<a class="star-3" href="#">3</a>
																<a class="star-4" href="#">4</a>
																<a class="star-5" href="#">5</a>
															</span>

                                                        <select name="rating" id="rating" required="" style="display: none;">
                                                            <option value="">Rate…</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very poor</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Review</label>
                                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                    </div><!-- End .form-group -->


                                                    <div class="row">
                                                        <div class="col-md-6 col-xl-12">
                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <input type="text" class="form-control form-control-sm" required>
                                                            </div><!-- End .form-group -->
                                                        </div>

                                                        <div class="col-md-6 col-xl-12">
                                                            <div class="form-group">
                                                                <label>Your E-mail</label>
                                                                <input type="text" class="form-control form-control-sm" required>
                                                            </div><!-- End .form-group -->
                                                        </div>
                                                    </div>

                                                    <input type="submit" class="btn btn-dark ls-n-15" value="Submit">
                                                </form>
                                            </div><!-- End .add-product-review -->
                                        </div>
                                    </div>
                                </div><!-- End .product-reviews-content -->
                            </div><!-- End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-single-tabs -->
                </div><!-- End .main-content -->

                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                <aside class="sidebar-product col-lg-3 mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget widget-info">
                            <ul>
                                <li>
                                    <i class="icon-shipping"></i>
                                    <h4>FREE<br>SHIPPING</h4>
                                </li>
                                <li>
                                    <i class="icon-us-dollar"></i>
                                    <h4>100% MONEY<br>BACK GUARANTEE</h4>
                                </li>
                                <li>
                                    <i class="icon-online-support"></i>
                                    <h4>ONLINE<br>SUPPORT 24/7</h4>
                                </li>
                            </ul>
                        </div><!-- End .widget -->

                        <div class="widget">
                            <a href="#">
                                <img src="assets/images/banners/banner-sidebar.jpg" class="w-100" alt="Banner Desc">
                            </a>
                        </div><!-- End .widget -->

                        <div class="widget widget-featured">
                            <h3 class="widget-title">Featured</h3>

                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-1.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-2.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-3.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .featured-col -->

                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-4.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-5.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img src="assets/images/products/product-6.jpg">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">Product Short Name</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                    </div><!-- End .featured-col -->
                                </div><!-- End .widget-featured-slider -->
                            </div><!-- End .widget-body -->
                        </div><!-- End .widget -->
                    </div>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="products-section">
            <div class="container">
                <h2>Related Products</h2>

                <div class="products-slider owl-carousel owl-theme dots-top">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-1.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-20%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-2.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-3.jpg">
                            </a>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-4.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-5.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-6.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-30%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="product.html">
                                <img src="assets/images/products/product-1.jpg">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-20%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="category.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="old-price">$59.00</span>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div><!-- End .products-slider -->
            </div><!-- End .container -->
        </div><!-- End .products-section -->
    </main><!-- End .main -->

    <footer class="footer">
        <div class="footer-top">
            <div class="container top-border d-flex align-items-center justify-content-between flex-wrap">
                <div class="footer-left widget-newsletter d-md-flex align-items-center">
                    <div class="widget-newsletter-info">
                        <h5 class="widget-newsletter-title text-uppercase m-b-1">subscribe newsletter</h5>
                        <p class="widget-newsletter-content mb-0">Get all the latest information on Events, Sales and Offers.</p>
                    </div>
                    <form action="#">
                        <div class="footer-submit-wrapper d-flex w-100">
                            <input type="email" class="form-control" placeholder="Email address..." size="40" required>
                            <button type="submit" class="btn btn-dark btn-sm">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="footer-right">
                    <div class="social-icons">
                        <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                        <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                        <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                    </div><!-- End .social-icons -->
                </div>
            </div>
        </div>
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-4">
                        <div class="widget">
                            <h4 class="widget-title">Contact Info</h4>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">ADDRESS</h4>
                                        <a href="#">1234 Street Name, City, England</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget email">
                                        <h4 class="widget-title">EMAIL</h4>
                                        <a href="mailto:mail@example.com">mail@example.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">PHONE</h4>
                                        <a href="#">Toll Free (123) 456-7890</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">WORKING DAYS/HOURS</h4>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-4">
                        <div class="widget">
                            <h4 class="widget-title">My Account</h4>
                            <ul class="links link-parts row">
                                <div class="link-part col-xl-4">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </div>
                                <div class="link-part col-xl-8">
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                </div>
                            </ul>
                        </div><!-- End .widget -->
                    </div>
                    <div class="col-sm-6 col-lg-3 col-xl-4">
                        <div class="widget">
                            <h4 class="widget-title">Main Features</h4>
                            <ul class="links link-parts row">
                                <div class="link-part col-xl-6">
                                    <li><a href="#">Super Fast WordPress Theme</a></li>
                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                    <li><a href="#">33 Unique Shop Layouts</a></li>
                                </div>
                                <div class="link-part col-xl-6">
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile & Retina Optimized</a></li>
                                </div>
                            </ul>
                        </div><!-- End .widget -->
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container top-border d-flex align-items-center justify-content-between flex-wrap">
                <p class="footer-copyright mb-0 py-3 pr-3">Porto eCommerce. &copy;  2020.  All Rights Reserved</p>
                <img class="py-3" src="assets/images/payments.png" alt="payment image">
            </div>
        </div>
    </footer>
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-cancel"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active"><a href="index-2.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category-banner-full-width.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="category-list.html">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                        <li><a href="category-3col.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product.html">Horizontal Thumbs</a></li>
                                <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Variations</a>
                            <ul>
                                <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layout Types</a>
                            <ul>
                                <li><a href="product.html">Default Layout</a></li>
                                <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                <li><a href="product-full-width.html">Full Width Layout</a></li>
                                <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                    <ul>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li>
                            <a href="#">Checkout</a>
                            <ul>
                                <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                <li><a href="checkout-review.html">Checkout Review</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
                <li><a href="blog.html">Blog</a>
                    <ul>
                        <li><a href="single.html">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
<!-- Add Cart Modal -->
<div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body add-cart-box text-center">
                <p>You've just added this product to the<br>cart:</p>
                <h4 id="productTitle"></h4>
                <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
                <div class="btn-actions">
                    <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                    <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.min.js')}}"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:32:50 GMT -->
</html>
