<nav>
  <div class="banner">
    <img class="owl-lazy" src="../view/img/banner.webp" alt="" style="opacity: 1;">
  </div>
</nav>
<article>
  <div class="title-article">
    <h1>HAIL SATAN COLLECTION</h1>
  </div>
  <div class="col-article">
    <div class="content-article">
      <div class="sale">
        <span>-100%</span>
      </div>
      <div class="san-pham">
        <a href="hailsatan-combo.html"><img src="../view/img/combo-hailsatan.png" /></a>
        <div class="ten">
          <a href="hailsatan-combo.html">HAILSATAN COMBO (CAP + T-SHIRT)</a>
        </div>
        <div class="gia">
          <span>399,000₫</span> <del>3,000,000₫</del>
        </div>
      </div>
    </div>
    <div class="content-article">
      <div class="san-pham">
        <div class="sale">
          <span>-100%</span>
        </div>
        <a href=""><img src="../view/img/T-shirt-hailsatan.png" /></a>
        <div class="ten">
          <a href="">HAILSATAN COMBO (CAP + T-SHIRT)</a>
        </div>
        <div class="gia">
          <span>239,000₫</span> <del>1,000,000₫</del>
        </div>
      </div>
    </div>
    <div class="content-article">
      <div class="san-pham">
        <div class="sale">
          <span>-100%</span>
        </div>
        <a href=""><img src="../view/img/cap-satan.png" /></a>
        <div class="ten">
          <a href="">HAIL SATAN T-SHIRT</a>
        </div>
        <div class="gia">
          <span>239,000₫</span> <del>2,000,000₫</del>
        </div>
      </div>
    </div>
  </div>
</article>
<aside>
  <div class="title-all-sp">
    <h1>Tất cả sản phẩm</h1>
  </div>
  <div class="col">
    <?php
    $i = 0;
    foreach ($sanphamnew as $sp) {
      extract($sp);
      $linksp = "index.php?act=sanphamct&idsp=".$id;
      $hinh = $img_path.$img;
      if (($i==2) || ($i == 5) || ($i == 8)) {
        $content = "content";
        $sp_content = "sp-content";
        $ten = "ten";
        $gia = "gia";
      } else {
        $content ="";
        $sp_content = "";
        $ten = "";
        $gia = "";
      }
      
      echo '<div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="'.$hinh.'" />
            <div class="sp-content">
              <div class="ten">
                '.$name.'
              </div>
              <div class="gia">
                <span>'.$price.'₫</span> <del>797,000₫</del>
              </div>
              <button><a href="'.$linksp.'">Chi tiết</a></button>
            </div>
          </div>
        </div>';
    }
    ?>
    <!-- <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/lanyard-satan.gif" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 LANYARD
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button><a href="hailsatan-combo.html">Xem thêm</a></button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/satan-mask.gif" />
            <div class="sp-content">
              <div class="ten">
                SATAN MASK
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>

          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/satan-logo-t-shirt.gif" />
            <div class="sp-content">
              <div class="ten">
                SATAN LOGO T-SHIRT
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/santa-logo-combo.gif" />
            <div class="sp-content">
              <div class="ten">
                SATAN LOGO COMBO
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/keychain.png" />
            <div class="sp-content">
              <div class="ten">
                SATAN MONEY BOOSTER Keychain
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/money-boostet-t-shirt.png" />
            <div class="sp-content">
              <div class="ten">
                SATAN MONEY BOOSTER T-SHIRT
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/money-boostet-t-hoodie.png" />
            <div class="sp-content">
              <div class="ten">
                SATAN MONEY BOOSTER HOODIE
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/signature-hoodie.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 SIGNATURE HOODIE
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/basic-t-shirt.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 Basic T-shirt
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/signature-beanie.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 SIGNATURE BEANIE
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/combo-muadong.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 COMBO MÙA ĐÔNG
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>797,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/sock.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 SOCK
              </div>
              <div class="gia">
                <span>79,000₫</span> <del>10,000,000,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <img src="../view/img/sadtan-keychain.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 SADTAN KEYCHAIN
              </div>
              <div class="gia">
                <span>10,000₫</span>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/project666.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 PROJECT666 KEYCHAIN
              </div>
              <div class="gia">
                <span>15,000₫</span> <del>100,000,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="san-pham">
            <div class="sale">
            </div>
            <img src="../view/img/hailsatan-keychain.jpg" />
            <div class="sp-content">
              <div class="ten">
                TRIPLE6 HAILSATAN KEYCHAIN
              </div>
              <div class="gia">
                <span>15,000₫</span> <del>100,000,000₫</del>
              </div>
              <button>Xem thêm</button>
            </div>
          </div>
        </div> -->
  </div>
</aside>