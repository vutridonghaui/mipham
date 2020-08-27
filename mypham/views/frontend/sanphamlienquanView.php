<!-- san pham lien quan view -->
<?php foreach($data as $rows): ?>
    <div class="item item-carousel">
        <div class="product-box">
            <div class="product-thumbnail flexbox-grid">
                <a href="cam-my.html" title="Cam Mỹ"> <img src="assets/upload/product/<?php echo isset($rows->img) ? $rows->img : ''; ?>" alt="<?php echo $rows->name ?>" /> </a>
                <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                    <form class="form variants form-nut-grid margin-bottom-0">
                        <div>
                            <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="Liên hệ mua hàng" href="index.php?area=frontend&controller=lienhe&key=<?php echo $rows->name ?>"> <i class="fa fa-shopping-bag"></i> </a> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" data-toggle="tooltip" title="Xem" class="btn-gray btn_view btn right-to"><i class="fa fa-eye"></i></a> </div>
                    </form>
                </div>
            </div>
            <div class="product-info a-center">
                <h3 class="product-name"> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" title="<?php echo $rows->name ?>" > <span ><?php echo $rows->name ?></span> </a> </h3>
                <div class="price-box clearfix">
                    <div class="special-price"> <span class="price product-price"><?php echo $rows->price ?>đ</span> </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>