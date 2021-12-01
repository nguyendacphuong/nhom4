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
				                <th>Mã KH</th>
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
				        	<!-- PAID -->
				            <tr>
				            	<?php foreach ($cates as $index => $item): ?>
				                <td><input type="checkbox" class="input-chk"></td>
				                <td><?= $index + 1 ?></td>
				                
				                <td><?= $item['order_date'] ?></td>
								<td style="font-weight: 400;"><a href="#" class="text-bold-600"><?= $item['id'] ?></a></td>
				                <td><?= $item['user_id'] ?></td>
				                <td><?= $item['fullname'] ?></td>
				                
				                <td><?= $item['email'] ?></td>
				                <td><?= $item['phone_number'] ?></td>
				                <th style="font-weight: 400;"><?= $item['address'] ?></th>
				                <td><?= $item['note'] ?></td>
				                <td><?= $item['ly_do_huy'] ?></td>
				                <td><?= $item['total_money'] ?></td>
				                <td><span class="badge badge-success badge-lg"><?= $item['status'] ?></span></td>
				                <td>
				                	<span class="dropdown">
				                        <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
				                        <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
				                            <a href="#" class="dropdown-item"><i class="la la-eye"></i>Xem chi tiết</a>
				                            <a href="#" class="dropdown-item"><i class="la la-check"></i>Xác Nhận</a>
				                            <a href="#" class="dropdown-item"><i class="ft-upload"></i>Chuyển đến XNDH</a>
				                            <a href="#" class="dropdown-item"><i class="la la-trash"></i>Xóa đơn hàng</a>
				                        </span>
				                    </span>
				                </td>
				            <?php endforeach ?>
				            </tr>
				            
				        </tbody>
				        <tfoot>
				            <tr>
				                <th><input type="checkbox" class="input-chk-all"></th>
				                <th>STT</th>
				                <th>Date</th>
				                <th>Mã ĐH</th>
				                <th>Mã KH</th>
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
				        </tfoot>
					</table>
					</div>
					<!--/ Invoices table -->
				</div>