<div class="card-body">
	                <!-- Invoices List table -->
	                <div class="table-responsive">
	                <table id="invoices-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
				        <thead>
				            <tr>
				                <th><input type="checkbox" class="input-chk-all"></th>
				                <th>STT</th>
				                <th>Date</th>
				                <th>Mã ĐH</th>
				                <th>Tên KH</th>
				                <th>Email</th>
				                <th>SĐT</th>
				                <th>Address</th>
				                <th>Note</th>
				                <th>LD hủy</th>
				                <th>Tổng $</th>
				                <th>Status</th>
				                <th>HĐ</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				            	<?php foreach ($cates as $index => $item) :?>
				                <td><input type="checkbox" class="input-chk"></td>
				                <td><?= $index + 1 ?></td>
				                <td><?= $item['created_at'] ?></td>
								<td style="font-weight: 400;"><a href="" class="text-bold-600"><?= $item['id'] ?></a></td>
				                <td><?= $item['customer_name'] ?></td>
				                <td><?= $item['customer_email'] ?></td>
				                <td><?= $item['customer_phone_number'] ?></td>
				                <th style="font-weight: 400;"><?= $item['customer_address'] ?></th>
				                <td><?= $item['note'] ?></td>
				                <td><?= $item['reason'] ?></td>
				                <td><?= $item['total_price'] ?></td>
				                <td><span><?= $item['status'] ?>
				                </span></td>
				                <td>
				                	<!-- badge badge-warning badge-lg
				                	badge badge-danger badge-lg -->
				                	<span class="dropdown">
				                		<a href="<?= ADMIN_URL . 'donhang/donhangct?id=' . $item['id'] ?>">
				                			<i class="fas fa-cogs"></i>
				                		</a>
				                    </span>
				                </td>
				            </tr>
				            <?php endforeach ?>
				        </tbody>
					</table>
					</div>
					<!--/ Invoices table -->
				</div>
