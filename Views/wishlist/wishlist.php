    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Wish List</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>
                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                     if (isset($_SESSION['wishlist'])) {
                                     foreach ($_SESSION['wishlist'] as $value) { ?>
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="?act=wishlist&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="assets/<?= $value['HinhAnh1'] ?>" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#"><?= $value['TenSP'] ?></a></h4></td>
                                        <td class="product-price text-center"><span class="amount"><?= number_format($value['DonGia']) ?> $</span></td>
                                        <td class="product-subtotal text-center"><a type="button" href="?act=cart&xuli=add&id=<?=$value['MaSP']?>" class="btn btn-small">Add To Cart</a></td>
                                    </tr>
                                  <?php }
                                  } ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
               	</div>
            </div>
        </div>
