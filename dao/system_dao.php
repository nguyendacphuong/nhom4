<?php
function get_connect(){
    $connect = new PDO("mysql:host=localhost;dbname=nhom4_duan1;charset=utf8", "root", "");
    return $connect;
}


function executeQuery($sql, $getAll = false){

    $connect = get_connect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */



?>