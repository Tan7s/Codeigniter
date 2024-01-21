<section class="section featured-product wow fadeInUp">
  <h3 class="section-title">
    <?= $group_spmoi['name'] ?>
  </h3>
  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

    <?php foreach($product_group as $row): ?>
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image"> <a href="detail/<?= $row['id'] ?>"><img
                    src="assets\images\products\<?php echo $row["image"] ?>" alt=""></a>
              </div>
              <!-- /.image -->

              <div class="tag hot"><span>hot</span></div>
            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
              <h3 class="name"><a href="detail/<?= $row['id'] ?>">
                  <?php echo $row["name"] ?>
                </a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price"> <span class="price format_price ">
                  <?php echo $row['price'] ?>
                </span> </div>
              <!-- /.product-price -->

            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <form action="addcart" method="POST">
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id" />
                    <input name="themgiohang" type="submit" class="btn btn-primary" value="Thêm Giỏ Hàng">
                  </form>
                </ul>
              </div>
              <!-- /.action -->
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->

        </div>
        <!-- /.products -->
      </div>
    <?php endforeach ?>
    <!-- /.item -->
  </div>
  <!-- /.home-owl-carousel -->
</section>
<!-- /.scroll-tabs -->
<!-- ============================================== SCROLL TABS : END ============================================== -->
<!-- ============================================== WIDE PRODUCTS ============================================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
  <div class="row">
    <div class="col-md-7 col-sm-7">
      <div class="wide-banner cnt-strip">
        <div class="image"> <img class="img-responsive" src="assets\images\banners\home-banner1.jpg" alt=""> </div>
      </div>
      <!-- /.wide-banner -->
    </div>
    <!-- /.col -->
    <div class="col-md-5 col-sm-5">
      <div class="wide-banner cnt-strip">
        <div class="image"> <img class="img-responsive" src="assets\images\banners\home-banner2.jpg" alt=""> </div>
      </div>
      <!-- /.wide-banner -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.wide-banners -->

<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
  <h3 class="section-title">
    <?= $group_spnoibat['name'] ?>
  </h3>
  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
    <?php foreach($product_view as $row): ?>
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image"> <a href="detail/<?= $row['id'] ?>"><img
                    src="assets\images\products\<?php echo $row["image"] ?>" alt=""></a>
              </div>
              <!-- /.image -->

              <div class="tag hot"><span>hot</span></div>
            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
              <h3 class="name"><a href="detail/<?= $row['id'] ?>">
                  <?php echo $row["name"] ?>
                </a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price"> <span class="price format_price ">
                  <?php echo $row['price'] ?>
                </span>
                
              </div>
              <!-- /.product-price -->

            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <form action="addcart" method="POST">
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id" />
                    <input name="themgiohang" type="submit" class="btn btn-primary" value="Thêm Giỏ Hàng">
                  </form>
                </ul>
              </div>
              <!-- /.action -->
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->

        </div>
        <!-- /.products -->
      </div>
    <?php endforeach ?>
    <!-- /.item -->
  </div>
  <!-- /.home-owl-carousel -->
</section>
<!-- /.section -->
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
<!-- ============================================== WIDE PRODUCTS ============================================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
  <div class="row">
    <div class="col-md-12">
      <div class="wide-banner cnt-strip">
        <div class="image"> <img class="img-responsive" src="assets\images\banners\home-banner.jpg" alt=""> </div>
        <div class="strip strip-text">
          <div class="strip-inner">
            <h2 class="text-right">New Mens Fashion<br>
              <span class="shopping-needs">Save up to 40% off</span>
            </h2>
          </div>
        </div>
        <div class="new-label">
          <div class="text">NEW</div>
        </div>
        <!-- /.new-label -->
      </div>
      <!-- /.wide-banner -->
    </div>
    <!-- /.col -->

  </div>
  <!-- /.row -->
</div>
<!-- /.wide-banners -->
<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section wow fadeInUp new-arriavls">
  <h3 class="section-title">
    <?= $group_spbanchay['name'] ?>
  </h3>
  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
    <?php foreach($product_order as $row): ?>
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image"> <a href="detail/<?= $row['id'] ?>"><img
                    src="assets\images\products\<?php echo $row["image"] ?>" alt=""></a>
              </div>
              <!-- /.image -->
              <div class="tag new"><span>new</span></div>
            </div>
            <!-- /.product-image -->

            <div class="product-info text-left">
              <h3 class="name"><a href="detail/<?= $row['id'] ?>">
                  <?php echo $row["name"] ?>
                </a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              <div class="product-price"> <span class="price format_price">
                  <?php echo $row['price'] ?>
                </span></div>
              <!-- /.product-price -->

            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <form action="addcart" method="POST">
                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id" />
                    <input name="themgiohang" type="submit" class="btn btn-primary" value="Thêm Giỏ Hàng">
                  </form>

                </ul>
              </div>
              <!-- /.action -->
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->

        </div>
        <!-- /.products -->
      </div>
    <?php endforeach ?>
    <!-- /.item -->
  </div>
  <!-- /.home-owl-carousel -->
</section>
<!-- /.section -->
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->