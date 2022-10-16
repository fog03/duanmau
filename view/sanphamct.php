
<body>
  <div class="fulid">
  </div>
  <?php
  extract($onesp);
  $img = $img_path . $img;
  echo '
  <nav class="nav">
  <div class="img-item">
    <img src="'.$img.'" alt="">
  </div>
  <div class="content-item">
    <div class="ten">
      <h1>
        '.$name.'
      </h1>
    </div>
    <div class="grp-stt">
      <p>Tình trạng: <span>Còn hàng</span></p>
    </div>
    <div class="gia">
      <span>'.$price.'</span> <del>1,000,000₫</del>
    </div>
    <div class="select-swap">
      <div class="coler">
        <input type="radio" name="gender" value="male" checked> Đen<br>
        <input type="radio" name="gender" value="female"> Trắng<br>
      </div>
    </div>
    <div class="mota">
      <h2>Mô tả</h2>
      <h3><strong>Rẻ hơn</strong> mua lẻ khi chọn <strong>HAILSATAN COMBO</strong><br><br>Bộ giao diện dùng nhận mặt member Satan cực bảnh,&nbsp;bao trọn mùa hè không thể bỏ qua! Mua nhanh hết ráng chịu.</h3>
      <p>
        <strong>HAIL SATAN COMBO là sản phẩm có sẵn, nhận hàng sau vài ngày order</strong>
      </p>
      <p>- Bộ sản phẩm bao gồm 1 <strong>áo HAILSATAN</strong> và 1<strong> mũ/nón SATAN</strong><br>- Kiểu dáng: Oversize<br>- Xuất xứ: Việt Nam<br>- Sản phẩm được sản xuất và thiết kế độc quyền từ TRIPLE6</p>
      <p><img alt="Credit Card Icon, Transparent Credit Card.PNG Images &amp; Vector - FreeIconsPNG" style="width: 39px; height: 40px;" src="https://www.freeiconspng.com/thumbs/credit-card-icon-png/credit-card-2-icon-7.png">&nbsp;<span style="font-size:15px"><strong> Ưu tiên giao hàng</strong> với&nbsp;đơn <strong>chuyển khoản</strong>.</span></p>
      <p><span style="font-size:15px"><img alt="Free Shipping Icon Png #351494 - Free Icons Library" style="width: 45px; height: 32px;" src="https://icon-library.com/images/free-shipping-icon-png/free-shipping-icon-png-2.jpg">&nbsp; <strong>FREESHIP</strong> cho đơn&nbsp;có tổng giá trị trên&nbsp;500k👌</span></p>
      <hr>
      <p><strong>HƯỚNG DẪN CHỌN SIZE</strong></p>
      <p><img src="img/side.webp" alt=""></p>
    </div>
  </div>
</nav>
      ';
  ?>
  </div>
</body>

</html>