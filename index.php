<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="content-header">
            <div class="header clearfix">
                <div class="col-md-6 header-left">
                    <a href=""><img src="./image/youlooklogo.png" alt=""></a>
                    <span><input class="search" type="text" name="" placeholder="Tìm kiếm..."></span>
                </div>
                <div class="col-md-6 header-right text-right">
                    <ul>
                        <li>
                            <a href=""><img src="./image/cart.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="./image/notification.png" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="./image/chat.png" alt=""></a>
                        </li>
                    </ul>
                    <div class="user-top-header">
                        <a href=""><img src="./image/user-avatar.png" alt=""> <span>Mai Công Ngoãn</span></a>
                    </div>
                </div>
            </div>
            <!-- End header -->
            <div class="navigation clearfix">
                <div class="nav-shopping">
                    <a href="">MUA SẮM</a>
                </div>
                <div class="nav-bar">
                    <ul>
                        <li class="active"><a href="">SẢN PHẨM MỚI</a></li>
                        <li><a href="">SẢN PHẨM ĐẶC BIỆT</a></li>
                    </ul>
                </div>
            </div>
            <!-- End navigation -->
        </div>
        <div class="slider">
            <div class="col-md-12 text-right creits-slider">
                <a href="#"><img src="./image/credits.png" alt=""></a>
            </div>
            <div class="col-md-12 text-center"> 
                <h2 class="animated slideInDown">Welcome to <span>Youlook Shopping</span></h2>
                <p class="animated slideInLeft">Hãy đến và mua sắm thả ga với giá cực kỳ ưu đãi !</p>
            </div>
        </div>
        <!-- End slider -->
        <div class="category">
            <div class="container">
                <div class="col-md-4 left-category"><a href="">DANH MỤC</a></div>
                <div class="col-md-4 mid-category"><img src="./image/credits-img.png" width="100%" alt=""></div>
                <div class="col-md-4 right-category">
                    <input class="search-product" type="text" placeholder="Tìm sản phẩm...">
                </div>
            </div>
        </div>
        <!-- End category -->
        <div class="list-product">
            <div class="container">
                <!-- //////////////////////////////// LIST PRODUCT /////////////////////////////////////////////////////////// -->
                <?php include('./list-all-product.php') ?>
                <!-- //////////////////////////////// LIST PRODUCT /////////////////////////////////////////////////////////// -->

                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="./image/Product 7.png" alt="">
                            <h3>Đồng hồ dây kim loại</h3>
                            <p>Thể loại: Thời trang & Công nghệ</p>
                            <div class="creadits-product"><span>3.420.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="./image/Product 8.png" alt="">
                            <h3>Máy đa năng 15 công dụng</h3>
                            <p>Thể loại: Gia dụng</p>
                            <div class="creadits-product"><span>1.400.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="./image/Product 9.png" alt="">
                            <h3>Túi xách thời trang nhập khẩu</h3>
                            <p>Thể loại: Thời trang & Mỹ phẩm</p>
                            <div class="creadits-product"><span>1.400.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center ">
                        <a class="content-product" href="">
                            <img src="./image/Product 10.png" alt="">
                            <h3>Giầy thể thao nâng chiều cao</h3>
                            <p>Thể loại: Công nghệ & Thời trang</p>
                            <div class="creadits-product"><span>1.400.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="./image/Product 11.png" alt="">
                            <h3>Máy lau nhà đa năng</h3>
                            <p>Thể loại: Công nghệ</p>
                            <div class="creadits-product"><span>1.400.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-4 animated fadeIn hide-div">
                    <div class="box-product text-center">
                        <a class="content-product" href="">
                            <img src="./image/Product 12.png" alt="">
                            <h3>Kính xem phim 3D</h3>
                            <p>Thể loại: Công nghệ & Thời trang</p>
                            <div class="creadits-product"><span>1.400.000</span><span>(VNĐ)</span></div>
                            <span class="add-to-cart"><span></span></span>
                        </a>
                    </div>
                    <!-- End box-product -->
                </div>
                <div class="col-md-12 load-more text-center">
                    <a href="javascript:void(0)"><img src="./image/load-more-icon.png" alt=""><span>Xem thêm</span></a>
                </div>
            </div>
        </div>
        <!--  End list-product -->
        <footer>
            <div class="container">
                <div class="col-md-4">
                    <h3>Youlook Shopping, MCN &copy; 2015</h3></div>
                <div class="col-md-8 text-right">
                    <ul>
                        <li><a href="">Về chúng tôi</a></li>
                        <li><a href="">Trợ giúp</a></li>
                        <li><a href="">Chính sách</a></li>
                        <li><a href="">Đổi trả</a></li>
                        <li><a href="">Trao đổi</a></li>
                        <li class="language-footer">
                            <a href=""><img src="./image/language-icon.png" alt=""> Việt Nam (VN)</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- End Wrapper -->
    <!-- Load jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>    
    <script>
	   new WOW().init();
        $( document ).ready(function() {
            $('.load-more').click(function(){
                $('.list-product').find('.hide-div').removeClass('hide-div');
                $(this).hide();
            });            
        });
        $(window).scroll(function(){ 
            var scrollPosition =  $(window).scrollTop();   
            // console.log(scrollPosition);
            if (scrollPosition >= 10) {    
                console.log(1121);
                $('.content-header').addClass('fixed-header');
                $('.creits-slider a').addClass('fixed-price');
            }else{
                $('.content-header').removeClass('fixed-header');
                $('.creits-slider a').removeClass('fixed-price');
            }
        });
	</script>
</body>

</html>
