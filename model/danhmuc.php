<?php

function insert_dm($tenloai){
    $sql = "INSERT INTO danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_dm($id){
    $sql = "DELETE FROM danhmuc WHERE id =" .$id;
    pdo_execute($sql);
}
function loadall_dm(){
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_dm($id){
    $sql = "SELECT * FROM danhmuc WHERE id =" .$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_dm($id,$tenloai){
    $sql = "UPDATE danhmuc set name='".$tenloai."' where id = ".$id;
    pdo_execute($sql);
}
?>