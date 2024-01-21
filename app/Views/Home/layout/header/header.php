<header class="header-style-1">

  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">

            <?php if (session()->get('user_login')): ?>
              <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown"
                  data-toggle="dropdown"><span class="value"><i class="icon fa fa-user"></i>
                    <?= session()->get('user_login')['username'] ?>
                  </span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-user" href="cart">Xem giỏ hàng</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="toggleForm()">Đăng xuất</a>
              </li>
            <?php else: ?>
              <?php foreach ($category_header_2 as $category_2): ?>
                <li><a href="<?= $category_2['meta'] ?>"><i class="icon fa fa-user"></i>
                    <?= $category_2['name'] ?>
                  </a></li>
              <?php endforeach ?>
            <?php endif; ?>
          </ul>

        </div>
        <!-- /.cnt-account -->

        <div class="cnt-block">

          <!-- /.list-unstyled -->
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="\"> <img src="assets\images\logo.png" alt="logo"> </a> </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form method="get" action="">
              <div class="control-group">

                <input name="keyword" id="keyword" type="text" class="search-field" placeholder="Search here...">

                <button id="searchButton" class="search-button" type="button" onclick="searchProducts()"></button>
              </div>
              <div class="search-menu">
                <div class="name">
                  <div class="name-head">TỪ KHÓA PHỔ BIẾN</div>
                </div>
                <div class="section-box">
                  <div class="content">
                    <div class="content-name">
                    ACER
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    Apple
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    HP
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    DELL
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    iPhone
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    Vivo
                    </div>
                  </div>
                  <div class="content">
                    <div class="content-name">
                    OPPO
                    </div>
                  </div>
                </div>

                <div class="products-search" id="searchResults">

                </div>
              </div>


            </form>



          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                <div class="total-price-basket"> <span class="lbl">Giỏ Hàng</span> <span class="total-price"></div>
              </div>
            </a>
            <ul class="dropdown-menu">
              <li>
                <div class="cart-item product-summary">
                  <a href="cart" class="btn btn-upper btn-primary btn-block m-t-20">Xem giỏ hàng</a>
                </div>
              </li>
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
        </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed"
            type="button">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav nomnom ">
                <?php foreach ($category_header_1 as $category_1): ?>
                  <li class="dropdown"><a href="<?= $category_1['meta'] ?>" class="dropdown-toggle">
                      <?= $category_1['name'] ?>
                    </a> </li>
                <?php endforeach ?>

              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>