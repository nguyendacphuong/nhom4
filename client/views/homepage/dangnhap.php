<div class="content">
        <div class="left">
            <h2>ĐĂNG NHẬP</h2>
            <span>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu<br> đãi tốt hơn!</span>
            <form method="POST" action="<?php BASE_URL . 'dangnhap' ?>">
                <div>
                    <label for="">Email*</label><br>
                    <input type="email" name="email">
                    <span><?php echo (isset($err['email']) ? $err['email'] : '') ?></span>
                </div>
                <div>
                    <label for="">Mật khẩu*</label><br>
                    <input type="password" name="pass">
                    <span><?php echo (isset($err['pass']) ? $err['pass'] : '') ?></span>
                </div>
                <div class="forgotpass">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div>
                    <button class="login" name="dangnhap">ĐĂNG NHẬP</button><br>
                </div>
            </form>
            <a class="create" href=""><button class="createaccount">TẠO TÀI KHOẢN</button></a>
        </div>
        <div class="right">
            <img src="./images/imgbanner/bannerlogin.jpg" alt="">
        </div>
    </div>