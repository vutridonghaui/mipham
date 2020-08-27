<!-- Sản phẩm form 3 -->
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
	                <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart mau2" data-toggle="tooltip" title="Liên hệ mua hàng" href="index.php?area=frontend&controller=lienhe&key=<?php echo $rows->name ?>"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Liên hệ mua hàng </a> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>" data-toggle="tooltip" title="Xem" class="btn-gray btn_view btn right-to"><i class="fa fa-eye"></i></a> </form>
	        </div>
	    </div>
	</div>
<?php endforeach ?>