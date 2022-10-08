<div class="row">
    <div class="row frm title mb">
        <H1>Danh sách loại hàng</H1>
    </div>
    <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    ?>
                        <option value="<?php echo $id ?>">
                            <?php echo $name ?>
                        </option>
                    <?php } ?>
                </select>
                <input type="submit" name="search" value="Tìm">
            </form>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1px">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $id ?></td>
                        <td><?php echo $name ?></td>
                        <td><img width="120px" src="../upload/<?php echo $img?>" alt=""></td>
                        <td><?php echo $price ?></td>
                        <td><?php echo $luotxem ?></td>
                        <td><a href="index.php?act=suasp&id=<?php echo $id?>"><input type="button" value="Sửa"></a>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                             href="index.php?act=xoasp&id=<?php echo $id?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập Thêm"></a>
        </div>
    </div>
</div>