
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_1/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2020 05:28:20 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/fredLogo.jpg')}}">

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>
<body class="full-screen-slider">
<div class="page-wrapper">
    <div class="top-notice text-white bg-dark">
        <div class="container text-center">
            <h5 class="ls-n-10 mb-0">Fro more info contact <b>fredrickokumu79@yahoo.com</b> or <b>+254713196983</b></h5>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div><!-- End .container -->
    </div><!-- End .top-notice -->

    <header class="header header-transparent">
        <div class="header-middle">
            <div class="container">
                <div class="header-left">
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{asset('assets/images/fredLogo.jpg')}}" alt="FRED FISHING FLIES"><h5>Fred Fishing Flies</h5>
                    </a>

                    <nav class="main-nav font2">
                        <ul class="menu">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('shop')}}">Shop</a>
                            </li>
                            <li>
                                <a href="{{url('aboutUs')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{url('contactUs')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{url('login')}}">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End .header-left -->

                <div class="header-right">
                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>

                    <a href="login.html" class="header-icon login-link"><i class="icon-user-2"></i></a>

                    <a href="#" class="header-icon"><i class="icon-wishlist-2"></i></a>

                    <div class="header-search header-search-popup header-search-category d-none d-sm-block">
                        <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required="">
                                <div class="select-custom">
                                    <select id="cat" name="cat">
                                        <option value="">All Categories</option>
                                        <option value="4">Fashion</option>
                                        <option value="12">- Women</option>
                                        <option value="13">- Men</option>
                                        <option value="66">- Jewellery</option>
                                        <option value="67">- Kids Fashion</option>
                                        <option value="5">Electronics</option>
                                        <option value="21">- Smart TVs</option>
                                        <option value="22">- Cameras</option>
                                        <option value="63">- Games</option>
                                        <option value="7">Home &amp; Garden</option>
                                        <option value="11">Motors</option>
                                        <option value="31">- Cars and Trucks</option>
                                        <option value="32">- Motorcycles &amp; Powersports</option>
                                        <option value="33">- Parts &amp; Accessories</option>
                                        <option value="34">- Boats</option>
                                        <option value="57">- Auto Tools &amp; Supplies</option>
                                    </select>
                                </div><!-- End .select-custom -->
                                <button class="btn bg-dark icon-search-3" type="submit"></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div>

                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count badge-circle">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                        </a>

                        <div class="dropdown-menu" >
                            <div class="dropdownmenu-wrapper">
                                <div class="dropdown-cart-header">
                                    <span>{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}} Items</span>

                                    <a href="{{url('cart')}}" class="float-right">View Cart</a>
                                </div><!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="{{url('productDetail',$product['item']['id'])}}">{{$product['item']['stock_name']}}</a>
                                            </h4>

                                            <span class="cart-product-info">
													<span class="cart-product-qty">{{$product['quantity']}}</span>
													x ${{$product['item']['stock_price']}}
												</span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="{{url('productDetail',$product['item']['id'])}}" class="product-image">
                                                <img src="{{asset('uploads/product/'.$product['item']['stock_image'])}}" alt="product" width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
                                        </figure>
                                    </div><!-- End .product -->
                                        @endforeach
                                    @endif

                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price float-right">${{$totalPrice}}</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{url('checkout')}}" class="btn btn-primary btn-block">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->
