<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\xampp\htdocs\hns\public/../application/index\view\index\index.html";i:1525912543;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1525883365;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1525884738;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1525881415;}*/ ?>
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



            <!--Banner Block-->
            <section class="banner-wrapper">
              <div class="banner-block container">
                <div class="flexslider">
                  <ul class="slides">
                    <li><img title="Banner" alt="Banner" src="__STATIC__/index/images/banner1.jpg" /></li>
                    <li><img title="Banner" alt="Banner" src="__STATIC__/index/images/banner2.jpg"></li>
                    <li><img title="Banner" alt="Banner" src="__STATIC__/index/images/banner3.jpg" /></li>
                    <li><img title="Banner" alt="Banner" src="__STATIC__/index/images/banner4.jpg" /></li>
                  </ul>
                </div>
                <ul class="banner-add">
                  <li class="add1"><a href="#" title=""><img title="add1" alt="add1" src="__STATIC__/index/images/1.jpg" /></a></li>
                  <li class="add2"><a href="#" title=""><img title="add2" alt="add2" src="__STATIC__/index/images/2.jpg" /></a></li>
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
                    <?php if(is_array($bres) || $bres instanceof \think\Collection || $bres instanceof \think\Paginator): $i = 0; $__LIST__ = $bres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      				      <li>
                      <div class="pro-img"><img title="推荐书籍" alt="推荐书籍" src="<?php echo $vo['photo']; ?>" style="height:180px;width:180px;" /></div>
                      <div class="pro-hover-block">
                        <h4 class="pro-name"><?php echo $vo['name']; ?></h4>
                        <div class="link-block"> 
                        <!--<a href="<?php echo url('view/index',['bid'=>22]); ?>" class="quickllook inline" title="Quick View">Quick View</a> -->
                        <a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>" class="quickproLink" title="去看一看">链接</a></div>
                        <div class="pro-price">￥<?php echo $vo['price']; ?></div>
                      </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                  
                </div>
                <div class="heading-block">
                  <h1>当前类别</h1>
                </div>
                <div class="new-product-block">
                  <ul class="product-grid">
                    <?php if(is_array($books) || $books instanceof \think\Collection || $books instanceof \think\Paginator): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li>
                      <div class="pro-img" >
                        <?php if($vo['photo'] == ''): ?>
                        <a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>"><img alt="" src="__STATIC__/index/images/default_img.png" style="height:180px;width:180px;"></a>
                        <?php else: ?>
                        <a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>"><img alt="" src="<?php echo $vo['photo']; ?>" style="height:180px;width:180px;"></a>
                        <?php endif; ?>
                      </div>
                      <div class="pro-content">
                        <p style="max-width:225px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;" title="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></p>
                      </div>
                      <div class="pro-price">￥<?php echo $vo['price']; ?></div>
                      <div class="pro-btn-block"> 
                      <a class="add-cart left" href="<?php echo url('index/addcart',['bid'=>$vo['book_id']]); ?>" title="Add to Cart">加入购物车</a> 
                      <a class="add-wishlist right" href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>" id="<?php echo $vo['book_id']; ?>" title="预览">预览</a> </div>
                      <div class="pro-link-block"> <a class="add-wishlist left" href="#" title="Add to wishlist"></a> <a class="add-compare right" href="#" title="Add to Compare"></a>
                        <div class="clearfix"></div>
                      </div>
                    </li>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                  <div class="cl pd-5 bg-1 bk-gray mt-20 pagn-1" style="float:center;font-size:20px;"><?php echo $books->render(); ?></div>
                </div>
              </div>
            </section>
    </div> 
    <!--Quick view Block-->    
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