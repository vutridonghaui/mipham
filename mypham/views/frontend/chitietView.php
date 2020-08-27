<!-- <?php 
	// echo "<pre>";
		// print_r($data);
	// echo "</pre>";
 ?> -->

 <!DOCTYPE html>
<html dir="ltr" lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#FFFFFF" />
    <title>Chitiet</title>
    <base />

    <meta property="fb:app_id" content="2302978959820165" />
    <meta name="robots" content="index, follow, noodp, noydir" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <!-- START STYLE -->
    <link rel="stylesheet" type="text/css" href="assets/frontend/mypham/catalog/view/theme/freshfood/stylesheet/stylesheet.minf48d.css?v=1567956187" data-minify="1" />
    <script type="text/javascript" src="assets/frontend/mypham/catalog/view/theme/freshfood/javascript/jquery-3.3.1.minf48d.js?v=1567956187"></script>
    <link href="assets/frontend/mypham/catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="assets/frontend/mypham/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="kiwi-xanh.html" rel="canonical" />
    <link href="assets/frontend/mypham/image/catalog/logo/fav2.png" rel="icon" />
    <script src="assets/frontend/mypham/catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="assets/frontend/mypham/catalog/view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>
    <script src="assets/frontend/mypham/catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="assets/frontend/mypham/catalog/view/theme/freshfood/stylesheet_custom/stylesheetf48d.css?v=1567956187" /> </head>
    <link rel="stylesheet" href="assets/frontend/css/style.css">

