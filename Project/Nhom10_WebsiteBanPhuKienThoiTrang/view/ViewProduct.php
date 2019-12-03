<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page - Ustora Demo</title>
    
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
       
   
 .dropdown-content {
  display: none;
  position: absolute;
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
<body onload = "onLoadCookie()">
   
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
                            <li id = "Account"><a href="login.html"><i class="fa fa-user"></i> Đăng nhập</a></li>
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
                        <span class="sr-only">Toggle navigation</span> <!-- REEEEEEEEEEEEEE -->
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
                        <li class="active"><a href="ViewProduct.php?ID=AO01">Sản Phẩm</a></li> <!-- REEEEEEEEEEEEEE -->
                        <li><a href="cart.html">Giỏ hàng</a></li>
                        <li><a href="checkout.php">Kiểm tra</a></li>
                       
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
                        <h2 style="font-family: Times New Roman;">Sản phẩm</h2>
                        <!--- PHP in there --->
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
                            <li><a href="ViewShop.php?Page=AO">Áo Nam Thời Trang</a></li>
                            <li><a href="ViewShop.php?Page=QUAN">Quần Nam Thời Trang</a></li>
                            <li><a href="ViewShop.php?Page=KHAC">Balo Nam Nữ Thời Trang</a></li>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang chủ</a>
                            <a href="">Thể loại</a>
                            <a href="">Áo Nam</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                        <?php
                        	echo '<img src="' . $ProD->IMG . '" alt=""></div>';
                            echo '<div class="product-gallery">';
                            for ($count =0; $count <3 ; $count++){
                            	echo '<img src="' . $ProD->IMG . '" alt="">';
                        }
						?>
									</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-inner">
                                	<?php
                                    	echo '<h2 class="product-name">'.$ProD->name.'</h2>';
                                    ?>
                                    <div class="product-inner-price">
                                        <?php
                                        	echo '<ins>'.$ProD->cost.' đồng</ins>';
                                        ?> 
                                        <del>425000 đồng</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" id="needProD">
                                        </div>
                                        
                                        <?php
                                        	echo '<a href="#" class="add_to_cart_button" type="submit" onclick = "setCookie('.$ProD->cost.',\''.$ProD->IMG.'\',\''.$ProD->name.'\')">Thêm vào giỏ</a>';
                                        
                                        ?>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Loại: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm ở đây:</h2>  
                                                <p><span>
                                                    SIÊU PHẨM H39<br>
                                   - Chuất liệu: 900D PVC Water proof Trược nước + Lót 210D Logo chữ Y<br>
                                   - Đệm Mesh Darlington + Air Mesh quai đeo và lưng chống sốc tuyệt đối.<br>
                                   - Logo YaMe cùng Nhãn chữ Y/H39 chính hãng<br>
                                   - Dây kéo HHH #5 2 chiều siêu bền<br>
                                   - Nhiều ngăn đa tính năng: Ngăn chính rộng, Ngăn riêng cho Laptop, Ngăn phụ ngoài tiện dụng<br>
                                   - Kích thước: 40 x 30 x 10 cm
                                                </span></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
												<form action ="TiepNhan.php" method = "post">
													<?php
														$idpd = $_GET['ID'];
														if (isset($_COOKIE['IDacc'])){
															$id = $_COOKIE['IDacc'];
															echo '<p><label for="name">ID</label> <input name="IDacc" type="text" value = "'.$id.'" readonly></p>';
															
														}
														echo '<p><label for="name">ID Sản Phẩm</label> <input name="IDprod" type="text" value = "'.$idpd.'" readonly></p>';
													
													?>
                                                    <p><label for="name">Tên</label> <input name="name" type="text" placeholder="Tiếng việt không dấu"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    
                                                    <p><label for="review">Nhận xét về mặt hàng</label> <textarea name="review" placeholder="Tối đa 200 ký tự, tiếng Việt không dấu" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
												</form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Sản phẩm gần giống</h2>
                            <div class="related-products-carousel">

                        <?php
                        	include_once("model/Model.php");
                        	$model = new model();
                        	$lists;
                        	$get_Page = substr($_GET['ID'],0,2);
                        	$lists = $model->getLikeProD($get_Page);
                        	

                        	foreach ($lists as $ID_Pro => $Pro)
							{
								echo '<div class="single-product"><div class="product-f-image">';
                                echo '<img src="'.$Pro->IMG.'" alt="">';
                                echo '<div class="product-hover">';
                                echo '<a href="#" class="add-to-cart-link" onclick = "setCookie('.$Pro->cost.',\''.$Pro->IMG.'\',\''.$Pro->name.'\')"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ</a>';
                                echo '<a href="ViewProduct.php?ID='.$Pro->ID_Pro.'" class="view-details-link"><i class="fa fa-link"></i> Xem thông tin</a>';
                                echo '</div></div><h2><a href="ViewProduct.php?ID='.$Pro->ID_Pro.'">'.$Pro->name.'</a></h2><div class="product-carousel-price">';
                                echo '<ins>'.$Pro->cost.' đồng</ins> <del>400000 đồng</del></div></div>';
							}


                        ?>
                           </div>
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
                        <p><span>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</span></p>
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
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Tùy Chọn </h2> <!-- REEEEEEEEEEEEEE -->
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
                           <li><a href="ViewShop.php?Page=AO">Áo</a></li>
                            <li><a href="ViewShop.php?Page=QUAN">Quần</a></li>
                            <li><a href="ViewShop.php?Page=KHAC">Balo - Giày</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title" style="font-family: Times New Roman;">Bản Tin</h2>
                        <p>Đăng ký nhận bản tin của chúng tôi và nhận các ưu đãi độc quyền mà bạn sẽ không tìm thấy bất cứ nơi nào khác. Bản tin sẽ trực tiếp đến hộp thư đến của bạn!</p>
                        <div class="newsletter-form">
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
    <script src="js/Cart_Contact.js"></script>

  </body>
</html>