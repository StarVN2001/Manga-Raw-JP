<?php
    $mysqli = new mysqli("localhost","root","","datamangaraw");
    if ($mysqli->connect_errno) {
        echo "Lỗi kết nối tới dữ liệu" . $mysqli->connect_error;
        exit();
    }
?>