<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./css/index.js"></script> 
    <title>Document</title>
</head>
<body>
        <div class="header-top">
            <img src="./images/imgheader/iconphone.png" alt="">
            <span>Hỗ Trợ Khách Hàng: 1900 8079</span>
        </div>
    <div class="line"></div>
        <!--HEADER START-->
        <header>
            <div class="header-main">
                <a href=""><img src="./images/imgbanner/logo.png" alt="" class="logo"></a>
                <ul class="menuheader">
                    <li><a href="">Áo</a></li>
                    <li><a href="">Quần</a></li>
                    <li><a href="">Phụ Kiện</a></li>
                    <li><a href="">Giá Tốt</a></li>
                </ul>
                <form class="search">
                    <input  name="" placeholder="Bạn tìm gì....">
                </form>
                <div class="iconoperation">
                    <a href=""><img src="./images/imgheader/iconperson.png" alt=""></a>
                    <a href=""><img src="./images/imgheader/iconcart.png" alt=""></a>
                </div>
            </div>
        </header>
    <main>
        <?php
            include_once $view;
        ?>
    </main>
    <div class="line"></div>
        <footer>
            <div class="footerlogo">
                <div>
                    <a href=""><img src="./images/imgbanner/logo.png" alt=""></a>
                </div>
                <div>
                    <span>Hotline: 106461054016</span><br>
                    <span>giờ mở cửa: sdfsdfsdf</span>
                </div>
                <div class="address">
                    <span>Địa chỉ: ádkfjksdkfjsldfk</span>
                </div>
            </div>
            <ul class="help">
                <h3 class="help-title">Giới thiệu về PHTT</h3>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Hệ thống cửa hàng</a></li>
                <li><a href="">Liên hệ với PHTT</a></li>
                <li><a href="">Chính sách bảo mật</a></li>
            </ul>
            <ul class="help">
                <h3 class="help-title">Hỗ trợ khách hàng</h3>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Chính sách vận chuyển</a></li>
                <li><a href="">Hướng dẫn chọn kích cỡ</a></li>
                <li><a href="">Hướng dẫn thanh toán</a></li>
                <li><a href="">Quy định đổi hàng</a></li>
                <li><a href="">Hướng dẫn mua hàng</a></li>
            </ul>
            <div class="connect">
                <h3>KẾT NỐI</h3>
                <div class="icon">
                    <a href=""><img src="./images/imgicon/facebool.png" alt=""></a>
                    <a href=""><img src="./images/imgicon/insta.png" alt=""></a>
                    <a href=""><img src="./images/imgicon/youtube.png" alt=""></a>
                </div>
                <h3>PHƯƠNG THỨC THANH TOÁN</h3>
                <div class="icon">
                    <a href=""><img src="./images/imgicon/icon jcb.jpg" alt=""></a>
                    <a href=""><img src="./images/imgicon/icon vnpay.png" alt=""></a>
                    <a href=""><img src="./images/imgicon/icon-visa.png" alt=""></a>
                    <a href=""><img src="./images/imgicon/icon mastercard.jpg" alt=""></a>
                </div>
            </div>
        </footer>
        <!--FOOTER END-->
</body>
</html>