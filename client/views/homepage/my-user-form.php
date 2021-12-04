<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != null):?>
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="<?= $_SESSION['auth']['avatar'] ?>"><br>
                <span class="font-weight-bold"><?= $_SESSION['auth']['fullname'] ?></span><br>
                <span class="text-black-50"><?= $_SESSION['auth']['email'] ?></span>
                <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">THÔNG TIN TÀI KHOẢN</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Họ Và Tên</label>
                        <h4 style="margin-left:20px ;"><?= $_SESSION['auth']['fullname'] ?></h4>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Email</label>
                        <h4 style="margin-left:20px ;"><?= $_SESSION['auth']['email'] ?></h4>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Số điện thoại</label>
                        <h4 style="margin-left:20px ;"><?= $_SESSION['auth']['phone_number'] ?></h4>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Địa Chỉ</label>
                        <h4 style="margin-left:20px ;"><?= $_SESSION['auth']['address'] ?></h4>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="<?= BASE_URL . 'my-user/update?id='. $item['id'] ?>" class="btn btn-primary profile-button">Chỉnh Sửa</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                            <img class="imgft" src="<?= CLIENT_ASSET . 'img/banner/home-4/r.png'?>">
            </div>
            <img class="lgft" src="<?= CLIENT_ASSET . 'img/logo/logo.png'?>">
        </div>
    </div>
</div>
</div>
</div>
<?php endif ?>