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
    <link rel="stylesheet" type="text/css" href="assets/frontend/css/fontawesome.min.css">


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
                                    <?php 
                                        include 'models/frontend/getnameModel.php';
                                        $obj = getnameModel::get();
                                        echo $obj->name;
                                     ?>   
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

                                    <?php 
                                        // than danh muc
                                        include "controllers/frontend/thandanhmucController.php";
                                        //tạo obj
                                        $obj = new thandanhmucController();
                                        //chạy hàm index
                                        $obj->index();
                                     ?>

                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-3 sidebar col-left clearfix col-md-pull-9">
                    <aside id="column-left" class="left-column compliance aside-vetical-menu">
                        <aside class="blog-aside aside-item sidebar-category module_category category_custom" id="category_custom-1">
                            <div class="aside-title text-center text-xl-left mau1">
                                <h2 class="title-head"> <span>Danh mục sản phẩm</span> </h2> </div>


                                <!-- load MVC category -->
                                <?php 
                                    include "controllers/frontend/categoryController.php";
                                    $obj = new categoryController();
                                    $obj->index();
                                 ?>
                                <!-- end categoryView -->

                                
                        </aside>

                         <div class="aside-filter " id="filter-0">
                            <div class="filter-container">
                                <form name="filter_form" method="post" action="#">

        <aside class="aside-item">
            <div class="aside-title mau1">
                <h2 class="title-head margin-top-0 "> <span>Giá</span> </h2> </div>
            <div class="aside-content filter-group">
                <ul id="filter-group-price">
                    <li class=" filter-item filter-item--check-box"> <span> <label > <i class="mauchu"> &#9679;</i>  Tất cả </label> </span> </li>
                    <li class=" filter-item filter-item--check-box filter-item--green"> <span> <label> <input type="radio" value="1" onclick="loadFilter('b')" /> <i class="mauchu"> &#9679;</i>  Dưới 100k </label> </span> </li>
                    <li class=" filter-item filter-item--check-box filter-item--green"> <span> <label> <input type="radio"  value="2" onclick="loadFilter('c')" />  <i class="mauchu"> &#9679;</i>  Từ 100k - 200k </label> </span> </li>
                    <li class=" filter-item filter-item--check-box filter-item--green"> <span> <label> <input type="radio" value="3" onclick="loadFilter('d')" /> <i class="mauchu"> &#9679;</i>  Từ 200k - 500k </label> </span> </li>
                    <li class=" filter-item filter-item--check-box filter-item--green"> <span> <label> <input type="radio" value="4" onclick="loadFilter('e')" /> <i class="mauchu"> &#9679;</i>  Trên 500k </label> </span> </li>
                </ul>
            </div>
        </aside>

                                    <div class="panel-footer text-right hidden">
                                        <button type="button" id="button-filter" class="btn btn-primary"></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <script type="text/javascript">
                            function loadFilter(option) {
                                //Lay id category tu url = javascript
                                var url = window.location.href;
                                        var vitri = "";
                                        for(var i=url.length; i>=0 ; i--){
                                            if(url[i] == '='){
                                                vitri = i;
                                                break;
                                            }      
                                        }
                                        //id_category
                                        var id = "";
                                        for(var i=vitri+1; i<url.length; i++){
                                            id+=url[i];
                                        } 
                                switch(option){
                                    case 'all': 
                                        location.reload();
                                        break;
                                    case 'b': 
                                        location.href = "index.php?controller=filter&min=0&max=100000&category_id=" + id;
                                        break;
                                    case 'c': 
                                        location.href = "index.php?controller=filter&min=100000&max=200000&category_id=" + id;
                                        break;
                                    case 'd': 
                                        location.href = "index.php?controller=filter&min=200000&max=500000&category_id=" + id;
                                        break;
                                    case 'e': 
                                        location.href = "index.php?controller=filter&min=500000&max=10000000&category_id=" + id;
                                        break;
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