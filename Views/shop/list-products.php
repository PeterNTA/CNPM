
<div class="grid-products grid--view-items">
    <div class="row">
      <?php
    			if(isset($data) and $data != NULL){
    				foreach ($data as  $value) {
    		?>
        <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
            <!-- start product image -->
            <div class="product-image">
                <!-- start product image -->
                <a href="?act=detail&xuli=detail&id=<?=$value['MaSP']?>">
                    <!-- image cart&xuli=add&id-->
                    <img class="primary blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh1']?>" alt="image" title="product">
                    <!-- End image -->
                    <!-- Hover image -->
                    <img class="hover blur-up lazyload" data-src="" src="assets/<?=$value['HinhAnh2']?>" alt="image" title="product">
                    <!-- End hover image -->
                    <!-- product label -->
                    <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                    <!-- End product label -->
                </a>
                <!-- end product image -->

                <!-- Start product button -->
                <div class="variants add">
                    <a  class="btn btn-addto-cart" type="button" href="?act=cart&xuli=add&id=<?=$value['MaSP']?>">Add To Cart</a>
                </div>
                <div class="button-set">
                    <a href="#"  title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                    <div class="wishlist-btn">
                        <a class="wishlist add-to-wishlist" href="?act=wishlist&xuli=add&id=<?=$value['MaSP']?>" title="Add to Wishlist">
                            <i class="icon anm anm-heart-l"></i>
                        </a>
                    </div>
                    <div class="compare-btn">
                        <a class="compare add-to-compare" href="?act=compare&xuli=add&id=<?=$value['MaSP']?>" title="Add to Compare">
                            <i class="icon anm anm-random-r"></i>
                        </a>
                    </div>
                </div>
                <!-- end product button -->
            </div>
            <!-- end product image -->

            <!--start product details -->
            <div class="product-details text-center">
                <!-- product name -->
                <div class="product-name">
                    <a href="?act=detail&id=<?=$value['MaSP']?>"><?=$value['TenSP']?></a>
                </div>
                <!-- End product name -->
                <!-- product price -->
                <div class="product-price">
                    <span class="price"><?=number_format($value['DonGia'])?> $</span>
                </div>
                <!-- End product price -->

                <div class="product-review">
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star"></i>
                    <i class="font-13 fa fa-star-o"></i>
                </div>
                <!-- Variant -->
                <!-- End Variant -->
            </div>
            <!-- End product details -->
        </div>
      <?php }}else{
    echo '<p> Products is empty </p>';}?>

    </div>
</div>
<?php require_once './Views/quickview.php'; ?>
