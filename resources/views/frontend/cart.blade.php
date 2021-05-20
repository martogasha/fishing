@include('frontPartial.nav')
<title>Cart - Fred Fishing Flies</title>
    <main class="main">

        <div class="page-header">
            <div class="container">
            </div><!-- End .container -->
            @include('flash-message')
        </div><!-- End .page-header -->

        <div class="container">
            <div class="row row-sparse">
                <div class="col-lg-8 padding-right-lg">
                    <div class="cart-table-container">
                        <table class="table table-cart">
                            <thead>
                            <tr>
                                <th class="product-col">Product</th>
                                <th class="price-col">Price</th>
                                <th class="qty-col">Qty</th>
                                <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($products))
                                @foreach($products as $product)
                            <tr class="product-row">
                                <td class="product-col">
                                    <figure class="product-image-container">
                                        <a href="{{url('productDetail', $product['item']['id'])}}" class="product-image">
                                            <img src="{{asset('uploads/product/'.$product['item']['stock_image'])}}" alt="product">
                                        </a>
                                    </figure>
                                    <h2 class="product-title">
                                        <a href="{{url('productDetail',$product['item']['id'])}}">{{$product['item']['stock_name']}}</a>
                                    </h2>
                                </td>
                                <td>${{$product['item']['stock_price']}}</td>
                                <td class="text-left">
                                    <a href="{{url('addByOne',$product['item']['id'])}}" style="padding-left: 20px">+</a>
                                    <div style="max-width:50px;" class="input-group btn-block">
                                        <input class="form-control" value="{{$product['quantity']}}" name="quantity" disabled>
                                    </div>
                                    <a href="{{url('cartReduceByOne',$product['item']['id'])}}" style="padding-left: 20px">-</a>

                                </td>
                                <td>${{$product['item']['stock_price'] * $product['quantity']}}</td>
                            </tr>
                            <tr class="product-action-row">
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="#" class="btn-move">Move to Wishlist</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                        <a href="{{url('cartRemove',$product['item']['id'])}}   " title="Remove product" class="btn-remove icon-cancel"><span class="sr-only">Remove</span></a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            </tbody>

                            <tfoot>
                            <tr>
                                <td colspan="4" class="clearfix">
                                    <div class="float-left">
                                        <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                    </div><!-- End .float-left -->

                                    <div class="float-right">
                                        <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                        <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                    </div><!-- End .float-right -->
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- End .cart-table-container -->

                    <div class="cart-discount">
                        <h4>Apply Discount Code</h4>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                                </div>
                            </div><!-- End .input-group -->
                        </form>
                    </div><!-- End .cart-discount -->
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="cart-summary">
                        <h3>Summary</h3>

                        <h4>
                            <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                        </h4>

                        <div class="collapse" id="total-estimate-section">
                            <form action="#">
                                <div class="form-group form-group-sm">
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

                                <div class="form-group form-group-sm">
                                    <label>State/Province</label>
                                    <div class="select-custom">
                                        <select class="form-control form-control-sm">
                                            <option value="CA">California</option>
                                            <option value="TX">Texas</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-sm">
                                    <label>Zip/Postal Code</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-custom-control">
                                    <label>Flat Way</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="flat-rate">
                                        <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .form-group -->

                                <div class="form-group form-group-custom-control">
                                    <label>Best Rate</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="best-rate">
                                        <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                                    </div><!-- End .custom-checkbox -->
                                </div><!-- End .form-group -->
                            </form>
                        </div><!-- End #total-estimate-section -->

                        <table class="table table-totals">
                            <tbody>
                            @if(isset($totalPrice))
                                <tr>
                                <td>Subtotal</td>
                                <td>${{$totalPrice}}</td>
                            </tr>

                            <tr>
                                <td>Tax</td>
                                <td>$0.00</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td>Order Total</td>
                                <td>${{$totalPrice}}</td>
                            </tr>
                            </tfoot>
                            @endif
                        </table>

                        <div class="checkout-methods">
                            <a href="{{url('checkout')}}" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>
                        </div><!-- End .checkout-methods -->
                    </div><!-- End .cart-summary -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
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

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:33:04 GMT -->
</html>
