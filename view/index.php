<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "header.php";
include "../global.php";
$sanphamnew = loadall_sp_home();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($acr) {
        case 'sanpham':
            include "sanpham.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
