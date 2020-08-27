<!DOCTYPE html>
<html dir="ltr" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <title>Sản phẩm</title>
    <base />
    <meta name="description" content="" />
    <meta property="fb:app_id" content="2302978959820165" />
    <meta name="robots" content="index, follow, noodp, noydir" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <!-- START STYLE -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/mypham/catalog/view/theme/freshfood/stylesheet/stylesheet.min6973.css?v=1567956137" data-minify="1" />
    <script type="text/javascript" src="assets/frontend/mypham/catalog/view/theme/freshfood/javascript/jquery-3.3.1.min6973.js?v=1567956137"></script>
    <link href="assets/frontend/mypham/image/catalog/logo/fav2.png" rel="icon" />
    <link href="san-pham.html" rel="canonical" />
    <link rel="stylesheet" type="text/css" href="assets/frontend/mypham/catalog/view/theme/freshfood/stylesheet_custom/stylesheet6973.css?v=1567956137" /> </head>
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/style.css">

<body class="product-productall">
    

<!-- header -->
    <?php 
        // load MVC Header controllers
        include "controllers/frontend/headerController.php";
        //tạo obj
        $obj = new headerController();
        //chạy hàm index
        $obj->index();
     ?>
<!-- end header -->

    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb ">
                        <li>
                            <a href="index.php"> <span><i class="fa fa-home"></i> Trang chủ</span> </a> <span><i class="fa fa-angle-right"></i></span> 
                        </li>
                        <li>
                            <a > <strong class="mauchu">Sản phẩm > </strong>  </a>
                        </li>
                        <li>
                            <a> 
                                <strong class="mauchu"> 
                                    <!-- lấy tên danh mục đang xet -->
                                    <!-- <?php 
                                        // include 'models/frontend/getnameModel.php';
                                        // $obj = getnameModel::get();
                                        // echo $obj->name;
                                     ?>  -->  
                                </strong>  
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page">
        <div class="policy d-flex justify-content-around " id="header_services-0" style="background-image: none;">
            <div class="item-policy d-flex align-items-center" style="width:">
                <a href="javascript:void(0)"> <img src="assets/frontend/mypham/image/cache/catalog/services/policy1-0x0.png" alt="Miễn phí vận chuyển" class="fa" /> </a>
                <div class="info a-left"> <a href="javascript:void(0)"> Miễn phí vận chuyển</a>
                    <p>
                        <p>B&aacute;n k&iacute;nh 10 km</p>
                    </p>
                </div>
            </div>
            <div class="item-policy d-flex align-items-center" style="width:">
                <a href="javascript:void(0)"> <img src="assets/frontend/mypham/image/cache/catalog/services/policy2-0x0.png" alt=" Hỗ trợ 24/7" class="fa" /> </a>
                <div class="info a-left"> <a href="javascript:void(0)"> Hỗ trợ 24/7</a>
                    <p>
                        <p>Hotline:&nbsp;<a href="callto:19001009">0123456789</a></p>
                    </p>
                </div>
            </div>
            <div class="item-policy d-flex align-items-center" style="width:">
                <a href="javascript:void(0)"> <img src="assets/frontend/mypham/image/cache/catalog/services/policy3-0x0.png" alt="Giờ làm việc" class="fa" /> </a>
                <div class="info a-left"> <a href="javascript:void(0)"> Giờ làm việc</a>
                    <p>
                        <p>Từ 7h-20h hàng ngày</p>
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('.header .header-content .header_services').append($('#header_services-0'));
        </script>
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                <div id="content" class="main_container collection col-sm-12 col-xs-12 col-md-9 col-md-push-3">
                    <div class="box-heading hidden relative">
                        <h1 class="title-head margin-top-0">Sản phẩm</h1> </div>
                    <div class="category-products products">
                        <div class="sortPagiBar">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-xs-left text-sm-right">
                                    <div class="bg-white clearfix">
