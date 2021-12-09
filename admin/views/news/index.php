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
                        <th>Tiều đề</th>
                        <th>Hình ảnh</th>
                        <th>Nội dung</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'news/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($cates as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><textarea name="" id="" cols="50" rows="5"><?= $item['news_name'] ?></textarea></td>
                                <td><img src="<?= IMAGE_URL ?><?= $item['news_img'] ?>" with="150px" height="100px" alt=""></td>
                                <td><textarea name="" id="" cols="50" rows="5"><?= $item['content'] ?></textarea></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'news/capnhat?id=' . $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'news/xoa?id=' . $item['id'] ?>', '<?= $item['news_name'] ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>