<!-- ========================================== SECTION – HERO ========================================= -->

<div id="category" class="category-carousel hidden-xs">
  <div class="item">
    <div class="image"> <img src="assets\images\banners\cat-banner-1.jpg" alt="" class="img-responsive"> </div>
    <div class="container-fluid">
      <div class="caption vertical-top text-left">
        <div class="big-text"> Big Sale </div>
        <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
        <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
      </div>
      <!-- /.caption -->
    </div>
    <!-- /.container-fluid -->
  </div>
</div>


<div class="clearfix filters-container m-t-10">
  <div class="row">
    <div class="col col-sm-6 col-md-2">
      <div class="filter-tabs">
        <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
          <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a>
          </li>
          <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
        </ul>
      </div>
      <!-- /.filter-tabs -->
    </div>
    <!-- /.col -->
    <div class="col col-sm-12 col-md-6">
      <div class="col col-sm-3 col-md-6 no-padding">
        <div class="lbl-cnt"> <span class="lbl">Sort by</span>
          <div class="fld inline">
            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
              <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> ----- <span
                  class="caret"></span> </button>
              <ul role="menu" class="dropdown-menu">
                <?php foreach ($sorting as $sort): ?>
                  <li role="presentation">
                    <a href="<?php echo base_url($category['meta']) ?>/<?= $sort['meta'] ?>">
                      <?= $sort['name'] ?>
                    </a>
                  </li>
                <?php endforeach ?>

              </ul>
            </div>
          </div>
          <!-- /.fld -->
        </div>
        <!-- /.lbl-cnt -->
      </div>
      <!-- /.col -->
     
      <!-- /.col -->
    </div>
    <!-- /.col -->


    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<div class="search-result-container ">
  <div id="myTabContent" class="tab-content category-list">
    <div class="tab-pane active " id="grid-container">
      <div class="category-product">
        <div class="row">

          <?php foreach ($product_category as $product): ?>
            <div class="col-sm-6 col-md-4 wow fadeInUp">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image"> <a href="detail/<?= $product['id'] ?>"><img src="assets\images\products\<?= $product['image'] ?>"
                          alt=""></a> </div>
                    <!-- /.image -->

                    <div class="tag new"><span>new</span></div>
                  </div>
                  <!-- /.product-image -->

                  <div class="product-info text-left">
                    <h3 class="name"><a href="detail/<?= $product['id'] ?>">
                        <?= $product['name'] ?>
                      </a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    <div class="product-price"> <span class="price format_price">
                        <?= $product['price'] ?>
                      </span> <span class="price-before-discount">
                        <?= $product['sale'] ?>
                      </span> </div>
                    <!-- /.product-price -->

                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form action="addcart" method="POST">
                            <input type="hidden" value="<?php echo $product['id'] ?>" name="id" />
                            <button class="btn btn-primary icon" type="submit"> <i class="fa fa-shopping-cart"></i>
                            </button>
                          </form>
                          <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail/<?= $product['id'] ?>"
                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail/<?= $product['id'] ?>" title="Compare"> <i
                              class="fa fa-signal"></i> </a> </li>
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
        <!-- /.row -->
      </div>
      <!-- /.category-product -->

    </div>
    <!-- /.tab-pane -->

    <div class="tab-pane " id="list-container">
      <div class="category-product">
        <?php foreach ($product_category as $product): ?>
          <div class="category-product-inner wow fadeInUp">
            <div class="products">
              <div class="product-list product">
                <div class="row product-list-row">
                  <div class="col col-sm-4 col-lg-4">
                    <div class="product-image">
                      <div class="image"> <img src="assets\images\products\<?=$product['image'] ?>" alt=""> </div>
                    </div>
                  </div>
                  <div class="col col-sm-8 col-lg-8">
                    <div class="product-info">
                      <h3 class="name"><a href="detail/<?= $product['id'] ?>">
                          <?= $product['name'] ?>
                        </a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price format_price">
                          <?= $product['price'] ?>
                        </span> <span class="price-before-discount">$ 800</span> </div>
                      <!-- /.product-price -->
                      <div class="description m-t-10">
                        <?= $product['discription'] ?>
                      </div>
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
                              <form action="addcart" method="POST" class="add-cart-button btn-group">
                                <input type="hidden" value="<?php echo $product['id'] ?>" name="id" />

                                <button class="btn btn-primary icon" data-toggle="dropdown" type="submit"> <i
                                    class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="submit">Add to cart</button>
                              </form>
                            </li>
                            <li class="lnk wishlist"> <a class="add-to-cart" href="detail/<?= $product['id'] ?>"
                                title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                            <li class="lnk"> <a class="add-to-cart" href="detail/<?= $product['id'] ?>" title="Compare">
                                <i class="fa fa-signal"></i> </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tag new"><span>new</span></div>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>
      <!-- /.category-product -->
    </div>
    <!-- /.tab-pane #list-container -->
  </div>
  <!-- /.tab-content -->

  <?php if (isset($pager))
    echo $pager->links('default', 'custom_pagination'); ?>
  <!-- /.filters-container -->

</div>
<!-- /.search-result-container -->