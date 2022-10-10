<?php

function insert_sp($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham( name, price, img, mota, iddanhmuc) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "DELETE FROM sanpham WHERE id =" . $id;
    pdo_execute($sql);
}
function loadall_sp($kyw, $iddm)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddanhmuc = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sp($id)
{
    $sql = "SELECT * FROM sanpham WHERE id =" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_sp($id, $iddm, $tensp, $giasp, $hinh,$mota)
{
    if ($hinh != "")
        $sql = "update sanpham set iddm ='$iddm',name ='$tensp',price ='$giasp',img ='$hinh',mota ='$mota' where id=" . $id;
    else
        $sql = "update sanpham set iddm ='$iddm',name ='$tensp',price ='$giasp',mota ='$mota' where id=" . $id;

    pdo_execute($sql);
}
