<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\xampp\htdocs\hns\public/../application/index\view\buy\index.html";i:1525537261;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1525696765;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1525877626;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1525759508;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\xampp\htdocs\hns\public/../application/index\view\buy\index.html";i:1525397918;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1525346003;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1525417542;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1523271222;}*/ ?>
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>开心果二手书网</title>

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
<link rel="stylesheet" type="text/css" href="__STATIC__/admin/css/common.css" />
<link rel="stylesheet" href="__STATIC__/index/css/common.css">
<link rel="stylesheet" href="__STATIC__/index/css/pay.css">
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
<<<<<<< HEAD
          <li class=""><a href="<?php echo url('center/info'); ?>" title="个人中心">个人中心</a></li>
          <li class="my-wishlist"><a href="<?php echo url('cart/index'); ?>" title="购物车">购物车</a></li>
          <li class="checkout"><a href="<?php echo url('order/index'); ?>" title="我的订单">我的订单</a></li>
          <li class="contact-us"><a href="<?php echo url('advice/index'); ?>" title="关于我们">关于我们</a></li>
=======
          <li class=""><a href="<?php echo url('center/index'); ?>" title="My Account">个人中心</a></li>
          <li class="my-wishlist"><a href="<?php echo url('cart/index'); ?>" title="购物车">购物车</a></li>
          <li class="checkout"><a href="<?php echo url('order/index'); ?>" title="Checkout">我的订单</a></li>
          <li class="contact-us"><a href="<?php echo url('advice/index'); ?>" title="Contact Us">关于我们</a></li>
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
          <?php if(\think\Request::instance()->session('name') != ''): ?>
          <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="Log In"><?php echo \think\Request::instance()->session('name'); ?></a></li>
          <li class="log-in"><a href="<?php echo url('user/logout'); ?>" title="注销">注销</a></li>
          <?php else: ?> 
          <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="登录/注册">登录/注册</a></li>
          <?php endif; ?>
      </ul>
      <ul class="currencyBox">
            <li id="header_currancy" class="currency"> <a class="mainCurrency" href="#">我要卖书</a>
<<<<<<< HEAD
          <div id="currancyBox" class="currency_detial"> <a href="<?php echo url('book/index'); ?>">卖书登记</a> <a href="<?php echo url('booksell/index'); ?>">卖书信息</a>
=======
          <div id="currancyBox" class="currency_detial"> <a href="<?php echo url('book/index'); ?>">卖书登记</a> <a href="#">卖书信息</a>
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
          </div>
        </li>
      </ul>
      <section class="header-bottom">
        <div class="cart-block">
         <ul>
<<<<<<< HEAD
          <li><a href="<?php echo url('Cart/index'); ?>" title="Cart"><img title="Item" alt="Item" src="__STATIC__/index/images/item_icon.png" /></a></li>
