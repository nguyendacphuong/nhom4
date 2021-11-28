<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa Thông Tin Tài Khoản</h3>
            </div>
            <div class="card-body">
                <form action="<?= CLIENT_URL . 'my-user/update'?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <input type="hidden" name="id"  value="<?php echo $cates['id']; ?>">
                        <div class="form-group">
                          <label for="">Họ và tên</label>
                          <input type="text" name="fullname" <?php echo $cates['fullname']; ?> required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" <?php echo $cates['email']; ?> required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">password</label>
                          <input type="password" name="password" <?php echo $cates['password']; ?> required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Số điện thoại</label>
                          <input type="text" name="phone_number" <?php echo $cates['phone_number']; ?> required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">Address</label>
                          <input type="text" name="address" <?php echo $cates['address']; ?> required class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <input type="file" name="avatar" <?php echo $cates['avatar']; ?> class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <a href="<?= CLIENT_URL . 'my-user'?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Đăng ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>