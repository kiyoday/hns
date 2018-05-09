<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\xampp\htdocs\hns\public/../application/index\view\booksell\index.html";i:1525839867;s:69:"D:\xampp\htdocs\hns\public/../application/index\view\public\head.html";i:1525883365;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\header.html";i:1525884738;s:71:"D:\xampp\htdocs\hns\public/../application/index\view\public\footer.html";i:1525881415;}*/ ?>
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
    <div class="firstly">
        <table class="table table-goods" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
                    <th width="280">书名</th>
                    <th width="140" >更新时间</th>
                    <th width="140" >价格</th>
                    <th width="140" >类型</th>
					<th width="140" >当前状态</th>
                    <th class="last">操作</th>
                </tr>
                <?php if(is_array($books) || $books instanceof \think\Collection || $books instanceof \think\Paginator): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr class="j-row">
                    <td class="vtop">
                        <div class="title-area" title="">
                        <div class="img-wrap">
                        <a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>" target="_blank"><img src="<?php echo $vo['photo']; ?>" style="height:70px;width:80px;"></a>
                        </div>
                        <div class="title-wrap">
                        <div class="title">
                        <a href="<?php echo url('view/index',['bid'=>$vo['book_id']]); ?>" class="link"><?php echo $vo['name']; ?></a>
                        </div>
                        <div class="attrs"></div>
                        </div>
                        </div>
                    </td>
                    <td class="price font14" ><span class="j-sumPrice" style="color:#35C2D8;"><?php echo $vo['create_time']; ?></span></td>
                    <td class="price font14" ><span class="j-sumPrice" style="">￥<?php echo $vo['price']; ?></span></td>
                    <td class="price font14" ><span class="j-sumPrice" style=""><?php echo $vo['type']; ?></span></td>
                    <td class="price font14" >
                    <?php if($vo['status'] == '0'): ?>
					<span class="label label-success radius">待审核</span>
					<?php else: if($vo['status'] == '1'): ?>
					<span class="label  label-success radius" >审核通过</span>
					<?php else: if($vo['status'] == '2'): ?>
                    <span class="label  label-success radius" >已发货</span>
                    <?php else: if($vo['status'] == '3'): ?>
					<span class="label label-success radius">需发货</span>
					<?php else: ?>
					
					<span class="label label-success radius">完成交易</span>
					<?php endif; endif; endif; endif; ?>
                    </td>
                    <td class="price font14" style="text-align:right">
                    <?php if($vo['status'] == '3'): ?>
                    <a href="<?php echo url('booksell/delivery',['bid'=>$vo['book_id']]); ?>" title="发货" class="colors-btn" >发货</a>
                    <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>
            </table>
            5
              <div style="width: 100%;min-width: 1200px;height: 5px;background: #dbdbdb;margin: 50px 0 20px;"></div>
    </div>   
<section class="content-wrapper">
    <div class="content-container container">
        
        <div class="clearfix"></div>
        <div class="news-letter-container">
            <div class="free-shipping-block">
                <h1>ENJOY FREE SHIPPING</h1>
                <p>on all orders as our holiday gift for you!</p>
            </div>
            <div class="news-letter-block">
                <h2>SIGN UP FOR OUR NEWSLETTER</h2>
                <input type="text" value="Enter email address" title="" />
                <input class="submit-btn" type="submit" value="Submit" title="Submit" />
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