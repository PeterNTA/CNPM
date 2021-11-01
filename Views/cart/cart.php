    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Shopping Cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->

        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
					</div>
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>

                          <?php
							                   if (isset($_SESSION['sanpham'])) {
								                           foreach ($_SESSION['sanpham'] as $value) { ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img class="cart__image" src="assets/<?= $value['HinhAnh1'] ?>" alt=""></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?> </a>
                                        </div>

                                        <div class="cart__meta-text">
                                            Color: <?=$value['Color']?><br>Size: <?=$value['Size']?><br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money"><?= number_format($value['DonGia']) ?> $</span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="?act=cart&xuli=delete&id=<?=$value['MaSP']?>"><i class="icon icon-minus"></i></a>
                                                <input class="cart__qty-input qty" type="text" name="updates[]" id="qty" value="<?= $value['SoLuong'] ?>" pattern="[0-9]*">
                                                <a class="qtyBtn plus" href="?act=cart&xuli=update&id=<?=$value['MaSP']?>"><i class="icon icon-plus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money"><?= number_format($value['ThanhTien']) ?> $</span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                                </tr>
                              <?php }
                              } ?>

                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="#" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                                    <button type="submit" name="clear" class="btn btn-secondary btn--small  small--hide">Clear Cart</button>
                                    	<button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
                                    </td>
                                </tr>
                            </tfoot>
                    </table>
                    </form>
               	</div>


                <div class="container mt-4">
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Estimate Shipping and Tax</h5>
							                <form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_country">Country</label>
                                    <select id="address_country" name="address" data-default="province">
                                      <option value="---" data-provinces="[]">---</option>
                                      <option value="Danang" data-provinces="[]">Đà Nẵng</option>
                                        <option value="Hochiminh" data-provinces="[]">TPHCM</option>
                                        <option value="Hanoi" data-provinces="[]">Hà Nội</option>
                                        <option value="Quangbinh" data-provinces="[]">Quảng Bình</option>
                                        <option value="Quangtri" data-provinces="[]">Quảng Trị</option>
                                        <option value="Hue" data-provinces="[]">Huế</option>
                                        <option value="Quangnam" data-provinces="[]">Quảng Nam</option>
                                        <option value="Khanhhoa" data-provinces="[]">Khánh hòa</option>
                                        <option value="Cantho" data-provinces="[]">Cần thơ</option>
                                        <option value="Hatinh" data-provinces="[]">Hà Tĩnh</option>
                                        <option value="Nghean" data-provinces="[]">Nghệ An</option>
                                        <option value="Khac" data-provinces="[]">Khác</option>
                                </div>
                                <div class="form-group">
                                    <label for="address_zip">Postal/Zip Code</label>
                                    <input type="text" id="address_zip" name="address[zip]" placeholder="Zip Code...">
                                </div>

                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Calculate shipping"></div>
                                </div>
                            </form>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">
                              <form class="" action="?act=checkout" method="post">
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money"><?=$count?> $</span></span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">VAT</span>
                                <span class="col-12 col-sm-6 text-right">$10.00</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title">Shipping</span>
                                <span class="col-12 col-sm-6 text-right">Free shipping</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money"><?=number_format($total,1)?></span></span>
                              </div>
                              <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                              <?php if($_SESSION['sanpham']!=null){ ?>
                              <p class="cart_tearm">
                                <label>
                                  <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="">
                                  I agree with the terms and conditions
								                 </label>
                              </p>
                              <a type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" href="?act=checkout" value="Proceed To Checkout" disabled="disabled">Proceed To Checkout</a>
                              <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                              <p><a href="?act=checkout">Checkout with Multiple Addresses</a></p>
                            <?php } ?>
                            </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
