<div class="row">
    <div class="row frm title">
        <H1>Danh sách loại hàng</H1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table border="1px">
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?php echo $id?></td>
                    <td><?php echo $name?></td>
                    <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
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
            <a href="admin.html"><input type="button" value="Nhập Thêm"></a>
        </div>
    </div>
</div>