<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\xampp\htdocs\hns\public/../application/index\view\advice\index.html";i:1523455743;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1523938232;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1523938655;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1523271222;}*/ ?>
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
<script src="__STATIC__/index/js/jquery-1.8.2.min.js"></script>
<script src="__STATIC__/index/js/common.js"></script>
<script src="__STATIC__/index/js/jquery.easing.1.3.js"></script>
<script src="__STATIC__/index/js/ddsmoothmenu.js"></script>
<script src="__STATIC__/index/js/jquery.flexslider.js"></script>
<script src="__STATIC__/index/js/jquery.elastislide.js"></script>
<script src="__STATIC__/index/js/jquery.jcarousel.min.js"></script>
<script src="__STATIC__/index/js/jquery.accordion.js"></script>
<script src="__STATIC__/index/js/light_box.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".inline").colorbox({inline:true, width:"50%"});});</script>
<!--end js-->

<!-- Mobile Specific Metas ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS ================================================== -->

<link rel="stylesheet" href="__STATIC__/index/css/style.css">
<link rel="stylesheet" href="__STATIC__/index/css/colors.css">
<link rel="stylesheet" href="__STATIC__/index/css/skeleton.css">
<link rel="stylesheet" href="__STATIC__/index/css/layout.css">
<link rel="stylesheet" href="__STATIC__/index/css/ddsmoothmenu.css"/>
<link rel="stylesheet" href="__STATIC__/index/css/elastislide.css"/>
<link rel="stylesheet" href="__STATIC__/index/css/home_flexslider.css"/>
<link rel="stylesheet" href="__STATIC__/index/css/light_box.css"/>
<script src="__STATIC__/index/js/html5.js"></script>

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
                            <li class=""><a href="404_error.html" title="My Account">个人中心</a></li>
                            <li class="my-wishlist"><a href="<?php echo url('buy/index'); ?>" title="My Wishlist">购物车</a></li>
                            <li class="checkout"><a href="404_error.html" title="Checkout">我的订单</a></li>
                            <li class="contact-us"><a href="<?php echo url('advice/index'); ?>" title="Contact Us">关于我们</a></li>
                            <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="Log In">登录/注册</a></li>
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
                      <li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="__STATIC__/index/images/item_icon.png" /></a></li>
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
                    <form action="<?php echo url('search/index'); ?>" method="get">
                      <input name="keywords" type="text" value="" />
                      <input type="submit" value="Search" title="搜索" />
                    </form>
                    </div>
                  </section>
                </div>
                <h1 class="logo"><a href="index-2.html" title="Logo">
                  <img title="Logo" alt="Logo" src="__STATIC__/index/images/logo.png" />
                  </a></h1>
                <nav id="smoothmenu1" class="ddsmoothmenu mainMenu">
                  <ul id="nav">
                    <li class="active"><a href="<?php echo url('index/index'); ?>" title="Home">首页</a></li>
                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class=""><a href="blog.html" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </nav>
              
                
              </header>
            </div>
                <!--Content Block-->
                <section class="content-wrapper">
                	<div class="content-container container">                        
                		<div class="col-left">
                			<div class="block community-block">
                				<div class="block-title">请选择</div>
                				<ul>
                					<li class="question-row">您的宝贵建议是我们前进的动力</li>
                                    <li class="question-row">客服电话：1390000008</li>
                                    <li class="question-row">有问题请联系客服或反馈</li>
                				</ul>
                			</div>
                		</div>
                        <form action="<?php echo url('advice/save'); ?>" method="post">
                		<div  class="col-main">
                			<h1 class="page-title">给我们的建议</h1>
                			<div class="contact-form-container">
                				<div  class="form-title">请填写下列信息</div>
                				<ul class="form-fields">
                					<li class="left">
                						<label>您的名字<em>*</em></label>
                						<input id="name" name="name" type="text">
                					</li>
                					<li class="left">
                						<label>邮箱<em>*</em></label>
                						<input id="email" name="email" type="text">
                					</li>
                					<li class="left">
                						<label>手机号</label>
                						<input id="phone" name="phone" type="text">
                					</li>
                					<li class="full-row">
                						<label>建议<em>*</em></label>
                						<textarea name="advicetext"></textarea>
                					</li>
                				</ul>
                				<div class="button-set">
                					<p class="required">* 为必须填写</p>
                					<button type="submit" class="form-button"><span>提交</span></button>
                				</div>
                			</div>
                		</div>
                        </form>
                		<div class="clearfix"></div>
                		<div class="news-letter-container">
                		</div>	
                	</div>
                </section>
                </div>
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