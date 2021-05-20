@include('frontPartial.nav')
<title>Login - Fred Fishing Flies</title>
    <main class="main">

        <div class="page-header">
            <div class="container">
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="container">
            <div class="row row-sparse">
                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Login</h2>
                        <p>If you have an account with us, please log in.</p>
                    </div><!-- End .heading -->

                    <form action="#">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                        <input type="password" class="form-control" placeholder="Password" required>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                            <a href="forgot-password.html" class="forget-pass"> Forgot your password?</a>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->

                <div class="col-md-6">
                    <div class="heading">
                        <h2 class="title">Create An Account</h2>
                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                    </div><!-- End .heading -->

                    <form action="{{route('register')}}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>

                        <h2>Login information</h2>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                        <input type="password" class="form-control" name="password" id="password1" placeholder="Password" required>
                        <input type="password" class="form-control" id="confirmPassword1" placeholder="Confirm Password" required>
                        <span class="badge badge-success" id="passwordMatch">Password match</span>
                        <span class="badge badge-danger" id="passwordError">Password don't match match</span>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter-signup">
                            <label class="custom-control-label" for="newsletter-signup">Sing up our Newsletter</label>
                        </div><!-- End .custom-checkbox -->

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div><!-- End .form-footer -->
                    </form>
                </div><!-- End .col-md-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-5"></div><!-- margin -->
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
                        <div class="footer-submit-wrapper d-flex">
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

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.min.js"></script>
</body>
<script>
    $(document).ready(function () {
        $('#passwordError').hide();
        $('#passwordMatch').hide();
    });
    $('#confirmPassword1').on('keyup',function () {
        if ($('#password1').val() == $('#confirmPassword1').val() ){
            $('#passwordMatch').show();
            $('#passwordError').hide();
        }
        else {
            $('#passwordError').show();
            $('#passwordMatch').hide();
        }
    });
</script>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:33:17 GMT -->
</html>
