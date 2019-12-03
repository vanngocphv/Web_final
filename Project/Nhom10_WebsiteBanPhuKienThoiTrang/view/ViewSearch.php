<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
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
                            <li><a href="../ViewInfo.php"><i class="fa fa-user"></i> Tài khoản của tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Yêu thích </a></li>
                            <li><a href="../cart.html"><i class="fa fa-user"></i> Giỏ hàng</a></li>
                            <li><a href="../checkout.php"><i class="fa fa-user"></i> Kiểm tra</a></li>
                            <li id = "Account"><a href="../login.html"><i class="fa fa-user"></i> Đăng nhập</a></li>
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
                        <h1><a href="../MainPage.php"><img src="../img/logo.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="../cart.html" id ="CartAll">Giỏ - <span id = "Cart-money" class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span id="Cart-count" class="product-count"></span></a> <!-- <span class="product-count">5</span> -->
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
                        <span class="sr-only">Toggle navigation</span> <!-- REEEEEEEEEEEEEE -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../MainPage.php">Trang chủ</a></li>
                          <li class="dropdown active">
                       <a class="dropbtn" disable>Cửa hàng</a>

                       <?php
                       		
                       			echo '<div class="dropdown-content" style="text-align: center;">';
                            	echo '<a href="../ViewShop.php?Page=AO">Áo</a>';
                            	echo '<a href="../ViewShop.php?Page=QUAN">Quần</a>';
                            	echo '<a href="../ViewShop.php?Page=KHAC">Balo - Giày</a>';
                          		echo '</div>';
								
                          	


                       ?>
                       </li>
                        <!-- REEEEEEEEEEEEEE -->
                        
                        <li><a href="../ViewProduct.php?ID=AO01">Sản Phẩm</a></li> <!-- REEEEEEEEEEEEEE -->
                        <li><a href="../cart.html">Giỏ hàng</a></li>
                        <li><a href="../checkout.php">Kiểm tra</a></li>
                        <li><a href="../contact.html">Liên hệ</a></li>
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
                    	<?php
                    		
                        	echo '<h2 style="font-family: Times New Roman;">Sản Phẩm Bạn Tìm</h2>';
        					
        		?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
	<?php 
	if ($Lists == "X"){
		echo "<h2> XIN LỖI SẢN PHẨM BẠN TÌM KHÔNG TỒN TẠI </h2>";
	}
	else {
		foreach ($Lists as $ID_Pro => $Pro)
		{
			echo '<div class="col-md-3 col-sm-6"><div class="single-shop-product"><div class="product-upper">';
        	echo '<img src="../'.$Pro->IMG.'" alt="">';
            echo '</div><h2><a href="../ViewProduct.php?ID='.$Pro->ID_Pro.'">'.$Pro->name.'</a></h2><div class="product-carousel-price">';
            echo '<ins>'.$Pro->cost.'đồng</ins> <del>300000 đồng</del>';
            echo '</div><div class="product-option-shop"><a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="#" onclick = "setCookie('.$Pro->cost.', \''.$Pro->IMG.'\' , \''.$Pro->name.'\')">Thêm vào giỏ</a></div></div></div>';
		}
	}

	?>
			</div>
		</div>
	</div>
<div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          
                        </nav>                        
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
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Tùy Chọn</h2>
                        <ul>
                            <li><a href="#">Tài Khoản của tôi</a></li>
                            <li><a href="#">Lịch sử đơn hàng</a></li>
                            <li><a href="#">Yêu thích</a></li>
                            <li><a href="contact.html">Liên hệ</a></li>
                            <li><a href="#">Về đầu trang</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Thể loại</h2>
                        <ul>
                            <li><a href="../ViewShop.php?Page=AO">Áo Nam Thời Trang</a></li>
                            <li><a href="../ViewShop.php?Page=QUAN">Quần Nam</a></li>
                            <li><a href="../ViewShop.php?Page=KHAC">Balo - Giày Nam Nữ</a></li>
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
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="../js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="../js/main.js"></script>

    <script type="text/javascript" src="../js/Cart_Contact.js"></script>

  </body>
</html>
</body>
</html>