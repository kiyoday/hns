<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\xampp\htdocs\hns\public/../application/index\view\index\index.html";i:1523189775;s:59:"D:\xampp\htdocs\hns\application\index\view\public\head.html";i:1522667923;s:61:"D:\xampp\htdocs\hns\application\index\view\public\header.html";i:1523184165;s:61:"D:\xampp\htdocs\hns\application\index\view\public\footer.html";i:1521878099;}*/ ?>
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Megashop</title>

<!--js-->
<script src="/hns/public/static/index/js/jquery-1.8.2.min.js"></script>
<script src="/hns/public/static/index/js/common.js"></script>
<script src="/hns/public/static/index/js/jquery.easing.1.3.js"></script>
<script src="/hns/public/static/index/js/ddsmoothmenu.js"></script>
<script src="/hns/public/static/index/js/jquery.flexslider.js"></script>
<script src="/hns/public/static/index/js/jquery.elastislide.js"></script>
<script src="/hns/public/static/index/js/jquery.jcarousel.min.js"></script>
<script src="/hns/public/static/index/js/jquery.accordion.js"></script>
<script src="/hns/public/static/index/js/light_box.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".inline").colorbox({inline:true, width:"50%"});});</script>
<!--end js-->

<!-- Mobile Specific Metas ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS ================================================== -->

<link rel="stylesheet" href="/hns/public/static/index/css/style.css">
<link rel="stylesheet" href="/hns/public/static/index/css/colors.css">
<link rel="stylesheet" href="/hns/public/static/index/css/skeleton.css">
<link rel="stylesheet" href="/hns/public/static/index/css/layout.css">
<link rel="stylesheet" href="/hns/public/static/index/css/ddsmoothmenu.css"/>
<link rel="stylesheet" href="/hns/public/static/index/css/elastislide.css"/>
<link rel="stylesheet" href="/hns/public/static/index/css/home_flexslider.css"/>
<link rel="stylesheet" href="/hns/public/static/index/css/light_box.css"/>
<script src="/hns/public/static/index/js/html5.js"></script>

