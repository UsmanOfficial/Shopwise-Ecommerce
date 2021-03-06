<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bestwebcreator.com/shopwise/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Oct 2021 14:24:59 GMT -->
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kid's Products, Electronics, Stationery Products and Sporting Goods.">
<meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

<!-- SITE TITLE -->
<title>Shopwise - eCommerce Bootstrap 4 HTML Template</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('fassets/images/favicon.png')}}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{asset('fassets/css/animate.css')}}">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{asset('fassets/bootstrap/css/bootstrap.min.css')}}">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{asset('fassets/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/linearicons.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/simple-line-icons.css')}}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{asset('fassets/owlcarousel/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('fassets/owlcarousel/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('fassets/owlcarousel/css/owl.theme.default.min.css')}}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('fassets/css/magnific-popup.css')}}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{asset('fassets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/slick-theme.css')}}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('fassets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('fassets/css/responsive.css')}}">

<!-- Hotjar Tracking Code for bestwebcreator.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2073024,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
@livewireStyles
</head>

<body>


<!-- START HEADER -->
<header class="header_wrap">
	<div class="top-header d-none d-md-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                	<div class="header_topbar_info">
                    	<div class="header_offer">
                    		<span>Free Ground Shipping Over $250</span>
                        </div>
                        <div class="download_wrap">
                            <span class="mr-3">Download App</span>
                            <ul class="icon_list text-center text-lg-left">
                                <li><a href="#"><i class="fab fa-apple"></i></a></li>
                                <li><a href="#"><i class="fab fa-android"></i></a></li>
                                <li><a href="#"><i class="fab fa-windows"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                	<div class="d-flex align-items-center justify-content-center justify-content-md-end">
                        @if (Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                <div class="col-md-4">  
                                <a href="" title="My Account">Hi! {{Auth::user()->name}} </a>
                                    <div class="col-md-1"></div>
                                    <ul><li><a href=" {{route('admin.dashboard')}}" style="list-style-type: none" title="Dashboard">Dashboard</a>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                        @csrf
                                    </form>
                                </div> 
                                @else
                                <div class="col-md-4">
                                <a href="" title="My Account">Hi! {{Auth::user()->name}}</a>
                                    <a href=" {{route('user.dashboard')}}" style="list-style-type: none" title="Dashboard">Dashboard</a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form') .submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post">
                                            @csrf
                                        </form>
                                </div>
                                @endif
                            @else
                        <a href="{{ route('login') }}">Login</a>
                        <div class="col-md-1"></div>
                        <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
    	<div class="container">
        	<div class="nav_block">
                <a class="navbar-brand" href="index.html">
                    <img class="logo_light" src="{{asset('fassets/images/logo_light.png')}}" alt="logo" />
                    <img class="logo_dark" src="{{asset('fassets/images/logo_dark.png')}}" alt="logo" />
                </a>
                <div class="contact_phone order-md-last">
                    <i class="linearicons-phone-wave"></i>
                    <span>123-456-7689</span>
                </div>
                <div class="product_search_form">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null">
                                        <option value="">All Category</option>
                                        <option value="Dresses">Dresses</option>
                                        <option value="Shirt-Tops">Shirt & Tops</option>
                                        <option value="T-Shirt">T-Shirt</option>
                                        <option value="Pents">Pents</option>
                                        <option value="Jeans">Jeans</option>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" placeholder="Search Product..." required=""  type="text">
                            <button type="submit" class="search_btn"><i class="linearicons-magnifier"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header light_skin main_menu_uppercase bg_dark">
        <div class="col-lg-9 col-md-8 col-sm-6 col-9">
            <nav class="navbar navbar-expand-lg " >
               
                <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="nav-link active" href="{{url('/')}}">HOME</a>
                            </li>
                        <li class="dropdown">
                            <a class="nav-link" href="{{ url('/about') }}">ABOUT US</a>
                            
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="nav-link" href="{{ url('/shop') }}">SHOP</a>
                            <div class="dropdown-menu">
                                
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="{{ url('/checkout') }}">CHECKOUT</a>
                            
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="nav-link" href="{{ url('/cart') }}">CART</a>
                            <div class="dropdown-menu">
                                
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="{{ url('/contact') }}">CONTACT US</a></li> 
                    </ul>
                </div>
                
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="#" class="nav-link"><i class="linearicons-user"></i></a></li>
                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i>
                        @if (Cart::count() > 0)
                        <span class="cart_count">{{Cart::count()}}</span>
                        @endif
                    </a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            @foreach ($products as $p)
                                
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{asset('fassets/images/cart_thamb1.jpg')}}" alt="cart_thumb1">{{$p->name}}</a>
                                    <span class="cart_quantity"> {{$p->quantity}} x <span class="cart_amount"> <span class="price_symbole">$</span></span>{{{$p->regular_price}}}</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="{{asset('fassets/images/cart_thamb2.jpg')}}" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            @endforeach

                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                    
                </ul>
                <div class="pr_search_icon">
                    <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                </div>
            </nav>
        </div>
    </div>    
</header>

<!-- END HEADER -->

        {{$slot}}
               
        <!-- START FOOTER -->
<footer class="bg_gray">
	<div class="footer_top small_pt pb_20">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('fassets/images/logo_dark.png')}}" alt="logo"/></a>
                        </div>
                        <p class="mb-3">If you are going to use of Lorem Ipsum need to be sure there isn't anything hidden of text</p>
                        <ul class="contact_info">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, NewYork, USA</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
        		</div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                	<div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Instagram</h6>
                        <ul class="widget_instafeed instafeed_col4">
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img1.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img2.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img3.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img4.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img5.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img6.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img7.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            <li><a href="#"><img src="{{asset('fassets/images/insta_img8.jpg')}}" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="shopping_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-shipped"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>Free Delivery</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-money-back"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>30 Day Returns Guarantee</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="icon_box_content">
                                    	<h5>27/4 Online Support</h5>
                                        <p>Phasellus blandit massa enim elit of passage varius nunc.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center">?? 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                	<div class="widget mb-lg-0">
                        <ul class="social_icons text-center text-lg-left">
                            <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="{{asset('fassets/images/visa')}}" alt="visa"></a></li>
                        <li><a href="#"><img src="{{asset('fassets/images/discover')}}" alt="discover"></a></li>
                        <li><a href="#"><img src="{{asset('fassets/images/master_card')}}" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{asset('fassets/images/paypal')}}" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{asset('fassets/images/amarican_express')}}" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="{{asset('fassets/js/jquery-3.6.0.min.js')}}"></script> 
