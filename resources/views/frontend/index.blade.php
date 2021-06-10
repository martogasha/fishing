    @include('frontPartial.nav')
<title>Fred Fishing Flies - Home</title>
    <main class="main">
        <div class="home-slider owl-carousel owl-theme show-nav-hover nav-big">
            <div class="home-slide home-slide1 banner">
                <img class="slide-bg owl-lazy" src="assets/images/products/h1.jpg" data-src="assets/images/products/h1.jpg" alt="home banner">
                <div class="banner-layer banner-layer-middle" >
                    <a href="{{url('shop')}}" class="btn btn-dark btn-xl" role="button">Shop Now</a>
                </div><!-- End .banner-layer -->
            </div><!-- End .home-slide -->

            <div class="home-slide home-slide2 banner">
                <img class="slide-bg owl-lazy" src="assets/images/products/h2.jpg" data-src="assets/images/products/h2.jpg" alt="home banner">
                <div class="banner-layer banner-layer-middle">

                    <hr class="short-thick-divider">

                    <a href="{{url('shop')}}" class="btn btn-dark btn-xl btn-icon-right" role="button">Shop Now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div><!-- End .banner-layer -->
            </div><!-- End .home-slide -->
            <div class="home-slide home-slide2 banner">
                <img class="slide-bg owl-lazy" src="assets/images/products/h3.png" data-src="assets/images/products/h3.jpg" alt="home banner">
                <div class="banner-layer banner-layer-middle">

                    <hr class="short-thick-divider">

                    <a href="{{url('shop')}}" class="btn btn-dark btn-xl btn-icon-right" role="button">Shop Now <i class="fas fa-long-arrow-alt-right"></i></a>
                </div><!-- End .banner-layer -->
            </div><!-- End .home-slide -->

            </div><!-- End .home-slide -->
        </div><!-- End .home-slider -->


        <section class="container pb-3 mb-1">
            <h2 class="section-title ls-n-10 text-center pb-2 m-b-4">Featured Products</h2>

            <div class="row py-4">
                @foreach($stocks as $stock)
                <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('productDetail',$stock->id)}}">
                                <img src="{{asset('uploads/product/'.$stock->stock_image)}}">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-30%</span>
                            </div>
                            <div class="btn-icon-group">
                                <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-shopping-cart"></i></button>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html">{{$stock->stock_name}}</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">${{$stock->stock_price}}</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
                @endforeach
                        </div>
            <a href="{{url('shop')}}"><button type="button" class="btn btn-primary btn-lg btn-block">Show More</button></a>

            <hr class="mt-3 mb-6">

            <div class="row feature-boxes-container pt-2">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-earphones-alt"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Customer Support</h3>
                            <h5>Need Assistence?</h5>

                            <p></p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-credit-card"></i>

                        <div class="feature-box-content">
                            <h3 class="text-uppercase">Secured Payment</h3>
                            <h5>Safe & Fast</h5>

                            <p></p>
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-lg-3 -->


            </div><!-- End .row .feature-boxes-container-->
        </section>
    </main><!-- End .main -->
@include('frontPartial.footer')
</div><!-- End .page-wrapper -->

<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-compare-link"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active"><a href="index-2.html">Home</a></li>
                <li>
                    <a href="category.html">Categories</a>
                    <ul>
                        <li><a href="category.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="category.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="category-list.html">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
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
                                <li><a href="product-full-width.html">Vertical Thumbnails</a></li>
                                <li><a href="product.html">Inner Zoom</a></li>
                                <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
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
                                <li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
                                <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
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
                        <li>
                            <a href="#">Dashboard</a>
                            <ul>
                                <li><a href="dashboard.html">Dashboard</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#" class="login-link">Login</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                    </ul>
                </li>
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
<!-- Modal -->
<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
<div class="modal fade" id="quickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.min.js"></script>
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:30:43 GMT -->
</html>
