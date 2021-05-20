@include('frontPartial.nav')
<title>Checkout - Fred Fishing Flies</title>
    <main class="main">


        <div class="page-header">
            <div class="container">
                <h1>Checkout</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->

        <div class="container">
            <form action="{{url('placeOrder')}}" method="post">
                @csrf
            <div class="row row-sparse">
                <div class="col-lg-8 padding-right-lg">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Shipping Address</h2>

                            <div class="shipping-step-addresses">
                                <div class="shipping-address-box active">
                                    <address>
                                        Desmond Mason <br>
                                        123 Street Name, City Name <br>
                                        Los Angeles, California 03100 <br>
                                        United States <br>
                                        (123) 456-7890 <br>
                                    </address>

                                </div><!-- End .shipping-address-box -->

                            </div><!-- End .shipping-step-addresses -->
                            <a href="#" class="btn btn-sm btn-outline-secondary btn-new-address" data-toggle="modal" data-target="#addressModal">+ Update Address</a>
                        </li>

                    </ul>
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="order-summary">
                        <h3>Summary</h3>

                        <h4>
                            <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}} products in Cart</a>
                        </h4>

                        <div class="collapse" id="order-cart-section">
                            <table class="table table-mini-cart">
                                <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="{{url('productDetail', $product['item']['id'])}}" class="product-image">
                                                <img src="{{asset('uploads/product/'.$product['item']['stock_image'])}}" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="{{url('productDetail',$product['item']['id'])}}">{{$product['item']['stock_name']}}</a>
                                            </h2>

                                            <span class="product-qty">Qty: {{$product['quantity']}}</span>
                                        </div>
                                    </td>
                                    <td class="price-col">${{$product['item']['stock_price'] * $product['quantity']}}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td class="product-col">
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">Total</a>
                                            </h2>
                                        </div>
                                    </td>
                                    <td class="price-col">${{$totalPrice}}</td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="checkout-methods">
                                <a href="{{url('cart')}}" class="btn btn-block btn-sm btn-primary">Edit Cart</a>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Paypal
                                </label>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Credit/Debit Card
                                </label>
                            </div>
                        </div><!-- End #order-cart-section -->
                    </div><!-- End .order-summary -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->

            <div class="row row-sparse">
                <div class="col-lg-12">
                    <div class="checkout-steps-action">
                        <button type="submit" class="btn btn-danger float-right">Place Order</button>
                    </div><!-- End .checkout-steps-action -->

                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
            </form>
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
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

<!-- Modal -->
<div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <h3 class="modal-title" id="addressModalLabel">Shipping Address</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!-- End .modal-header -->

                <div class="modal-body">
                    <div class="form-group required-field">
                        <label>First Name </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Last Name </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Company </label>
                        <input type="text" class="form-control form-control-sm">
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Street Address </label>
                        <input type="text" class="form-control form-control-sm" required>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>City  </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>State/Province</label>
                        <div class="select-custom">
                            <select class="form-control form-control-sm">
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Zip/Postal Code </label>
                        <input type="text" class="form-control form-control-sm" required>
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label>Country</label>
                        <div class="select-custom">
                            <select class="form-control form-control-sm">
                                <option value="USA">United States</option>
                                <option value="Turkey">Turkey</option>
                                <option value="China">China</option>
                                <option value="Germany">Germany</option>
                            </select>
                        </div><!-- End .select-custom -->
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label>Phone Number </label>
                        <div class="form-control-tooltip">
                            <input type="tel" class="form-control form-control-sm" required>
                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                        </div><!-- End .form-control-tooltip -->
                    </div><!-- End .form-group -->

                    <div class="form-group-custom-control">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="address-save">
                            <label class="custom-control-label" for="address-save">Save in Address book</label>
                        </div><!-- End .custom-checkbox -->
                    </div><!-- End .form-group -->
                </div><!-- End .modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                </div><!-- End .modal-footer -->
            </form>
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
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

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/checkout-shipping-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:33:04 GMT -->
</html>
