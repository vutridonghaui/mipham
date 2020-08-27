<section class="products-view">
    <!-- hien thi theo chieu ngang -->
    <div class="row list_products product-grid">
        <!-- MVC san pham Form 2 -->
        <?php 
            include "controllers/frontend/productController.php";
            // $categoy_id=3;
            $id = isset($_GET["id"]) && is_numeric($_GET["id"]) ? $_GET["id"]:0;
            $obj = new productController();
            $obj->sanphamdanhmucLuoi($id);
         ?>
            <!-- end MVC san pham Form 2 -->
    </div>
    <!-- End hien thi theo chieu ngang -->

    <!-- ---- hien thi theo chieu doc ---- -->
    <div class="row list_products product-list row-noGutter">
        <!-- MVC san pham Form 3 -->
        <?php                                              
            // $categoy_id=3;
            $obj = new productController();
            $obj->sanphamdanhmucDoc($id);
        ?>
            <!-- end MVC san pham Form 3 -->
    </div>
    <!-- end hien thi theo chieu doc -->
</section>