=======
          <li><a href="cart.html" title="Cart"><img title="Item" alt="Item" src="__STATIC__/index/images/item_icon.png" /></a></li>
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
          <li>购物车</li>
         </ul>
        <div id="minicart" class="remain_cart" style="display: none;">
        <p class="empty">购物车预览</p>
        <ol>
          <?php if(is_array($shop_cart) || $shop_cart instanceof \think\Collection || $shop_cart instanceof \think\Paginator): $i = 0; $__LIST__ = $shop_cart;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li>
        <div class="img-block"><img src="<?php echo $vo['photo']; ?>" title="" alt="" /></div>
        <div class="detail-block">
           <h4><a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></a></h4>
           <p>
          <strong>￥<?php echo $vo['price']; ?></strong>
           </p>
          </div>
          <div class="edit-delete-block">
                <a href="<?php echo url('index/delcart',['bid'=>$vo['book_id']]); ?>" title="Remove"><img src="__STATIC__/index/images/delete_item_btn.png" alt="删除" title="删除" /></a>
              </div>
            </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
            <li>
              <a href="<?php echo url('index/cleancart'); ?>" title="Checkout" class="colors-btn" style="float:left;">清空</a>
              <a href="<?php echo url('cart/index'); ?>" title="Checkout" class="colors-btn">去结算</a>
              <div class="clear"></div>
            </li>
           </ol>
        </div>
      </div>
      <div class="search-block">
        <form action="<?php echo url('search/index'); ?>" method="get">
          <input name="name" type="text" value="" />
          <input type="submit" value="Search" title="搜索" />
        </form>
        </div>
      </section>
    </div>
    <h1 class="logo"><a href="<?php echo url('index/index'); ?>" title="Logo">
      <img title="Logo" alt="Logo" src="__STATIC__/index/images/logo.png" />
      </a></h1>
    <nav id="smoothmenu1" class="ddsmoothmenu mainMenu">
      <ul id="nav">
        <li class="active"><a href="<?php echo url('index/index'); ?>" title="Home">首页</a></li>
        <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class=""><a href="<?php echo url('Search1/index',['type'=>$vo['type_name']]); ?>" title="<?php echo $vo['type_name']; ?>"><?php echo $vo['type_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </nav> 
  </header>
</div>



                <!--Content Block-->
                 <section class="content-wrapper">
                  <form method="post" action="<?php echo url('buy/save',['bid'=>$bid['book_id']]); ?>">
<<<<<<< HEAD
                  <?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
=======
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
                  <div class="content-container container"> 
                   <h1 class="page-title"><font color="#35C2D8">请输入买家信息</font></h1>
                   <div class="contact-form-container">
                    <ul class="form-fields">
                     <li class="left">
                      <label>收货人姓名<em></em></label>
<<<<<<< HEAD
                      <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" value="<?php echo $vo['name']; ?>" type="text" name="name"/>
                    </li>
                    <li class="left">
                     <label>联系电话</label>
                     <input type="text" name="phone" value="<?php echo $vo['phone']; ?>">
                    </li>
                    <li class="left">
                     <label>收货地址</label>
                     <input type="text" name="address" value="<?php echo $vo['address']; ?>">
=======
                      <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" type="text" name="name"/>
                    </li>
                    <li class="left">
                     <label>联系电话</label>
                     <input type="text" name="phone">
                    </li>
                    <li class="left">
                     <label>收货地址</label>
                     <input type="text" name="address">
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
                    </li>
                   </ul>
                 </div>
                </div>
<<<<<<< HEAD
                <?php endforeach; endif; else: echo "" ;endif; ?>
=======
>>>>>>> 4f28880015d34f2a3255070a94b04f91244883e5
             <div class="firstly">
              <table class="table table-goods" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <th width="130" class="first">商品</th>
                    <th width="140">书名</th>
                    <th width="140">价格</th>
                    <th width="140">卖家昵称</th>
                    <th width="140" class="last">卖家联系电话</th>
                </tr>
                <tr class="j-row">
                    <td class="">
                        <div class="title-area" title="<?php echo $bid['name']; ?>">
                        <div class="">
                        <a href="" target="_blank"><img src="<?php echo $bid['photo']; ?>" style="height:100px;width:100px;"></a>
                        </div>
						</div>
                    </td>
                      <td class="font14" align="center"><span><?php echo $bid['name']; ?></span></td>
                      <td class="price font14" align="center" style="color:#35C2D8;"><span class="j-sumPrice" >￥<?php echo $bid['price']; ?></span></td>
                      <td class="font14" align="center"><span><?php echo $uid['name']; ?></span></td>
                      <td class="font14" align="center"><span><?php echo $uid['email']; ?></span></td>
                </tr>
                </tbody>
              </table>
              <div class="final-price-area" style="text-align:right">结算金额：<span class="sum" style="color:#35C2D8;">￥<span class="price" style="color:#35C2D8;"><?php echo $bid['price']; ?></span></span></div>
              <div class="page-button-wrap" style="text-align:right;color:#35C2D8;" >
              <button type="submit" class="btn btn-primary" style="background:#35C2D8;">确认并支付</button>
              </div>
              <div style="width: 100%;min-width: 1200px;height: 5px;background: #dbdbdb;margin: 50px 0 20px;"></div>
            </div>
          </div>
          <form>
        </section>
            <!--Footer Block-->
<section class="content-wrapper">

</section>
</div>
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
                    <li class="link-title"><a href="#" title="ABOUTUS">关于我们</a></li>
                    <li class="aboutus-block">开心果二手书交易平台,
                      是一个基于ThinkPHP5.0开发的交易平台... <a href="about_us.html" title="read more">更多</a> </li>
                  </ul>
                  <ul class="stay-connected-blcok">
                    <li class="link-title"><a href="#" title="STAY CONNECTED...">STAY CONNECTED...</a></li>
                    <li>
                         <ul class="social-links">
                            <li><a data-tooltip="Like us on facebook" href="#"><img alt="facebook" src="__STATIC__/index/images/facebook.png"></a></li>
                            <li><a data-tooltip="Subscribe to RSS feed" href="#"><img alt="RSS" src="__STATIC__/index/images/rss.png"></a></li>
                            <li><a data-tooltip="Follow us on twitter" href="#"><img alt="twitter" src="__STATIC__/index/images/twitter.png"></a></li>
                            <li><a data-tooltip="Follow us on Dribbble" href="#"><img alt="dribbble" src="__STATIC__/index/images/dribbble.png"></a></li>
                            <li><a data-tooltip="Follow us on Youtube" href="#"><img alt="youtube" src="__STATIC__/index/images/youtube.png"></a></li>
                            <li><a data-tooltip="Follow us on skype" href="#"><img alt="skype" src="__STATIC__/index/images/skype.png"></a></li>
                         </ul>
                         <div class="payment-block"><img src="__STATIC__/index/images/payment.png" alt="payment"></div>
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
                  <p class="copyright-block">© 2018 二手书交易平台,  from <a href="http://www.cssmoban.com/" title="开心果" target="_blank">开心果</a></p>
                </div>
              </footer>
            </section>
</body>
</html>