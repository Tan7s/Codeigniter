<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
					<div class="table-responsive">

						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Xóa</th>
									<th class="cart-description item">Hình Ảnh</th>
									<th class="cart-product-name item">Tên sản phẩm</th>
									<th class="cart-qty item">Số lượng</th>
									<th class="cart-sub-total item">Giá sản phẩm</th>
									<th class="cart-total last-item">Tổng cộng</th>
								</tr>

							</thead><!-- /thead -->
							<tbody>
								<?php if($cart_list): ?>
									<?php foreach($cart_list as $cart_item): ?>
										<tr>
											<td class="">
												<a href="remove/<?php echo $cart_item['id'] ?>">Xóa</a>
											</td>
											<td class="cart-image">
												<a class="entry-thumbnail" href="detail.html">
													<img src="assets\images\products\<?php echo $cart_item['image'] ?>" alt="">
												</a>
											</td>
											<td class="cart-product-name-info">
												<h4 class='cart-product-description'><a
														href="?UI=detail&id=<?php echo $cart_item['id'] ?>">
														<?php echo $cart_item['name'] ?>
													</a></h4>
											</td>
											<td class="cart-product-quantity">
												<div class="quant-input">
													<input name='soluong[]' id="soluong" tan_id="<?php echo $cart_item['id'] ?>"
														onchange="soluongchange(this)" type="number" min="0"
														value="<?php echo $cart_item['soluong'] ?>">
												</div>
											</td>
											<td class="cart-product-sub-total"><span class="cart-sub-total-price format_price">
													<?php echo $cart_item['price'] ?>
												</span>
											</td>
											<td class="cart-product-grand-total">
												<span class="cart-grand-total-price format_price">
													<?php echo $cart_item['total'] ?>
												</span>
											</td>

										</tr>
									<?php endforeach ?>
								<?php endif ?>
							</tbody><!-- /tbody -->

							<tfoot>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn" id="form-button">
											<span class="">
												<a href="/" class="btn btn-upper btn-primary deleteall">Tiếp Tục Mua
													Hàng</a>

												<a href="removeall" class="btn btn-upper btn-primary deleteall">Xóa
													Tất Cả</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>
						</table><!-- /table -->
						<div class="col-md-12 col-sm-12 cart-shopping-total">
							<table class="table">
								<thead>
									<tr>
										<th>
											<?php if($cart_total): ?>
												<div id="cart-grand-total" class="cart-grand-total">
													Grand Total<span class="inner-left-md format_price">
														<?php echo $cart_total ?>
													</span>
												</div>
											<?php else: ?>
												<div id="cart-sub-total" class="cart-sub-total thongbao">
													<span class="inner-left-md">Chưa có sản phẩm nào hãy tiếp tục mua
														hàng</span>
												</div>
											<?php endif ?>
										</th>
									</tr>
								</thead><!-- /thead -->

								<tbody>
									<tr>
										<td>
											<div class="cart-checkout-btn pull-right">

												<?php if(session()->get('user_login')): ?>
													<button onclick="toggleForm()" type="submit"
														class="btn btn-primary checkout-btn">THANH TOÁN
														CHEKOUT</button>
												<?php else: ?>
													<button  type="button"
														class="btn btn-primary checkout-btn">THANH TOÁN CHEKOUT</button>

												<?php endif; ?>





												<span class="">Thánh toán đơn hàng tại đây....!</span>
											</div>
										</td>
									</tr>
								</tbody><!-- /tbody -->
							</table><!-- /table -->
						</div><!-- /.cart-shopping-total -->

					</div>

				</div><!-- /.shopping-cart-table -->

			</div><!-- /.body-content -->
		</div>
	</div>
</div>


<div class="ssss">
	<div class="form-container">
		<div class="asd">
			<div class="form-header"><span>Điền các thông tin dưới đây để thanh toán</span></div>
			<form class="form-content" action="payment" method="post">
				<div class="input">
					<span>Tên</span>
					<input class="item-input" type="text" name="name">
				</div>
				<div class="input">
					<span>Số điện thoại</span>
					<input class="item-input" type="text" name="phone">
				</div>
				<div class="input">
					<span>Địa chỉ</span>
					<input class="item-input" type="text" name="address">
				</div>
				<div class="input">
					<span>Ghi chú</span>
					<input class="item-input" type="text" name="note">
				</div>
				<input type="hidden" name="cart_total" value="<?php echo $cart_total ?>">
				<?php foreach($cart_list as $cart_item): ?>
					<input type="hidden" name="product_ids[]" value="<?php echo $cart_item['id']; ?>">
					<input type="hidden" name="product_quantities[]" value="<?php echo $cart_item['soluong']; ?>">
					<input type="hidden" name="product_prices[]" value="<?php echo $cart_item['price']; ?>">
				<?php endforeach; ?>
				<div class=" form-footer d-grid gap-2">
					<button type="submit" class="btn btn-danger">Thanh Toán</button>
					<button type="button" class="btn btn-secondary cancel-bt" onclick="toggleForm()">Hủy</button>
				</div>
			</form>
		</div>

	</div>
</div>