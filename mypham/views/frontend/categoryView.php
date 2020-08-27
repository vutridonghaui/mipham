<!-- Category View -->
<div class="aside-content">
    <div class="nav-category navbar-toggleable-md">
    	<?php foreach($category as $rows): ?>
        <ul class="nav navbar-pills">
            <li class="nav-item"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <a href="index.php?area=frontend&controller=category2&id=<?php echo $rows->category_id; ?>" class="nav-link"><?php echo $rows->name ?></a> </li>
        </ul>
   	 <?php endforeach ?>
    </div>
</div>