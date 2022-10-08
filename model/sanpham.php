<?php

function insert_sp($tensp,$giasp,$hinh,$mota,$iddm){
    $sql = "INSERT INTO sanpham( name, price, img, mota, iddanhmuc) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sp($id){
    $sql = "DELETE FROM sanpham WHERE id =" .$id;
    pdo_execute($sql);
}
function loadall_sp(){
    $sql = "SELECT * FROM sanpham order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sp($id){
    $sql = "SELECT * FROM sanpham WHERE id =" .$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_sp($id,$tenloai){
    $sql = "UPDATE sanpham set name='".$tenloai."' where id = ".$id;
    pdo_execute($sql);
}
?>