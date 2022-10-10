<?php
include "../model/pdo.php";
include "header.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
if (isset($_GET["act"])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_dm($tenloai);
                $thongbao = "Thêm Thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_dm();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_dm($_GET['id']);
            }
            $listdanhmuc = loadall_dm();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_dm($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_dm($id, $tenloai);
                $thongbao = "Cập nhật Thành công";
            }
            $listdanhmuc = loadall_dm();
            include "danhmuc/list.php";
            break;
            /* sản phẩm*/

        case 'addsp':
            //kiểm tra xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES["hinh"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    
                }else{

                }
                insert_sp($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_dm();
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST["search"]) && ($_POST["search"])) {
                $kyw = $_POST["kyw"];
                $iddm = $_POST["iddm"];
            }else{
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = loadall_dm();
            $listsanpham = loadall_sp($kyw,$iddm);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sp($_GET['id']);
            }
            $listsanpham = loadall_sp("",0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sp($_GET['id']);
            }
            $listdanhmuc = loadall_dm();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES["hinh"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    
                }else{

                }
                update_sp($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao = "Cập nhật Thành công";
            }
            $listdanhmuc = loadall_dm();
            $listsanpham = loadall_sp("",0);
            include "sanpham/list.php";
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
