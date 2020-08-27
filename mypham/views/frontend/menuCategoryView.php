<div class="widget">
    <div class="marked-title">
        <h3>Danh mục tin tức</h3>
    </div>
    <ul class="tags">
        <?php 
            foreach($category as $rows):
         ?>
        <li><a class="photo" href="index.php?controller=news&action=category&id=<?php echo $rows->category_id; ?>"><?php echo $rows->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
</div>