<!--                                         <div id="sort-by">
                                            <label class="left hidden-xs">Sắp xếp theo: </label>
                                            <ul>
                                                <li> <span class="val"> Mặc định </span>
                                                    <ul class="ul_2">
                                                        <li> <a href="san-phamf83a?sort=p.date_added&amp;order=DESC">Mặc định</a> </li>
                                                        <li> <a href="san-pham3631?sort=pd.name&amp;order=ASC">Tên (A - Z)</a> </li>
                                                        <li> <a href="san-phamf933?sort=pd.name&amp;order=DESC">Tên (Z - A)</a> </li>
                                                        <li> <a href="san-phamb721?sort=p.price&amp;order=ASC">Giá (Thấp &gt; Cao)</a> </li>
                                                        <li> <a href="san-pham44ca?sort=p.price&amp;order=DESC">Giá (Cao &gt; Thấp)</a> </li>
                                                        <li> <a href="san-phamf2b6?sort=rating&amp;order=DESC">Đánh giá (Cao nhất)</a> </li>
                                                        <li> <a href="san-pham23e8?sort=rating&amp;order=ASC">Đánh giá (Thấp nhất)</a> </li>
                                                        <li> <a href="san-pham950c?sort=p.model&amp;order=ASC">Dòng sản phẩm (A - Z)</a> </li>
                                                        <li> <a href="san-pham942a?sort=p.model&amp;order=DESC">Dòng sản phẩm (Z - A)</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <div class="view-mode f-left">
                                            <a href="javascript:void(0)" id="grid-view" data-toggle="tooltip" title="Lưới">
                                                <label class="left"> <b class="btn button-view-mode view-mode-grid"> <i class="fa fa-th" aria-hidden="true"></i> </b> <span>Lưới</span> </label>
                                            </a>
                                            <a href="javascript:void(0)" id="list-view" data-toggle="tooltip" title="Danh sách">
                                                <label class="left"> <b class="btn button-view-mode view-mode-list"> <i class="fa fa-th-list" aria-hidden="true"></i> </b> <span>Danh sách</span> </label>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Thân danh mục -->

                                    <section class="products-view">
                                        <!-- hien thi theo chieu ngang -->
                                        <div class="row list_products product-grid">
                                            <!-- MVC san pham Form 2 -->
                                            <?php foreach($data as $rows): ?>
                                                <div class="col-xs-6 col-xss-6 col-sm-4 col-md-4 col-lg-4">
                                                    <div class="product-box">
                                                        <div class="product-thumbnail flexbox-grid">
                                                            <a href="kiwi-xanh.html" title="Kiwi xanh"> <img src="assets/upload/product/<?php echo isset($rows->img) ? $rows->img : ''; ?>" alt="<?php echo $rows->name ?>" /> </a>
                                                            <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                                <form class="form variants form-nut-grid margin-bottom-0">
                                                                    <div>
                                                                        <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="Liên hệ mua hàng" href="checkout/checkout.html?product_id=86&amp;redirect=true"> <i class="fa fa-shopping-bag"></i> </a> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" data-toggle="tooltip" title="Xem" class="btn-gray btn_view btn right-to"><i class="fa fa-eye"></i></a> </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" > <span > <?php echo $rows->name ?> </span> </a> </h3>
                                                            <div class="price-box clearfix">
                                                                <div class="special-price"> <span class="price product-price"> <?php echo number_format($rows->price) ?> đ </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <!-- End hien thi theo chieu ngang -->

                                        <!-- ---- hien thi theo chieu doc ---- -->
                                        <div class="row list_products product-list row-noGutter">
                                            <?php foreach($data as $rows): ?>
                                                <div class="col-xs-12">
                                                    <div class="product-box clearfix">
                                                        <div class="product-thumbnail f-left">
                                                            <a href="#" title="<?php echo $rows->name ?>"> <img src="assets/upload/product/<?php echo isset($rows->img) ? $rows->img : ''; ?>" alt="<?php echo $rows->name ?>" /> </a>
                                                        </div>
                                                        <div class="product-info f-left">
                                                            <h3 class="product-name"> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" title="<?php echo $rows->name ?>" > <span ><b class="text1"><?php echo $rows->name ?></b></span> </a> </h3>
                                                            <div class="price-box clearfix">
                                                                <div class="special-price f-left"> <span class="price product-price"><?php echo number_format($rows->price) ?> đ</span> </div>
                                                            </div>
                                                            <div class="product-summary margin-top-10"> </div>
                                                            <form class="variants pro-action-btn margin-top-15">
                                                                <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart mau2" data-toggle="tooltip" title="Liên hệ mua hàng" href="checkout/checkout.html?product_id=86&amp;redirect=true"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Liên hệ mua hàng </a> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" data-toggle="tooltip" title="Xem" class="btn-gray btn_view btn right-to"><i class="fa fa-eye"></i></a> </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                        <!-- end hien thi theo chieu doc -->
                                    </section>

                         <!-- Thân danh mục -->

                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-3 sidebar col-left clearfix col-md-pull-9">
                    <aside id="column-left" class="left-column compliance aside-vetical-menu">
                        <aside class="blog-aside aside-item sidebar-category module_category category_custom" id="category_custom-1">
                            <div class="aside-title text-center text-xl-left mau1">
                                <h2 class="title-head"> <span>Danh mục sản phẩm</span> </h2> </div>  

                                <!-- Load MVC category -->
                                <?php 
                                    include "controllers/frontend/categoryController.php";
                                    $obj = new categoryController();
                                    $obj->index();

                                ?>
                                <!-- End mvc categoy -->

                        </aside>

                        <script type="text/javascript">
                            function loadFilter() {
                                var url = 'san-pham.html';
                                var arr = [];
                                var price = $('input[name^=\'price\']:checked').val();
                                if (price != null) {
                                    arr.push('price_filter=' + price);
                                }
                                var manufacturer = [];
                                $('input[name^=\'manufacturer\']:checked').each(function(element) {
                                    manufacturer.push(this.value);
                                });
                                if (manufacturer.length != 0) {
                                    arr.push('manufacturer_filter=' + manufacturer.join(','));
                                }
                                var option = [];
                                $('input[name^=\'option\']:checked').each(function(element) {
                                    option.push(this.value);
                                });
                                if (option.length != 0) {
                                    arr.push('option_filter=' + option.join(','));
                                }
                                if (arr.length > 0) {
                                    var path = arr.join('&');
                                    location = (url.indexOf('?') >= 0) ? url + '&' + path : url + '?' + path;
                                }
                            }
                        </script>
                        <div class="aside-item aside-mini-list-product mb-5 product_special " id="product_special-0">
                            <div>
                                <div class="aside-title mau1">
                                    <h2 class="title-head"> <a>Sản phẩm hot</a> </h2> </div>
                                <div class="aside-content related-product">
                                    <div class="product-mini-lists">
                                        <div class="products">
                                
                                <!-- load MCV form 4 -->
                                        <?php 
                                            include "controllers/frontend/saleProductController.php";
                                            $obj = new saleProductController();
                                            $obj->hotProduct(6);
                                         ?>
                                <!-- load MCV form 4 -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="clearfix"></div>
                <section class="awe-section-12 carousel_partner module_carousel " id="carousel-0">
                    <div class="section section-brand mb-5">
                        <div class="container">
                            <h2 class="hidden">Partner</h2>
                            <div class="owl-carousel owl-theme" data-nav="true" data-lg-items="6" data-md-items="6" data-sm-items="2" data-xs-items="2">
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand1-165x80.png" alt="brand 1" /> </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand2-165x80.png" alt="brand 2" /> </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand3-165x80.png" alt="brand 3" /> </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand4-165x80.png" alt="brand 4" /> </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand5-165x80.png" alt="brand 5" /> </a>
                                </div>
                                <div class="brand-item">
                                    <a href="javascript:void(0)" class="img25"> <img src="assets/frontend/mypham/image/cache/catalog/hang-san-xuat/brand6-165x80.png" alt="brand 6" /> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>


    <!--  load MVC footer -->
    <?php 
        include "controllers/frontend/footerController.php";
        //khoi tao
        $obj =  new footerController();
        //chay ham index de load view
        $obj->index();
     ?>
    <!-- end footer --> -->


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <script type="text/javascript" src="assets/frontend/mypham/catalog/view/theme/freshfood/javascript/zozo-main.min6973.js?v=1567956137"></script>
    <!-- Facebook script -->
    <div id="fb-root"></div>
    <script type="text/javascript">
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=2302978959820165";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Show Popup Cart -->
    <button id="btn_show_cart" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-popupcart-modal-lg" style="display: none;"></button>
    <div class="modal fade bs-popupcart-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times; </span> </button>
                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng </h4> </div>
                <div class="modal-body" id="load_info_cart"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tiếp tục mua hàng</button> <a href="checkout/checkout.html" class="btn btn-primary">Tiến hành thanh toán</a> </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        /* Sau khi tat khung popup cart, cap nhat lai gio hang tren header */
        $('.bs-popupcart-modal-lg').on('hidden.bs.modal', function(e) {
            $.ajax({
                url: '/checkout/cart/getTotalProductInCart',
                type: 'post',
                dataType: 'json',
                beforeSend: function() {},
                complete: function() {},
                success: function(json) {
                    var out = json['total'].substr(0, json['total'].indexOf(' '));
                    $('#cart-total').html(out);
                    $('#cart > ul').load('/common/cart/info ul li');
                }
            });
        });
    </script>
</body>
<!-- Mirrored from vanh19000.myzozo.net/san-pham by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2019 15:40:31 GMT -->

</html>