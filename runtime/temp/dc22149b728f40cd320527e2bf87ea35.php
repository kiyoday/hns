<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\xampp\htdocs\hns\public/../application/index\view\user\register.html";i:1522578908;s:59:"D:\xampp\htdocs\hns\application\index\view\public\head.html";i:1521958267;s:61:"D:\xampp\htdocs\hns\application\index\view\public\header.html";i:1521877610;s:61:"D:\xampp\htdocs\hns\application\index\view\public\footer.html";i:1521878099;}*/ ?>
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
                           <li class="checkout"><a href="account_create.html" title="Checkout">注册</a></li>
                            <li class=""><a href="404_error.html" title="My Account">我的账户</a></li>
                            <li class="my-wishlist"><a href="404_error.html" title="My Wishlist">手机客户端</a></li>
                            <li class="contact-us"><a href="contact_us.html" title="Contact Us">联系客服</a></li>
                            <li class="checkout"><a href="404_error.html" title="Checkout">我的订单</a></li>
                            <li class="log-in"><a href="account_login.html" title="Log In">登录</a></li>
                            </ul>
                      <ul class="currencyBox">
                            <li id="header_currancy" class="currency"> <a class="mainCurrency" href="#">我要卖书</a>
                          <div id="currancyBox" class="currency_detial"> <a href="#">卖书登记</a> <a href="#">卖书信息</a> <a href="#">提现</a> 
                          </div>
                        </li>
                      </ul>
                  <section class="header-bottom">
                    <div class="cart-block">
                     <ul>
                      <li>( )</li>
                      <li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="images/item_icon.png" /></a></li>
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
                  <img title="Logo" alt="Logo" src="images/logo.png" />
                  </a></h1>
                <nav id="smoothmenu1" class="ddsmoothmenu mainMenu">
                  <ul id="nav">
                    <li class="active"><a href="index.html" title="Home">首页</a></li>
                    <li class=""><a href="category.html" title="Shop by">分类</a>
                      <ul>
                        <li><a href="category.html">Woman Collection</a></li>
                        <li><a href="category.html">Men Collection</a></li>
                        <li><a href="category.html">Accessories</a></li>
                        <li><a href="category.html">Mobile</a>
                          <ul>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                              </ul>
                        </li>
                        <li><a href="category.html">Shoes</a></li>
                        <li><a href="category.html">Others</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="blog.html" title="Blog">Blog</a></li>
                    <li class=""><a href="faq.html" title="Faq">Faq</a></li>
                    <li class=""><a href="about_us.html" title="About us">About us</a></li>
                    <li class=""><a href="404_error.html" title="Pages">Pages</a></li>
                    <li class=""><a href="contact_us.html" title="Footwear">Contact us</a></li>
                  </ul>
                </nav>
                
                <div class="mobMenu">
            <h1>
            <span>Menu</span>
            <a class="menuBox highlight" href="javascript:void(0);">ccc</a>
            <span class="clearfix"></span>
            </h1>
            <div id="menuInnner" style="display:none;">
                   <ul class="accordion">
                       <li class="active"><a href="index-2.html" title="Home">Home</a></li>
                    <li class="parent"><a href="category.html" title="Shop by">Shop by</a>
                      <ul>
                        <li><a href="category.html">Woman Collection</a></li>
                        <li><a href="category.html">Men Collection</a></li>
                        <li><a href="category.html">Accessories</a></li>
                        <li><a href="category.html">Mobile</a>
                          <ul>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                                <li><a href="category.html">Second level</a></li>
                              </ul>
                        </li>
                        <li><a href="category.html">Shoes</a></li>
                        <li><a href="category.html">Others</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="blog.html" title="Blog">Blog</a></li>
                    <li class=""><a href="faq.html" title="Faq">Faq</a></li>
                    <li class=""><a href="about_us.html" title="About us">About us</a></li>
                    <li class=""><a href="404_error.html" title="Pages">Pages</a></li>
                    <li class=""><a href="contact_us.html" title="Footwear">Contact us</a></li>
                      <span class="clearfix"></span>
                   </ul>
                  
             </div>      
            </div>
                
              </header>
            </div>
            <!--Content Block-->
<section class="content-wrapper">
  <div class="content-container container">
    <div class="main">
      <h1 class="page-title">注册</h1>
      <div class="fieldset">
              <h2 class="legend">用户信息</h2>
        <form name="form1" action="<?php echo url('user/save'); ?>" method="post">
        <ul class="form-list">
          <li class="fields">
            <div class="customer-name">
              <div class="input-box name-firstname">
                <label for="firstname">用户名<em>*</em></label>
                <input type="text" class="required-entry input-text" title="Name" value="" name="name" id="name">
              </div>
              <div class="clear"></div>
            </div>                
            </li>
            <li>
            <div class="input-box">
              <label class="required" for="email_address">邮箱<em>*</em></label>
              <input type="text" class="input-text validate-email required-entry" title="Email" value="" id="email" name="email">
            </div>
            <div class="clear"></div>
        </ul>
        <h2 class="legend">登录信息</h2>
        <ul class="form-list">
          <li class="fields">
            <div class="customer-name">
              <div class="input-box name-firstname">
                <label for="firstname">密码<em>*</em></label>
                <input type="password" class="required-entry input-text" title="First pwd" value="" name="password" id="password">
              </div>
              <div class="input-box name-lastname">
                <label for="lastname">确认密码<em>*</em></label>
                <input type="password" class="required-entry input-text" title="Last pwd" value="" name="lastpwd" id="lastpwd" >
              </div>
            <div class="clear"></div>
            </div>
          </li>
        </ul>
        <div class="buttons-set">
          <p class="required">* 为必须填写</p>
          <a href="account_login.html" title="Back" class="f-left">&laquo; 返回</a>
          <button title="Submit" class="colors-btn"><span><span>注册</span></span></button>
          </form>
          <div class="clear"></div>
        </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="news-letter-container">
      <div class="free-shipping-block">
        <h1>ENJOY FREE SHIPPING</h1>
        <p>on all orders as our holiday gift for you!</p>
      </div>
      <div class="news-letter-block">
        <h2>SIGN UP FOR OUR NEWSLETTER</h2>
        <input type="text" value="Enter email address" title="" />
        <input type="submit" value="Submit" title="Submit" />
      </div>
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
