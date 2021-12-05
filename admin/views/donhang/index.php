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
				                <td><span id="status" class="badge badge-success badge-lg">
				                	<?= $item['status'] ?>
				                </span></td>
				                <td>
				                	<!-- badge badge-warning badge-lg
				                	badge badge-danger badge-lg -->
				                	<span class="dropdown">
				                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="fas fa-cogs"></i></button>
				                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
				                            <a href="#" style="color: blue;" class="dropdown-item"><i class="la la-eye"></i>Xem chi tiết</a>
				                            <a href="#" style="color: green ;" class="dropdown-item"><i class="la la-check"></i>Xác Nhận</a>
				                            <a href="javascript:;" onclick="lydohuy('<?= $item['reason']?>')" style="color: red;" class="dropdown-item"><i class="la la-trash"></i>Hủy đơn hàng</a>
				                            <a href="#" style="color: black;" class="dropdown-item"><i class="la la-trash"></i>Giao Hàng Thành Công</a>
				                        </span>
				                    </span>
				                </td>
				            </tr>
				            <?php endforeach ?>
				        </tbody>
					</table>
					</div>
					<!--/ Invoices table -->
				</div>