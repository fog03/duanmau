<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "header.php";
include "../global.php";
$sanphamnew = loadall_sp_home();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            include "sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'])) {
                $id = $_GET['idsp'];
                $onesp =  loadone_sp($id);
                include "sanphamct.php";
            } else {
                include "home.php";                
            }
            
            
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
