<?php

    function home(){
        client_render('homepage/homepage.php');
    }
    function dangnhap(){
        if(isset($_POST) && isset($_POST['dangnhap'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $err = [];
            if ($email && $password != '') {
                $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
                $connect = get_connect();
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $user = $stmt -> fetch();
                if($user != false){
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['auth'] = $user;
                    header("Location: ".BASE_URL);
                }
            }
            
        }
        client_render('homepage/dangnhap.php');
    }
    function logout(){
    unset($_SESSION['auth']);
    header('location: ' . BASE_URL . 'dangnhap');
}
    function lienhe(){
        client_render('homepage/lienhe.php');
    }
    
    function checkout(){
        if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
            header('location: '. BASE_URL);
            die;
        }
        $cart = $_SESSION['cart'];
        client_render('cart/cart.php', compact('cart'));
    }
    function checkout1(){
        if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
            header('location: '. BASE_URL);
            die;
        }
        $cart = $_SESSION['cart'];
        client_render('cart/check-out.php', compact('cart'));
    }
    
    function paycart()
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        // insert dữ liệu để tạo hóa đơn mới, sau đó lấy id của hóa đơn
        $createorderQuery = "insert into orders 
                                    (customer_name, customer_phone_number, customer_email, 
                                        customer_address, note)
                                values
                                    ('$name', '$phone', '$email', '$address', '$note')";
        $orderId = insertDataAndGetId($createorderQuery);
        $totalPrice = 0;
        // chạy vòng lặp qua các phần tử của giỏ hàng, sau đó insert dữ liệu vào bảng order_detail
        foreach ($_SESSION['cart'] as $item) {
            $productId = $item['id'];
            $price = $item['price'];
            $quantity = $item['quantity'];
            // $created_at = $updated_at = date('Y-m-d H:s:i');
            $totalPrice += $price*$quantity;
            $insertorderDetailQuery = "insert into order_detail 
                                            (order_id, product_id, quantity, unit_price)
                                        values 
                                            ($orderId, $productId, $quantity, $price)";
            executeQuery($insertorderDetailQuery, false);
        }
        // Cập nhật tổng số tiền vào hóa đơn
        $updateTotalPriceToorder = "update orders
                                        set total_price = $totalPrice
                                    where id = $orderId";
        executeQuery($updateTotalPriceToorder, false);
    
        unset($_SESSION['cart']);
    
        header('location: ' . BASE_URL);
        die;
        
    }
