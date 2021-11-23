<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                              <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên tài khoản</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Role</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'user/tao-moi'?>" class="btn btn-sm btn-success">Tạo tài khoản mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach($cates as $index => $item): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['username'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $item['tell'] ?></td>
                                <td><?= $item['address'] ?></td>
                                <td><?= $item['level'] == 1 ? "Admin" : "Khách hàng" ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'taikhoan/capnhat?id_user='. $item['id_user'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'taikhoan/xoa?id_user='. $item['id_user'] ?>', '<?= $item['id_user']?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>