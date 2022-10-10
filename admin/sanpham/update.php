<?php


if (is_array($sanpham)) {
    extract($sanpham);
}

?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT MỚI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        if($iddm == $id) $s="selected"; else $s="";
                        echo '<option value="' .$id. '"' .$s.'>'.$name.'</option>';
                    }
                    ?>
                </select>
               
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?php echo $name ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?php echo $price ?>">
            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh">
                <td><img width="120px" src="../upload/<?php echo $img ?>" alt=""></td>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?php echo $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php $id ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>