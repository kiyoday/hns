<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\xampp\htdocs\hns\public/../application/index\view\center\info.html";i:1525699681;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1525883365;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1525884738;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1525881415;}*/ ?>
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
          <li class=""><a href="<?php echo url('center/info'); ?>" title="个人中心">个人中心</a></li>
          <li class="my-wishlist"><a href="<?php echo url('cart/index'); ?>" title="购物车">购物车</a></li>
          <li class="checkout"><a href="<?php echo url('order/index'); ?>" title="我的订单">我的订单</a></li>
          <?php if(\think\Request::instance()->session('name') != ''): ?>
          <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="Log In"><?php echo \think\Request::instance()->session('name'); ?></a></li>
          <li class="log-in"><a href="<?php echo url('user/logout'); ?>" title="注销">注销</a></li>
          <?php else: ?> 
          <li class="log-in"><a href="<?php echo url('user/login'); ?>" title="登录/注册">登录/注册</a></li>
          <?php endif; ?>
      </ul>
      <ul class="currencyBox">
            <li id="header_currancy" class="currency"> <a class="mainCurrency" href="#">我要卖书</a>
          <div id="currancyBox" class="currency_detial"> <a href="<?php echo url('book/index'); ?>">卖书登记</a> <a href="<?php echo url('booksell/index'); ?>">卖书信息</a>
          </div>
        </li>
      </ul>
      <section class="header-bottom">
        <div class="cart-block">
         <ul>
          <li><a href="<?php echo url('Cart/index'); ?>" title="Cart"><img title="Item" alt="Item" src="__STATIC__/index/images/item_icon.png" /></a></li>
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
                	<div class="content-container container">                        
                		<div class="col-left">
                			<div class="block community-block">
                				<div class="block-title">请选择</div>
                				<ul>
                					<li class="question-row">
                                        <strong>设置</strong></br>
                                        <a href="<?php echo url('center/info'); ?>">个人信息</a></br>
                                        <a href="<?php echo url('center/index'); ?>">修改个人信息</a></br>
                                        <a href="<?php echo url('center/changepwd'); ?>">修改密码</a>
                                    </li>
                                    <li class="question-row">
                                        <strong>购物</strong></br>
                                        <a href="<?php echo url('order/index'); ?>">我的订单</a></br>
                                        <a href="<?php echo url('cart/index'); ?>">购物车</a>
                                    </li>
                                    <li class="question-row">
                                        <strong>卖书</strong></br>
                                        <a href="<?php echo url('book/index'); ?>">我要卖书</a></br>
                                        <a href="<?php echo url('book/sell'); ?>">我卖的书</a>
                                    </li>
                                    <li class="question-row">
                                        <strong>客户服务</strong></br>
                                        <a href="<?php echo url('advice/index'); ?>">意见建议</a></br>
                                    </li>
                				</ul>
                			</div>
                		</div>
                        <form action="<?php echo url('center/save'); ?>" method="post">
                		<div  class="col-main">
                			<h1 class="page-title">您的个人信息</h1>
                			<div class="contact-form-container">
                				<ul class="form-fields">
                                    <li class="left">
                                        <label><h6>您的邮箱:</h6></label>
                                        <div  class="form-title"><?php echo $user['email']; ?></div>
                                    </li>
                                    <div class="clearfix"></div>
                					<li class="left">
                						<label><h6>您的姓名:</h6></label>
                						<div  class="form-title"><?php echo $user['name']; ?></div>
                					</li>
                                    <div class="clearfix"></div>
                                    <li class="left">
                                        <label><h6>性别:</h6></label></br>
                                       <div  class="form-title"><?php echo $user['sex']; ?></div>
                                    </li>
                                    <div class="clearfix"></div>
                					<li class="left">
                						<label><h6>手机号:</h6></label>
                						<div  class="form-title"><?php echo $user['phone']; ?></div>
                					</li>
                                    <div class="clearfix"></div>
                					<li class="full-row">
                						<label><h6>默认收货地址:</h6></label>
                						<div  class="form-title"><?php echo $user['address']; ?></div>
                					</li>
                				</ul>
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
                    <li class="link-title"><a href="#" title="ABOUT US">关于我们</a></li>
                    <li><a href="#" title="About Us">关于我们</a></li>
                    <li><a href="#" title="Customer Service">客户服务</a></li>
                    <li><a href="#" title="Privacy Policy">隐私政策</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="CUSTOMER SERVICES">客户服务</a></li>
                    <li><a href="#" title="Shipping & Returns">购物</a></li>
                    <li><a href="#" title="Secure Shopping">购物安全</a></li>
                    <li><a href="#" title="Contact Us">联系我们</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="TERMS & CONDITIONS">加入我们</a></li>
                    <li><a href="#" title="Press Room">团队介绍</a></li>
                    <li><a href="#" title="Help">帮助</a></li>
                    <li><a href="#" title="Terms & Conditions">团队状况</a></li>
                  </ul>
                  <ul>
                    <li class="link-title"><a href="#" title="ABOUTUS">关于我们</a></li>
                    <li class="aboutus-block">开心果二手书交易平台,
                      是一个基于ThinkPHP5.0开发的交易平台... <a href="about_us.html" title="read more">更多</a> </li>
                  </ul>
                  <ul class="stay-connected-blcok">
                    <li class="link-title"><a href="#" title="STAY CONNECTED...">分享：</a></li>
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
                    <li><a href="#" title="Home">首页</a></li>
                    <li><a href="#" title="Pages">页面</a></li>
                    <li><a href="#" title="About">关于</a></li>
                    <li><a href="#" title="Contact">联系</a></li>
                  </ul>
                  <p class="copyright-block">© 2018 二手书交易平台,  from <a href="#" title="开心果" target="_blank">开心果</a></p>
                </div>
              </footer>
            </section>
</body>
</html>