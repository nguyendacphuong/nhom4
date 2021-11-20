<div class="content">
        <div class="left">
            <h2>ĐĂNG NHẬP</h2>
            <span>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu<br> đãi tốt hơn!</span>
            <form>
                <div>
                    <label for="">Email*</label><br>
                    <input type="email" name="email">
                    <strong><?php echo isset($errot['email']) ? $errot['email'] : ' '; ?></strong>
                </div>
                <div>
                    <label for="">Mật khẩu*</label><br>
                    <input type="password" name="pass">
                    <strong> <?php echo isset($errot1['pass']) ? $errot1['pass'] : ''; ?></strong>
                   
                </div>
                <div class="forgotpass">
                    <a href="">Quên mật khẩu?</a>
                </div>
                <div>
                    <button class="login" name="dangnhap">ĐĂNG NHẬP</button><br>
                </div>
            </form>
            <a class="create" href="/duan1-n4/frontend/dangky.html?"><button class="createaccount">TẠO TÀI KHOẢN</button></a>
        </div>
        <div class="right">
            <img src="./imgbanner/bannerlogin.jpg" alt="">
        </div>
    </div>