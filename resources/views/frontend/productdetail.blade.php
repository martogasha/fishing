@include('frontPartial.nav')
<br>
<br>
<br>
<br>
<br>
<title>{{$productDetail->stock_name}} - Fred Fishing Flies</title>
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
                                <select class="form-control form-control-sm">
                                    <option>Select Size</option>
                                    <option>10</option>
                                    <option>12</option>
                                    <option>14</option>
                                    <option>16</option>
                                    <option>18</option>
                                    <option>20</option>
                                    <option>22</option>
                                </select>
                                <hr class="divider">

                                <div class="product-action">
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div><!-- End .product-single-qty -->
                                    <form id="productDetailForm">
                                    <input type="hidden" value="{{$productDetail->id}}" name="productId" id="productDetail">
                                    <button type="submit" class="btn btn-dark add-cart">Add To Cart</button>
                                    </form>
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
                                <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews (3)</a>
                            </li>
                        </ul>
                        <div class="tab-content">


                            <div class="tab-pane fade show active" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                                <div class="product-reviews-content">
                                    <div class="row">
                                        <div class="col-xl-7">
                                            <h2 class="reviews-title">3 reviews for Silver Porto Headset</h2>

                                            <ol class="comment-list">
                                                <li class="comment-container">
                                                    <div class="comment-avatar">
                                                        <img src="{{asset('assets/images/avatar/avatar1.jpg')}}" width="65" height="65" alt="avatar"/>
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
                                <img src="{{url('assets/images/banners/banner-sidebar.jpg')}}" class="w-100" alt="Banner Desc">
                            </a>
                        </div><!-- End .widget -->

                        <div class="widget widget-featured">
                            <h3 class="widget-title">Featured</h3>

                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        @foreach($feats as $feat )
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="{{url('productDetail',$feat->id)}}">
                                                    <img src="{{asset('uploads/product/'.$feat->stock_image)}}">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">{{$feat->stock_name}}</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">${{$feat->stock_price}}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        @endforeach

                                    </div><!-- End .featured-col -->

                                    <div class="featured-col">
                                        @foreach($feats as $feat )
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="{{url('productDetail',$feat->id)}}">
                                                    <img src="{{asset('uploads/product/'.$feat->stock_image)}}">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h5 class="product-title">
                                                    <a href="product.html">{{$feat->stock_name}}</a>
                                                </h5>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div><!-- End .ratings-container -->
                                                <div class="price-box">
                                                    <span class="product-price">${{$feat->stock_price}}</span>
                                                </div><!-- End .price-box -->
                                            </div><!-- End .product-details -->
                                        </div>
                                        @endforeach
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
                    @foreach($reals as $real)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('productDetail',$real->id)}}">
                                <img src="{{asset('uploads/product/'.$real->stock_image)}}">
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
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">{{$real->stock_name}}</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .ratings-container -->
                            <div class="price-box">
                                <span class="product-price">${{$real->stock_price}}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach
                </div><!-- End .products-slider -->
            </div><!-- End .container -->
        </div><!-- End .products-section -->
    </main><!-- End .main -->

@include('frontPartial.footer')
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
<!-- Modal HTML -->
<div id="cartSuccessModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            </div>
            <div class="modal-body text-center">
                <h4>Great!</h4>
                <p>ITEM ADDED TO CART</p>
                <a href="{{url('productDetail',$productDetail->id)}}"><button class="btn btn-success"><span>Continue Shopping</span></button></a>
                <a href="{{url('cart')}}"><button class="btn btn-info"><span>View Cart</span></button></a>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }
    .modal-confirm {
        color: #434e65;
        width: 525px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
    }
    .modal-confirm .modal-header {
        background: #47c9a2;
        border-bottom: none;
        position: relative;
        text-align: center;
        margin: -20px -20px 0;
        border-radius: 5px 5px 0 0;
        padding: 35px;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
    }
    .modal-confirm .form-control, .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }
    .modal-confirm .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
    }
    .modal-confirm .close:hover {
        opacity: 0.8;
    }
    .modal-confirm .icon-box {
        color: #fff;
        width: 95px;
        height: 95px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 5px solid #fff;
        padding: 15px;
        text-align: center;
    }
    .modal-confirm .icon-box i {
        font-size: 64px;
        margin: -4px 0 0 -4px;
    }
    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }
    .modal-confirm .btn, .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #eeb711 !important;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border-radius: 30px;
        margin-top: 10px;
        padding: 6px 20px;
        border: none;
    }
    .modal-confirm .btn:hover, .modal-confirm .btn:focus {
        background: #eda645 !important;
        outline: none;
    }
    .modal-confirm .btn span {
        margin: 1px 3px 0;
        float: left;
    }
    .modal-confirm .btn i {
        margin-left: 1px;
        font-size: 20px;
        float: right;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>
<!-- Plugins JS File -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.min.js')}}"></script>
</body>
<script>
    $('#relatedForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#related').val();
        $.ajax({
            type:"post",
            url:"{{route('addToCart')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                $('#ignismyModal').modal('show');
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
    $('#productDetailForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#productDetail').val();
        $.ajax({
            type:"post",
            url:"{{route('addToCart')}}",
            data:{
                "_token": "{{ csrf_token() }}",
                productId:productId},
            success:function (data) {
                $('#cartSuccessModal').modal('show');
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>
<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:32:50 GMT -->
</html>