<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	<div class="mainContainer sixteen container">
            <!--Header Block-->
                        <div class="header-wrapper">
              <header class="container">
                <div class="head-right">
                      <ul class="top-nav">
                            <li class=""><a href="404_error.html" title="My Account">我的账户</a></li>
                            <li class="my-wishlist"><a href="404_error.html" title="My Wishlist">购物车</a></li>
                            <li class="checkout"><a href="404_error.html" title="Checkout">我的订单</a></li>
                            <li class="contact-us"><a href="<?php echo url('advice/index'); ?>" title="Contact Us">关于我们</a></li>
                            <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="Log In">登录</a></li>
                            <li class="checkout"><a href="<?php echo url('user/register'); ?>" title="Checkout">注册</a></li>
                            </ul>
                            <ul class="currencyBox">
                                  <li id="header_currancy" class="currency"> <a class="mainCurrency" href="#">我要卖书</a>
                                <div id="currancyBox" class="currency_detial"> <a href="<?php echo url('book/index'); ?>">卖书登记</a> <a href="#">卖书信息</a> <a href="#">提现</a> 
                                </div>
                              </li>
                            </ul>
                  <section class="header-bottom">
                    <div class="cart-block">
                     <ul>
                      <li>( )</li>
                      <li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="/hns/public/static/index/images/item_icon.png" /></a></li>
                      <li>购物车</li>
                     </ul>
                   <div id="minicart" class="remain_cart" style="display: none;">
                    <p class="empty">You have 2 items in your shopping cart.</p>
                    <ol>
                    <li>
                    <div class="img-block"><img src="images/small_img.png" title="" alt="" /></div>
                    <div class="detail-block">
                       <h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
                       <p>
                      <strong>1</strong> x $900.00
                       </p>
                       <a href="#" title="Details">Details</a>
                      </div>
                      <div class="edit-delete-block">
                            <a href="#" title="Edit"><img src="images/edit_icon.png" alt="Edit" title="Edit" /></a>
                            <a href="#" title="Remove"><img src="images/delete_item_btn.png" alt="Remove" title="Remove" /></a>
                          </div>
                        </li>
                        <li>
                          <div class="img-block"><img src="images/small_img.png" title="" alt="" /></div>
                          <div class="detail-block">
                            <h4><a href="#" title="Htc Mobile 1120">Htc Mobile 1120</a></h4>
                            <p>
                              <strong>1</strong> x $900.00
                            </p>
                            <a href="#" title="Details">Details</a>
                          </div>
                          <div class="edit-delete-block">
                            <a href="#" title="Edit"><img src="images/edit_icon.png" alt="Edit" title="Edit" /></a>
                            <a href="#" title="Remove"><img src="images/delete_item_btn.png" alt="Remove" title="Remove" /></a>
                          </div>
                        </li>
                        <li>
                          <div class="total-block">Total:<span>$1,900.00</span></div>
                          <a href="cart.html" title="Checkout" class="colors-btn">Checkout</a>
                          <div class="clear"></div>
                        </li>
                       </ol>
                    </div>
                  </div>
                  <div class="search-block">
                      <input type="text" value="" />
                      <input type="submit" value="Search" title="搜索" />
                    </div>
                  </section>
                </div>
                <h1 class="logo"><a href="index-2.html" title="Logo">
                  <img title="Logo" alt="Logo" src="/hns/public/static/index/images/logo.png" />
                  </a></h1>
                <nav id="smoothmenu1" class="ddsmoothmenu mainMenu">
                  <ul id="nav">
                    <li class="active"><a href="index.html" title="Home">首页</a></li>
                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class=""><a href="blog.html" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </nav>
              
                
              </header>
            </div>
            <!--Banner Block-->
            <section class="banner-wrapper">
              <div class="banner-block container">
                <div class="flexslider">
                  <ul class="slides">
                    <li><img title="Banner" alt="Banner" src="images/banner1.jpg" /></li>
                    <li><img title="Banner" alt="Banner" src="images/banner2.jpg"></li>
                    <li><img title="Banner" alt="Banner" src="images/banner3.jpg" /></li>
                    <li><img title="Banner" alt="Banner" src="images/banner4.jpg" /></li>
                  </ul>
                </div>
                <ul class="banner-add">
                  <li class="add1"><a href="#" title=""><img title="add1" alt="add1" src="images/hns/public/static1.jpg" /></a></li>
                  <li class="add2"><a href="#" title=""><img title="add2" alt="add2" src="images/hns/public/static2.jpg" /></a></li>
                </ul>
              </div>
            </section>
            <!--Content Block-->
            <section class="content-wrapper">
              <div class="content-container container">
                <div class="heading-block">
                  <h1>推荐书籍</h1>
                  <ul class="pagination">
                    <li class="grid"><a href="#" title="Grid">Grid</a></li>
                  </ul>
                </div>
                <div class="feature-block">
                  <ul id="mix" class="product-grid">
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
      				<li>
                      <div class="pro-img"><img title="Freature Product" alt="Freature Product" src="images/default_img.png" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name">Htc One 1120</h4>
                        <div class="link-block"> 
                        <a href="#quick-view-container" class="quickllook inline" title="Quick View">Quick View</a> 
                        <a href="view.html" class="quickproLink" title="Link">Product link</a></div>
                        <div class="pro-price">$600.00</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="heading-block">
                  <h1>当前类别</h1>
                </div>
                <div class="new-product-block">
                  <ul class="product-grid">
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> 
                      <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> 
                      <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                  </ul>
                  <ul class="product-grid">
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                    <li>
                      <div class="pro-img">
                        <img title="Freature Product" alt="Freature Product" src="images/default_img.png" />
                      </div>
                      <div class="pro-content">
                        <p>White Round Neck T-Shirt</p>
                      </div>
                      <div class="pro-price">$600.00</div>
                      <div class="pro-btn-block"> <a class="add-cart left" href="#" title="Add to Cart">Add to Cart</a> <a class="add-cart right quickCart inline" href="#quick-view-container" title="Quick View">Quick View</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist">Add to wishlist</a> <a class="add-compare right" href="#" title="Add to Compare">Add to Compare</a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
    </div> 
    <!--Quick view Block-->
<script type="text/javascript">
jQuery (function(){
	var tabContainers=jQuery('div.tabs > div');
	tabContainers.hide().filter(':first').show();
	jQuery('div.tabs ul.tabNavigation a').click(function(){
		tabContainers.hide();
		tabContainers.filter(this.hash).show();
		jQuery('div.tabs ul.tabNavigation a').removeClass('selected');
		jQuery(this).addClass('selected');
		return false;
		}).filter(':first').click();
	});
