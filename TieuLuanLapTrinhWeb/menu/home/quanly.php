<?php 
    require_once 'ketnoi.php';
    $sql = "SELECT `stt`, `hoten`, `ngaysinh`, `chucvu`, `trinhdo`, `taikhoan`, `matkhau` FROM `banchaphanh` WHERE `stt`=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Success";
    } else {
        echo "Failed";
    }
?>