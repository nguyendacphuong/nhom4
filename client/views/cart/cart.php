<div class="cart-main-area">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<form action="<?= BASE_URL . 'add-to-cart' ?>">
					<div class="table-content table-responsive">

						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">Ảnh sản phẩm</th>
									<th class="product-name">sản phẩm</th>
									<th class="product-price">Giá sản phẩm</th>
									<th class="product-quantity">Số lượng</th>
									<th class="product-subtotal">Thành tiền</th>
									<th class="product-remove">Xóa</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$totalPrice = 0;
								?>
								<?php foreach ($cart as $item) : ?>
									<tr>
										
										<td class="product-thumbnail"><a href="#"><img src="<?= $item['thumbnail'] ?>" alt="" /></a></td>
										<td class="product-name"><a href="#"></a><?= $item['title'] ?></td>
										<td class="product-price"><span class="amount"><?= $item['discount'] ?></span>$</td>
										<td class="product-quantity"><input type="number" value="<?= $item['quantity'] ?>" /></td>
										<td class="product-subtotal"><?= $item['discount'] * $item['quantity'] ?>$</td>
										<td class="product-remove"><a href="<?= BASE_URL . 'remove?id='. $item['id'] ?>"><i class="fa fa-times"></i></a></td>
										<?php $totalPrice += $item['discount'] * $item['quantity'] ?>
									</tr>
								<?php endforeach; ?>
								<tr>
									<td colspan="4">Tổng tiền</td>
									</td>
									<td class="product-subtotal"><?= $totalPrice ?>$</td>
								</tr>
							</tbody>
						</table>

					</div>
					<div class="row">
						<div class="col-md-8 col-sm-12">
							<div class="buttons-cart">
								<input type="hidden" name="id" id="" value="">
								<input type="submit" name="quantity" value="Update Cart" />
								<a href="<?= BASE_URL . 'check-out1'?>">Tiếp tục </a>
							</div>

						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
</div>
