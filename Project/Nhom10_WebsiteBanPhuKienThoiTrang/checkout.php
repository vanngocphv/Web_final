
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Page - Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
      <style>
        h2{
            font-family: "Times New Roman", Times, serif;
        }
   
 .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown {
  position: relative;
  display: inline-block;
}
</style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="onLoadCookie()">
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="ViewInfo.php"><i class="fa fa-user"></i> Tài khoản của tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Yêu thích </a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            <li id="Account"><a href="login.html"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Mệnh giá :</span><span class="value">VNĐ </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ngôn ngữ :</span><span class="value">Tiếng Việt </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Tiếng Việt</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html" id ="CartAll">Giỏ - <span id = "Cart-money" class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span id="Cart-count" class="product-count"></span></a> <!-- <span class="product-count">5</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="MainPage.php">Trang chủ</a></li>
                          <li class="dropdown">
                       <a class="dropbtn" disable>Cửa hàng</a>
                          <div class="dropdown-content">
                            <a href="ViewShop.php?Page=AO">Áo</a>
                            <a href="ViewShop.php?Page=QUAN">Quần</a>
                            <a href="ViewShop.php?Page=KHAC">Balo - Giày</a>
                          </div>
                       </li> 
                        <!-- REEEEEEEEEEEEEE -->
                        <li><a href="ViewProduct.php?ID=AO01">Sản Phẩm</a></li> <!-- REEEEEEEEEEEEEE -->
                        <li><a href="cart.html">Giỏ hàng</a></li>
                        <li class="active"><a href="checkout.php">Kiểm tra</a></li>
                        
                        <li><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2 style="font-family: Times New Roman;">Giỏ hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
                        <form action="controller/searchController.php" method="get">
                            <input type="text" name="SEARCH" placeholder="Tìm kiếm sản phẩm...">
                            <input type="submit">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm</h2>
						<?php
                        	include_once("model/Model.php");
                        	$model = new model();
                        	$lists;
                        	
                        	$lists = $model->randomProduct(3);
                        	

                        	foreach ($lists as $ID_Pro => $Pro)
							{
								echo '<div class="thubmnail-recent">';
                                echo '<img src="'.$Pro->IMG.'" alt="" class="recent-thumb">';
                                echo '<h2><a href="ViewProduct.php?ID='.$Pro->ID_Pro.'">'.$Pro->name.'</a></h2>';
								echo '<div class="product-sidebar-price">';
								echo '<ins>'.$Pro->cost.' đồng</ins> <del>300000 đồng</del>';
								echo '</div></div>';
                                
							}
						echo '</div>';

                        ?>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Bài Viết Gần Đây</h2>
                        <ul>
                            <li><a href="ViewShop.php?Page=AO">Áo</a></li>
                            <li><a href="ViewShop.php?Page=QUAN">Quần</a></li>
                            <li><a href="ViewShop.php?Page=KHAC">Balo - Giày</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form enctype="multipart/form-data" action="muaHang.php" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Chi tiết hóa đơn</h3>
                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Họ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Tên <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            

                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Địa chỉ" id="billing_address_1" name="billing_address_1" class="input-text ">
                                            </p>

                                            
                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Thành phố/ Thị xã <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Thành phố/ Thị xã" id="billing_city" name="billing_city" class="input-text ">
                                            </p>

                                            <p id="billing_state_field" class="form-row form-row-first address-field validate-state" data-o_class="form-row form-row-first address-field validate-state">
                                                <label class="" for="billing_state">Quận</label>
                                                <input type="text" id="billing_state" name="billing_state" placeholder="Quận/ Huyện" value="" class="input-text ">
                                            </p>
                                            

                                            <div class="clear"></div>

                                            <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                <label class="" for="billing_email">Địa chỉ email <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Địa chỉ email (nếu có)" id="billing_email" name="billing_email" class="input-text ">
                                            </p>

                                            <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                <label class="" for="billing_phone">Điện thoại <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Điện thoại liên lạc" id="billing_phone" name="billing_phone" class="input-text ">
                                            </p>
                                            <div class="clear"></div>


                                            

                                        </div>
                                    </div>


                                </div>

                                <h3 id="order_review_heading">Đơn hàng của bạn</h3>

                                <div id="order_review" style="position: relative;">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tổng cộng</th>
                                            </tr>
                                        </thead>
                                        <tbody id="fullItems">
                                            
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Tổng phí Phụ</th>
                                                <td><span class="amount">0 đồng</span>
                                                </td>
                                            </tr>

                                            <tr class="shipping">
                                                <th>Vận Chuyển</th>
                                                <td>

                                                    Miễn phí
                                                    <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                                </td>
                                            </tr>


                                            <tr class="order-total">
                                                <th>Tổng cộng</th>
                                                <td><strong><span class="amount" id="fullCost">0 đồng</span></strong> </td>
                                            </tr>

                                        </tfoot>
                                    </table>

									<form action="muaHang.php" method = "get">
                                    <div id="payment">
                                        <ul class="payment_methods methods">
                                            <li class="payment_method_bacs">
                                                <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                <label for="payment_method_bacs">Chuyển tiền qua ngân hàng </label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn hàng của bạn đã thắng được vận chuyển cho đến khi tiền được xóa trong tài khoản của chúng tôi.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_cheque">
                                                <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                <label for="payment_method_cheque">
Thanh toán bằng thẻ </label>
                                                <div style="display:none;" class="payment_box payment_method_cheque">
                                                    <p>Vui lòng gửi thẻ của bạn đến Tên Cửa hàng, Phố Cửa hàng, Thị trấn Cửa hàng, Cửa hàng Bang / Quận, Mã bưu điện.</p>
                                                </div>
                                            </li>
                                            <li class="payment_method_paypal">
                                                <input type="radio" data-order_button_text="Proceed to PayPal" value="paypal" name="payment_method" class="input-radio" id="payment_method_paypal">
                                                <label for="payment_method_paypal">PayPal <img alt="PayPal Acceptance Mark" src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png"><a title="What is PayPal?" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" class="about_paypal" href="https://www.paypal.com/gb/webapps/mpp/paypal-popup">What is PayPal?</a>
                                                </label>
                                                <div style="display:none;" class="payment_box payment_method_paypal">
                                                    <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu bạn không có tài khoản PayPal.</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="form-row place-order">
										
                                            <input type="submit" value="Đặt hàng" id="place_order" class="button alt">
										

                                        </div>
										</form>

                                        <div class="clear"></div>

                                    </div>
                                </div>
                            </form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
               <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Tùy Chọn </h2>
                        <ul>
                            <li><a href="#">Tài Khoản</a></li>
                            <li><a href="#">Lịch Sử Đơn Hàng</a></li>
                            <li><a href="#">Yêu thích</a></li>
                            <li><a href="contact.html">Liên hệ</a></li>
                            <li><a href="#">Về Đầu Trang</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Thể loại</h2>
                        <ul>
                           <li><a href="ViewShop.php?Page=AO">Áo Nam Thời Trang</a></li>
                            <li><a href="ViewShop.php?Page=QUAN">Quần Nam</a></li>
                            <li><a href="ViewShop.php?Page=KHAC">Balo - Giày Nam Nữ</a></li>
                        </ul>                          
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Bản Tin</h2>
                        <p>Đăng ký nhận bản tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy bất cứ nơi nào khác. Bản tin sẽ trực tiếp đến hộp thư đến của bạn!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>

    <script type="text/javascript" src="js/Cart_Contact.js"></script>

  </body>
</html>