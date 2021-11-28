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
                        <th>Tên slide</th>
                        <th>Hình</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'slide/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>

                        <?php foreach ($cates as $index => $item) :
                         $hinha =  $item['slideshow_img'];
                         if (empty($hinha)) {
                            $hinh = "không có";
                         } else {
                             
                             $hinh = "<img src='" . $hinha . "' height = '80px'>";
                         }
                    
                            ?>
                            
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $item['slide_name'] ?></td>
                                <td><?= $hinh?></td>
                                
                                <td>
                                    <a href="<?= ADMIN_URL . 'slide/capnhat?id=' . $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'slide/xoa?id=' . $item['id'] ?>', '<?= $item['slide_name'] ?>')" class="btn btn-sm btn-danger">
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
</div><i class="fas fa-trash"></i>