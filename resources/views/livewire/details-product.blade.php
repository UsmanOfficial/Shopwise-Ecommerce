<div>
    <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row align-items-center">
        	<div class="col-md-6">
                <div class="page-title">
            		<h1>Product Detail Right Sidebar</h1>
                </div>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Product Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<!-- START MAIN CONTENT -->
<div class="main_content">

<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-xl-9 col-lg-8">
				<div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
						<div class="product-image">
                            <div class="product_img_box">
                                <img id="product_img" src='{{asset('fassets/images')}}/{{$product->image}}' altdata-zoom-image="{{asset('fassets/images/product_zoom_img1.jpg')}}" alt="{{$product->name}}" />
                                <a href="#" class="product_img_zoom" title="Zoom">
                                    <span class="linearicons-zoom-in"></span>
                                </a>
                            </div>
                            {{-- <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="{{asset('fassets/images/product_img1.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img1.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img1.jpg')}}" alt="product_small_img1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="{{asset('fassets/images/product_img1-2.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img2.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img2.jpg')}}" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="{{asset('fassets/images/product_img1-3.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img3.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img3.jpg')}}" alt="product_small_img3" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="{{asset('fassets/images/product_img1-4.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img4.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img4.jpg')}}" alt="product_small_img4" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item active" data-image="{{asset('fassets/images/product_img1.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img1.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img1.jpg')}}" alt="product_small_img1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="{{asset('fassets/images/product_img1-2.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img2.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img2.jpg')}}" alt="product_small_img2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#" class="product_gallery_item" data-image="{{asset('fassets/images/product_img1-3.jpg')}}" data-zoom-image="{{asset('fassets/images/product_zoom_img3.jpg')}}">
                                        <img src="{{asset('fassets/images/product_small_img3.jpg')}}" alt="product_small_img3" />
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pr_detail">
                            <div class="product_description">
                                <h4 class="product_title"><a href="#">{{$product->name}}</a></h4>
                                <div class="product_price">
                                    <span class="price">PKR. {{$product->regular_price}}</span>
                                    <del>$55.25</del>
                                    <div class="on_sale">
                                        <span>35% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:80%"></div>
                                        </div>
                                        <span class="rating_num">(21)</span>
                                    </div>
                                <div class="pr_desc">
                                    {{$product->short_description}}
                                </div>
                                <div class="product_sort_info">
                                    <ul>
                                        <li><i class="linearicons-shield-check"></i> 1 Year AL Jazeera Brand Warranty</li>
                                        <li><i class="linearicons-sync"></i> 30 Day Return Policy</li>
                                        <li><i class="linearicons-bag-dollar"></i> Cash on Delivery available</li>
                                    </ul>
                                </div>
                                <div class="pr_switch_wrap">
                                    <span class="switch_lable">Color</span>
                                    <div class="product_color_switch">
                                        <span class="active" data-color="#87554B"></span>
                                        <span data-color="#333333"></span>
                                        <span data-color="#DA323F"></span>
                                    </div>
                                </div>
                                <div class="pr_switch_wrap">
                                    <span class="switch_lable">Availability</span>
                                    
                                       <span>{{ $product->stock_status }}</span>
                                    
                                </div>
                            </div>
                            <hr />
                            <div class="cart_extra">
                                <div class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" value="-" class="minus">
                                        <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                        <input type="button" value="+" class="plus">
                                    </div>
                                </div>
                                <div class="cart_btn">
                                    <button class="btn btn-fill-out btn-addtocart" type="submit"><i class="icon-basket-loaded" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})"></i> Add to cart</button>
                                    <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                    <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                                </div>
                            </div>
                            <hr />
                            <ul class="product-meta">
                                <li>SKU: <a href="#">{{$product->SKU}}</a></li>
                                <li>Category: <a href="#">Clothing</a></li>
                                <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                            </ul>
                            
                            <div class="product_share">
                                <span>Share:</span>
                                <ul class="social_icons">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="row">
                    <div class="col-12">
                        <div class="large_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-style3">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                                </li>
                            </ul>
                            <div class="tab-content shop_info_tab">
                                <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                {{$product->description}}    
                                </div>
                                <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Capacity</td>
                                            <td>5 Kg</td>
                                        </tr>
                                        <tr>
                                            <td>Color</td>
                                            <td>Black, Brown, Red,</td>
                                        </tr>
                                        <tr>
                                            <td>Water Resistant</td>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <td>Material</td>
                                            <td>Artificial Leather</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                    <div class="comments">
                                        <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                        <ul class="list_none comment_list mt-4">
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{asset('fassets/images/user1.jpg')}}" alt="user1"/>
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:80%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Alea Brooks</span>
                                                        <span class="comment-date">March 5, 2018</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="comment_img">
                                                    <img src="{{asset('fassets/images/user2.jpg')}}" alt="user2"/>
                                                </div>
                                                <div class="comment_block">
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width:60%"></div>
                                                        </div>
                                                    </div>
                                                    <p class="customer_meta">
                                                        <span class="review_author">Grace Wong</span>
                                                        <span class="comment-date">June 17, 2018</span>
                                                    </p>
                                                    <div class="description">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review_form field_form">
                                        <h5>Add a review</h5>
                                        <form class="row mt-3">
                                            <div class="form-group col-12">
                                                <div class="star_rating">
                                                    <span data-value="1"><i class="far fa-star"></i></span>
                                                    <span data-value="2"><i class="far fa-star"></i></span> 
                                                    <span data-value="3"><i class="far fa-star"></i></span>
                                                    <span data-value="4"><i class="far fa-star"></i></span>
                                                    <span data-value="5"><i class="far fa-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-12">
                                                <textarea required="required" placeholder="Your review *" class="form-control" name="message" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input required="required" placeholder="Enter Name *" class="form-control" name="name" type="text">
                                             </div>
                                            <div class="form-group col-md-6">
                                                <input required="required" placeholder="Enter Email *" class="form-control" name="email" type="email">
                                            </div>
                                           
                                            <div class="form-group col-12">
                                                <button type="submit" class="btn btn-fill-out" name="submit" value="Submit">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        		<div class="row">
                    <div class="col-12">
                        <div class="small_divider"></div>
                        <div class="divider"></div>
                        <div class="medium_divider"></div>
                    </div>
                </div>
        		<div class="row">
                    <div class="col-12">
                        <div class="heading_s1">
                            <h3>Releted Products</h3>
                        </div>
                        <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "992":{"items": "2"}, "1199":{"items": "3"}}'>
                            <div class="item">
                                <div class="product">
                                    @foreach ($related_products as $r_product)
                                    <div class="product_img">
                                        <a href="{{ route('product.details',['slug' => $r_product->slug]) }}"><img src="{{asset('fassets/images')}}/{{$r_product->image}}" class="mx-auto" alt="product_img1"></a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                                <li><a href="shop-compare.html"><i class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="{{ route('product.details',['slug' => $r_product->slug]) }}">{{$r_product->name}}</a></h6>
                                        <div class="product_price">
                                            <span class="price">PKR. {{$r_product->regular_price}}</span>
                                            <del>$55.25</del>
                                            <div class="on_sale">
                                                <span>35% Off</span>
                                            </div>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            {{$r_product->short_description}}
                                        </div>
                                        <div class="pr_switch_wrap">
                                            <div class="product_color_switch">
                                                <span class="active" data-color="#87554B"></span>
                                                <span data-color="#333333"></span>
                                                <span data-color="#DA323F"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 mt-4 pt-2 mt-lg-0 pt-lg-0">
            	<div class="sidebar">
                	<div class="widget">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="widget_categories">
                            <li><a href="#"><span class="categories_name">Women</span><span class="categories_num">(9)</span></a></li>
                            <li><a href="#"><span class="categories_name">Top</span><span class="categories_num">(6)</span></a></li>
                            <li><a href="#"><span class="categories_name">T-Shirts</span><span class="categories_num">(4)</span></a></li>
                            <li><a href="#"><span class="categories_name">Men</span><span class="categories_num">(7)</span></a></li>
                            <li><a href="#"><span class="categories_name">Shoes</span><span class="categories_num">(12)</span></a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widget_title">Popular Products</h5>
                        @foreach ($popular_products as $p_product)
                        <ul class="widget_recent_post">
                            
                            <li>
                                <div class="post_img">
                                    <a href="{{ route('product.details',['slug' => $p_product->slug]) }}"><img src="{{asset('fassets/images')}}/{{$p_product->image}} " alt="shop_small1"></a>
                                </div>
                                <div class="post_content">
                                    <h6 class="product_title"><a href="{{ route('product.details',['slug' => $p_product->slug]) }}">{{$p_product->name}}</a></h6>
                                    <div class="product_price"><span class="price">PKR. {{$p_product->regular_price}} </span><del>$95.00</del></div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:68%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li>
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('fassets/images/shop_small2.jpg')}}" alt="shop_small2"></a>
                                </div>
                                <div class="post_content">
                                    <h6 class="product_title"><a href="shop-product-detail-left-sidebar.html">woman full sliv dress</a></h6>
                                    <div class="product_price"><span class="price">$68.00</span><del>$99.00</del></div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:87%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="post_img">
                                    <a href="#"><img src="{{asset('fassets/images/shop_small3.jpg')}}" alt="shop_small3"></a>
                                </div>
                                <div class="post_content">
                                    <h6 class="product_title"><a href="shop-product-detail-left-sidebar.html">light blue Shirt</a></h6>
                                    <div class="product_price"><span class="price">$69.00</span><del>$89.00</del></div>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width:70%"></div>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            
                        </ul>
                        @endforeach
                    </div>
                    <div class="widget">
                    	<h5 class="widget_title">tags</h5>
                        <div class="tags">
                        	<a href="#">General</a>
                            <a href="#">Design</a>
                            <a href="#">jQuery</a>
                            <a href="#">Branding</a>
                            <a href="#">Modern</a>
                            <a href="#">Blog</a>
                            <a href="#">Quotes</a>
                            <a href="#">Advertisement</a>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="shop_banner">
                            <div class="banner_img overlay_bg_20">
                                <img src="{{asset('fassets/images/sidebar_banner_img.jpg')}}" alt="sidebar_banner_img">
                            </div> 
                            <div class="shop_bn_content2 text_white">
                                <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->

<!-- START SECTION SUBSCRIBE NEWSLETTER -->
<div class="section bg_default small_pt small_pb">
	<div class="container">	
    	<div class="row align-items-center">	
            <div class="col-md-6">
                <div class="heading_s1 mb-md-0 heading_light">
                    <h3>Subscribe Our Newsletter</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="newsletter_form">
                    <form>
                        <input type="text" required="" class="form-control rounded-0" placeholder="Enter Email Address">
                        <button type="submit" class="btn btn-dark rounded-0" name="submit" value="Submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION SUBSCRIBE NEWSLETTER -->

</div>
<!-- END MAIN CONTENT -->
</div>