</script>
<article style="display:none;">
	<section id="quick-view-container" class="quick-view-wrapper">
	<div class="quick-view-container">
		<div class="quick-view-left">
			<h2>Sunglass RB3184</h2>
			<div class="product-img-box">
				<p class="product-image">
					<img src="images/sale_icon_img.png" title="Sale" alt="Sale" class="sale-img" />
					<a href="view.html" title="Image"><img src="images/quick_view_img.png" title="Image" alt="Image" /></a>				</p>
				<ul class="thum-img">
					<li><img  src="images/quick_thum_img.png" title="" alt="" /></li>
					<li><img  src="images/quick_thum_img.png" title="" alt="" /></li>
				</ul>
			</div>
		</div>
		<div class="quick-view-right tabs">
			<ul class="tab-block tabNavigation">
				<li><a class="selected" title="Overview" href="#tabDetail">Overview</a></li>
				<li><a title="Description" href="#tabDes">Description</a></li>
			</ul>
			<div id="tabDetail" class="tabDetail">
            	<div class="first-review">Be the first to review this product</div>
			<div class="price-box">
				<span class="price">$600.00</span>			</div>
			<div class="availability">In stock</div>
			<div class="color-size-block">
				<div class="label-row">
					<label><em>*</em> color</label>
					<span class="required">* Required Fields</span>				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
				<div class="label-row">
					<label><em>*</em> size</label>
				</div>
				<div class="select-row">
					<select><option>-- Please Select --</option></select>
				</div>
			</div>
			<div class="add-to-cart-box">
				<span class="qty-box">
					<label for="qty">Qty:</label>
					<a class="prev" title="" href="#"><img alt="" title="" src="images/qty_prev.png"></a>
					<input type="text" name="qty" class="input-text qty" id="qty" maxlength="12" value="1">
					<a class="next" title="" href="#"><img alt="" title="" src="images/qty_next.png"></a>				</span>
				<button title="Add to Cart" class="form-button"><span>Add to Cart</span></button>
			</div>
            </div>
            <div id="tabDes" class="tabDes">
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat odio, suscipit eu porta et, ultricies id sapien. Quisque posuere odio eget lectus suscipit sodales. Sed consequat, leo ut varius scelerisque, augue massa tincidunt est, et tincidunt enim tortor a metus. In sit amet diam in tellus tincidunt mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi hendrerit eleifend tortor, a dapibus tellus suscipit porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mollis adipiscing mi et volutpat. Aliquam vitae dui nunc. Nulla ac ante eu massa dictum volutpat. Sed mauris sem, posuere sit amet pretium consectetur, ullamcorper vel orci. Aenean feugiat luctus lectus ac hendrerit. Fusce pulvinar, mauris eget sodales suscipit, diam neque condimentum lectus, id imperdiet felis turpis egestas neque. In aliquet orci eget nisl sollicitudin sed gravida tortor commodo</p>
            </div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
</article>     
           <!--Footer Block-->  
            <!--Footer Block-->
            <section class="footer-wrapper">
              <footer class="container">
                <div class="link-block">
                  <ul>
                    <li class="link-title"><a href="about_us.html" title="ABOUT US">ABOUT US</a></li>
                    <li><a href="about_us.html" title="About Us">About Us</a></li>
                    <li><a href="#" title="Customer Service">Customer Service</a></li>
                    <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="CUSTOMER SERVICES">CUSTOMER SERVICES</a></li>
                    <li><a href="#" title="Shipping & Returns">Shipping & Returns</a></li>
                    <li><a href="#" title="Secure Shopping">Secure Shopping</a></li>
                    <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="TERMS & CONDITIONS">TERMS & CONDITIONS</a></li>
                    <li><a href="#" title="Press Room">Press Room</a></li>
                    <li><a href="#" title="Help">Help</a></li>
                    <li><a href="#" title="Terms & Conditions">Terms & Conditions</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="ABOUTUS">ABOUT US</a></li>
                    <li class="aboutus-block">Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Vivamus sit
                      amet ligula lectus, a mollis diam. Nulla
                      porttitor pulvinar elit... <a href="about_us.html" title="read more">read more</a> </li>
                  </ul>
                  <ul class="stay-connected-blcok">
                    <li class="link-title"><a href="#" title="STAY CONNECTED...">STAY CONNECTED...</a></li>
                    <li>
                         <ul class="social-links">
                            <li><a data-tooltip="Like us on facebook" href="#"><img alt="facebook" src="images/facebook.png"></a></li>
                            <li><a data-tooltip="Subscribe to RSS feed" href="#"><img alt="RSS" src="images/rss.png"></a></li>
                            <li><a data-tooltip="Follow us on twitter" href="#"><img alt="twitter" src="images/twitter.png"></a></li>
                            <li><a data-tooltip="Follow us on Dribbble" href="#"><img alt="dribbble" src="images/dribbble.png"></a></li>
                            <li><a data-tooltip="Follow us on Youtube" href="#"><img alt="youtube" src="images/youtube.png"></a></li>
                            <li><a data-tooltip="Follow us on skype" href="#"><img alt="skype" src="images/skype.png"></a></li>
                         </ul>
                         <div class="payment-block"><img src="images/payment.png" alt="payment"></div>
                    </li>
                  </ul>
                </div>
                <div class="footer-bottom-block">
                  <ul class="bottom-links">
                    <li><a href="index-2.html" title="Home">HOME</a></li>
                    <li><a href="#" title="Pages">PAGES</a></li>
                    <li><a href="about_us.html" title="About">ABOUT</a></li>
                    <li><a href="contact_us.html" title="Contact">CONTACT</a></li>
                  </ul>
                  <p class="copyright-block">© 2012 Magento Demo Store, All Rights Reserved.Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">开心果</a></p>
                </div>
              </footer>
            </section>
</body>
</html>