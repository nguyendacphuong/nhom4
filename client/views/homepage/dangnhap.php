
    <div class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= BASE_URL . 'dangnhap'?>" method="POST">
                        <div class="form-fields">
                            <h2>Login</h2>
                            <p>
                                <label>Email <span class="required">*</span></label>
                                <input type="email" name="email" />
                            </p>
                            <p>
                                <label>Password <span class="required">*</span></label>
                                <input type="password" name="password" />
                            </p>
                        </div>
                        <div class="form-action">
                            <p class="lost_password"><a href="#">Lost your password?</a></p>
                            <input type="submit" value="Login" name="dangnhap" />
                            <label><input type="checkbox" />  Remember me </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="cl" src="./public/uploads/login-bn.png">
                </div>
            </div>
        </div>
    </div>