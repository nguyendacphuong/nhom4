<div class="content">
        <div class="left">
            <h2>TẠO TÀI KHOẢN</h2>
            <span>Hãy đăng ký ngay để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</span>
            <form action="<?= BASE_URL . 'dang-ky'?>" method="POST">
                <div>
                    <label for="">Họ và Tên*</label><br>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="">Email*</label><br>
                    <input type="email" name="email" required>
                    <span><?php ?></span>
                </div>
                <div>
                    <label for="">Số Điện Thoại*</label><br>
                    <input type="text" name="tell" required>
                    <span><?php ?></span>
                </div>
                <div>
                    <label for="">Mật khẩu*</label><br>
                    <input type="password" name="pass" required>
                    <span><?php ?></span>
                </div>
                <div>
                    <label for="">Nhập lại mật khẩu*</label><br>
                    <input type="password" name="repass" required>
                </div>
                <div>
                    <button type ="submit" class="login" name="btn_dangky">TẠO TÀI KHOẢN</button><br>
                </div>
               <div style="margin: 25px 0px;">
                    <span>Bằng việc chọn tiếp tục, bạn đã đồng ý với Điều khoản & Điều kiện cùng Chính sách bảo mật<br> và chia sẻ thông tin của OWEN</span>
               </div>
            </form>
        </div>
        <div class="right">
            <img src="./images/imgbanner/bannerlogin.jpg" alt="">
        </div>
    </div>