<body class="product-product-86">

	<!-- header -->
    <?php 
        // load MVC controllers
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
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.php"> <span><i class="fa fa-home"></i> Trang chủ</span> </a> <span><i class="fa fa-angle-right"></i></span> </li>
                        <li>
                            <a href="#"> <span>Sản phẩm</span> </a> <span><i class="fa fa-angle-right"></i></span> </li>
                        <li>
                            <a href="#"> <strong class="mauchu"><?php echo $data->name; ?></strong> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product ">
        <meta content="kiwi-xanh.html" />
        <meta content="assets/frontend/mypham/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-700x700.jpg" />
        <div class="policy d-flex justify-content-around " id="header_services-0" style="background-image: none;">
            <div class="item-policy d-flex align-items-center" style="width:">
                <a href="javascript:void(0)"> <img src="assets/frontend/mypham/image/cache/catalog/services/policy1-0x0.png" alt="Miễn phí vận chuyển" class="fa" /> </a>
                <div class="info a-left"> <a href="javascript:void(0)"> Miễn phí vận chuyển</a>
                    <p>
                        <p>B&aacute;n k&iacute;nh 100 km</p>
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
                        <p>T2 - T7 Giờ h&agrave;nh ch&iacute;nh</p>
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
                <div id="content" class="col-sm-12 col-xs-12 col-md-9 ">
                    <div class="details-product">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <div class="large-image">
                                    <a href="assets/frontend/mypham/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-700x700.jpg" data-rel="prettyPhoto[product-gallery]"> 

                                    	<img id="zoom_01" src="assets/upload/product/<?php echo isset($data->img) ? $data->img : ''; ?>" alt="<?php echo $data->name; ?>"> 

                                    </a>
                                    <div class="hidden"> </div>
                                </div>

                                <div id="gallery_01" class="owl-carousel owl-theme thumbnail-product" data-md-items="4" data-sm-items="4" data-xs-items="4" data-xss-items="2" data-margin="10" data-nav="true">

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 details-pro">
                                <h1 class="title-head"><?php echo isset($data->name)?$data->name:""; ?></h1>

                                <div class="status clearfix">
                                    <div class="clearfix"> Mã sản phẩm: <strong><?php echo $data->code; ?></strong> </div>

                                </div>
                                <div class="price-box clearfix">
                                    <div class="special-price"> <span class="price product-price"> <?php echo number_format(isset($data->price)?$data->price:"") ?>  vnđ</span> </div>
                                    <ul class="list-unstyled"> </ul>
                                </div>

                                <div class="price-box clearfix">
                                    <?php echo isset($data->content)?$data->content:""; ?>
                                </div>

                                <div class="product-summary product_description margin-bottom-15"> </div>
                                <div id="product" class="form-product">
                                    <div class="margin-bottom-10 dqdt-form form">
                                        <div class="box-variant clearfix ">
                                            <input type="hidden" name="product_id" value="86" /> </div>
                                        <div class="form-group form-groupx form-detail-action clearfix">
                                            <!-- <div class="btn btn-lg btn-primary " type="button" id="button-cart" data-loading-text="Đang tải..."> 
                                                <a href="index.php?area=frontend&controller=lienhe&key=<?php echo $rows->name ?>">Liên hệ mua hàng</a>
                                            </div> -->
                                            <div class="btn btn-lg btn-primary " >
                                                <a href="index.php?area=frontend&controller=lienhe&key=<?php echo $data->name ?>" style="color: white !important;">Liên hệ mua hàng</a>
                                          
                                            </div>
                                        </div>
                                    </div>
                                    <a href="google.com"></a>
                                    <div class="social-sharing">
                                        <div class="social-media" data-permalink="kiwi-xanh.html">
                                            <div class="social-buttons">
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Facebook"> <img alt="Chia sẻ lên Facebook" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/facebook.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Twitter"> <img alt="Chia sẻ lên Twitter" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/twitter.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Linkedin"> <img alt="Chia sẻ lên Linkedin" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/linkedin.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Pinterest"> <img alt="Chia sẻ lên Pinterest" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/pinterest.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Gmail"> <img alt="Chia sẻ lên Gmail" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/gmail.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Skype"> <img alt="Chia sẻ lên Skype" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/skype.png" /> </a>
                                                <a rel="nofollow" target="_blank" href="#" title="Chia sẻ lên Zalo"> <img alt="Chia sẻ lên Zalo" width="25" src="assets/frontend/mypham/catalog/view/theme/default/image/social/zalo.png" /> </a>
                                            </div>
                                            <style type="text/css">
                                                .social-buttons {
                                                    display: block;
                                                    width: 100%;
                                                }
                                                
                                                .social-buttons a {
                                                    display: inline-block;
                                                    border-radius: 5px;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 margin-top-15 margin-bottom-10">
                                <div class="product-tab e-tabs">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link" data-tab="tab-description">
                                            <h3 href="#tab-description" data-toggle="tab"> <span>Mô tả</span> </h3> </li>
                                      
                                    </ul>
                                    <div class="tab-description tab-content" id="tab-description">
                                        <div class="rte">
                                            
                                            <?php echo $data->description ?>

                                        </div>
                                    </div>

                                </div>
                                <hr />
                                <div class="fb-comments" data-href="http://vanh19000.myzozo.net/kiwi-xanh" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-3 sidebar clearfix">
                    <aside id="column-right" class="right-column compliance aside-vetical-menu">
                        <div class="aside-item aside-mini-list-product mb-5 product_special " id="product_special-0">
                            <div>
                                <div class="aside-title mau1">
                                    <h2 class="title-head"> <a href="san-pham-giam-gia">Sản phẩm hot</a> </h2> </div>
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
            </div>
        </div>
        <section class="section featured-product wow fadeInUp mb-4">
            <div class="container">
                <div class="section-title a-center ">
                    <h2> <a href="javascript:void(0)" class="mau1">Sản phẩm Liên quan</a> </h2> </div>
                <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs" data-nav="true" data-lgg-items="4" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xss-items="2">

            <!-- load mvc san pha, liem quan -->
                <?php 
                    include "controllers/frontend/sanphamlienquanController.php";
                    $obj = new sanphamlienquanController();
                    $obj->index();
                ?>
             <!-- end load mvc san pham lien quan -->
             
                </div>
            </div>
        </section>
        <div class="container">
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
    </section>
    <script type="text/javascript">
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {
            $.ajax({
                url: '/product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function() {
                    $('#recurring-description').html('');
                },
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('#button-cart').on('click', function() {
            $.ajax({
                url: '/checkout/cart/add',
                type: 'post',
                data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
                dataType: 'json',
                beforeSend: function() { /*$('#button-cart').button('loading');*/ },
                complete: function() { /*$('#button-cart').button('reset');*/ },
                success: function(json) {
                    $('.alert, .text-danger').remove();
                    $('.form-group').removeClass('has-error');
                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));
                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }
                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        } /* Highlight any found errors */
                        $('.text-danger').parent().addClass('has-error');
                    }
                    if (json['success']) {
                        $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                        var number = json['total'].split(' ')[0];
                        setTimeout(function() {
                            $('#cart .cartCount2').html('(' + number + ')');
                            $('#cart #cart-total').html(number);
                            $('.icon-cart-mobile .cartCount').html(number);
                        }, 100);
                        $('html, body').animate({
                            scrollTop: 0
                        }, 'slow');
                        $('#cart .top-cart-content').load('/common/cart/info ul#cart-sidebar');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $('.date').datetimepicker({
            pickTime: false
        });
        $('.datetime').datetimepicker({
            pickDate: true,
            pickTime: true
        });
        $('.time').datetimepicker({
            pickDate: false
        });
        $('button[id^=\'button-upload\']').on('click', function() {
            var node = this;
            $('#form-upload').remove();
            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
            $('#form-upload input[name=\'file\']').trigger('click');
            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }
            timer = setInterval(function() {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);
                    $.ajax({
                        url: '/tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() { /*$(node).button('loading');*/ },
                        complete: function() { /*$(node).button('reset');*/ },
                        success: function(json) {
                            $('.text-danger').remove();
                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }
                            if (json['success']) {
                                alert(json['success']);
                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
    </script>
    <script type="text/javascript">
        $('#review').delegate('.pagination a', 'click', function(e) {
            e.preventDefault();
            $('#review').fadeOut('slow');
            $('#review').load(this.href);
            $('#review').fadeIn('slow');
        });
        $('#button-review').on('click', function() {
            $.ajax({
                url: '/product/product/write?product_id=86',
                type: 'post',
                dataType: 'json',
                data: $("#form-review").serialize(),
                beforeSend: function() { /*$('#button-review').button('loading');*/ },
                complete: function() { /*$('#button-review').button('reset');*/ },
                success: function(json) {
                    $('.alert-success, .alert-danger').remove();
                    if (json['error']) {
                        $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                    }
                    if (json['success']) {
                        $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
                        $('input[name=\'name\']').val('');
                        $('textarea[name=\'text\']').val('');
                        $('input[name=\'rating\']:checked').prop('checked', false);
                    }
                }
            });
        });
        $(document).ready(function() {
            $('.thumbnails').magnificPopup({
                type: 'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
    <!--custom-->
    <script type="text/javascript">
        $('.qtyplus').on('click', function(e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
            if (!isNaN(currentVal)) {
                $('input[data-field=' + fieldName + ']').val(currentVal + 1);
            } else {
                $('input[data-field=' + fieldName + ']').val(1);
            }
        });
        $('.qtyminus').on('click', function(e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
            if (!isNaN(currentVal) && currentVal > 1) {
                $('input[data-field=' + fieldName + ']').val(currentVal - 1);
            } else {
                $('input[data-field=' + fieldName + ']').val(1);
            }
        });
    </script>

			    <!--  load MVC footer -->
			    <?php 
			        include "controllers/frontend/footerController.php";
			        //khoi tao
			        $obj =  new footerController();
			        //chay ham index de load view
			        $obj->index();
			     ?>
			    <!-- end footer --> 

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
    <script type="text/javascript" src="assets/frontend/mypham/catalog/view/theme/freshfood/javascript/zozo-main.minf48d.js?v=1567956187"></script>
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
<!-- Nguyễn Văn Anh - KHMT2 -->
</html>