

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Cập nhật danh mục</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'danh-muc/update' ?>" method="post">
                    <div class="col-6 offset-3">
                    <input type="text" name="id" id="" value="<?php echo $cates['id']; ?>" hidden>
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" name="name" value="<?php echo $cates['name']; ?>" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                    
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" id="show_menu" name="show_menu" value="1" type="checkbox" >
                                <label class="form-check-label" for="show_menu">Hiển thị menu</label>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'danh-muc' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>