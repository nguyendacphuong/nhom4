<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Thêm Tài Khoản Mới</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'taikhoan/luu-tao-moi'?>" method="post">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                          <label for="">Họ và tên</label>
                          <input type="text" name="fullname" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Số điện thoại</label>
                          <input type="text" name="phone_number" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Address</label>
                          <input type="text" name="address" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= ADMIN_URL . 'taikhoan'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