<!-- popper min js -->
<script src="{{asset('fassets/js/popper.min.js')}}"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="{{asset('fassets/bootstrap/js/bootstrap.min.js')}}"></script> 
<!-- owl-carousel min js  --> 
<script src="{{asset('fassets/owlcarousel/js/owl.carousel.min.js')}}"></script> 
<!-- magnific-popup min js  --> 
<script src="{{asset('fassets/js/magnific-popup.min.js')}}"></script> 
<!-- waypoints min js  --> 
<script src="{{asset('fassets/js/waypoints.min.js')}}"></script> 
<!-- parallax js  --> 
<script src="{{asset('fassets/js/parallax.js')}}"></script> 
<!-- countdown js  --> 
<script src="{{asset('fassets/js/jquery.countdown.min.js')}}"></script> 
<!-- imagesloaded js --> 
<script src="{{asset('fassets/js/imagesloaded.pkgd.min.js')}}"></script>
<!-- isotope min js --> 
<script src="{{asset('fassets/js/isotope.min.js')}}"></script>
<!-- jquery.dd.min js -->
<script src="{{asset('fassets/js/jquery.dd.min.js')}}"></script>
<!-- slick js -->
<script src="{{asset('fassets/js/slick.min.js')}}"></script>
<!-- elevatezoom js -->
<script src="{{asset('fassets/js/jquery.elevatezoom.js')}}"></script>
<!-- scripts js --> 
<script src="{{asset('fassets/js/scripts.js')}}"></script>
@livewireScripts
</body>

<!-- Mirrored from bestwebcreator.com/shopwise/demo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Oct 2021 14:25:39 GMT -->
</html>

