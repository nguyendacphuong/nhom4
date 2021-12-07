<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <!--làm dòng tìm kiếm tại đây-->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>STT</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Ngày Tạo</th>
                    </thead>
                    <tbody>
                        <?php foreach ($itemcontacts as $index => $itemcontact) : ?>
                            <tr>
                                <td><?= $itemcontact['id'] ?></td>
                                <td><?= $itemcontact['name'] ?></td>
                                <td><?= $itemcontact['email'] ?></td>
                                <td><?= $itemcontact['phone_number'] ?></td>
                                <td><?= $itemcontact['subject_name'] ?></td>
                                <td><textarea><?= $itemcontact['note'] ?></textarea></td>
                                <th><?= $itemcontact['created_at'] ?></th>
                                <td>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'contact/xoa?id=' . $itemcontact['id'] ?>' , '<?= $itemcontact['name'] ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><i class="fas fa-trash"></i>