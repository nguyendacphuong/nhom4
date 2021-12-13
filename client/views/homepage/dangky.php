  <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= BASE_URL . 'dang-ky'?>" method="POST" >
                        <div class="form-fields">
                            <h2>Đăng ký</h2>
                            <p>
                                <label>Họ và tên <span class="required">*</span></label>
                                <input type="text" name="fullname" />
                            </p>
                            <p>
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" />
                            </p>
                            <p>
                                <label>password <span class="required">*</span></label>
                                <input type="password" name="password" />
                            </p>
                            <p>
                                <label>Repassword <span class="required">*</span></label>
                                <input type="password" name="repassword" />
                            </p>
                            <p>
                                <label>Số điện thoại <span class="required">*</span></label>
                                <input type="text" name="phone_number" />
                            </p>
                            <p>
                                <label>Địa chỉ <span class="required">*</span></label>
                                <input type="text" name="address" />
                            </p>
                        </div>
                        <div class="form-action">
                            <input type="submit" value="Đăng ký" name="btn_dangky" />
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="" src="<?= IMAGE_URL .'dk1.jpg'?>">
                </div>
            </div>
        </div>
    </div>
