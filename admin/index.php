<?php
include "../model/pdo.php";
include "header.php";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
                pdo_execute($sql);
                $thongbao = "Thêm Thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $sql = "SELECT * FROM danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "DELETE FROM danhmuc WHERE id =" .$_GET['id'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM danhmuc order by id desc";
            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "home.php";
include "footer.php";
