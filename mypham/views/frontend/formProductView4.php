<?php foreach($data as $rows): ?>
	<div class="row row-noGutter">
	    <div class="col-sm-12">
	        <div class="product-mini-item clearfix">
	            <div class="product-img relative">
	                <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo $rows->category_id; ?>"> <img src="assets/upload/product/<?php echo isset($rows->img) ? $rows->img : ''; ?>" alt="<?php echo $rows->name ?>" /> </a>
	                <div class="sale-flash">
	                    <div class="before"></div> Hot </div>
	            </div>
	            <div class="product-info">
	                <h3> <a href="index.php?area=frontend&controller=chitiet&id=<?php echo $rows->id; ?>&category_id=<?php echo isset($rows->category_id)?$rows->category_id?"" ; ?>" title="<?php echo $rows->name ?>" class="product-name" > <span ><?php echo $rows->name ?></span> </a> </h3>
	                <div class="price-box">
	                    <div class="special-price"> <span class="price product-price"><?php echo number_format($rows->price) ?> đ</span> </div>
	                    <div class="old-price"> <span class="price product-price-old"></span> </div>
	                </div>
	                <div>
	                	1234
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
<?php endforeach ?>