<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'sanpham/luupro' ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                    <div class="col-6 offset-3">
                    <input type="hidden" name="id"  value="<?php echo $lis['id']; ?>">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" value="<?php echo $lis['title']; ?> " class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['title-err'])) : ?>
                            <p class="erros"><?= $_GET['title-err']; ?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" name="price" value="<?php echo $lis['price']; ?> " class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['price-err"'])) : ?>
                            <p class="erros"><?= $_GET['price-err"']; ?></p>
                            <?php endif ?>
                        </div>          
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="text" name="discount"  value="<?php echo $lis['discount']; ?> " class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['discount-err'])) : ?>
                            <p class="erros"><?= $_GET['discount-err']; ?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Hình sản phẩm</label>
                            <input type="file" name="thumbnail"  value="<?php echo $lis['thumbnail']; ?> "class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['thumbnail-err'])) : ?>
                            <p class="erros"><?= $_GET['thumbnail-err']; ?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Hình chi tiết</label>
                            <input type="file" name="thumbnail"  value="<?php echo $lis['thumbnail']; ?> "class="form-control" placeholder="" aria-describedby="helpId">
                            <?php if (isset($_GET['thumbnail-err'])) : ?>
                            <p class="erros"><?= $_GET['thumbnail-err']; ?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="description" value="<?php echo $lis['description']; ?> " class="form-control" placeholder="" aria-describedby="helpId"id="" cols="30" rows="10"></textarea>
                            <?php if (isset($_GET['description-err'])) : ?>
                            <p class="erros"><?= $_GET['description-err']; ?></p>
                            <?php endif ?>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="usr">Danh Mục Sản Phẩm:</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">-- Chọn --</option>
                                <?php
                                foreach ($cates as $category) {
                                    extract($category);
                                    echo "<option value = '.$id.'>$name</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'sanpham' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>