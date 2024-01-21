<body class="cnt-home">

	<div class="body-content outer-top-xs">
		<div class='container'>
			<div class='row single-product'>
				<div class='col-md-9'>
					<div class="detail-block">
						<div class="row  wow fadeInUp">

							<form action="addcart" method="POST" class="add-cart-button btn-group">
								<input type="hidden" value="<?php echo $details['id'] ?>" name="id" />
								<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
									<div class="product-item-holder size-big single-product-gallery small-gallery">
										<div id="owl-single-product">
											<div class="single-product-gallery-item" id="slide1">
												<img class="img-responsive" alt="" src="assets\images\blank.gif"
													data-echo="assets/images/products/<?= $details['image'] ?>">
											</div>
										</div>
									</div>
								</div>
								<div class='col-sm-6 col-md-7 product-info-block'>
									<div class="product-info">
										<h1 class="ten_san_pham">
											<?= $details['name'] ?>
										</h1>
										<div class="price-container info-container m-t-20">
											<div class="row">
												<div class="col-sm-6">
													<div class="price-box">
														<span class="price format_price">
															<?= $details['price'] ?>
														</span>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="favorite-button m-t-10">
														<a class="btn btn-primary" data-toggle="tooltip"
															data-placement="right" title="Wishlist" href="#">
															<i class="fa fa-heart"></i>
														</a>
														<a class="btn btn-primary" data-toggle="tooltip"
															data-placement="right" title="Add to Compare" href="#">
															<i class="fa fa-signal"></i>
														</a>
														<a class="btn btn-primary" data-toggle="tooltip"
															data-placement="right" title="E-mail" href="#">
															<i class="fa fa-envelope"></i>
														</a>
													</div>
												</div>

											</div><!-- /.row -->
										</div><!-- /.price-container -->
										<div class="quantity-container info-container">
											<div class="row">
												<div class="col-sm-7">

													<input name="themgiohang" type="submit" class="btn btn-primary"
														value="Thêm vào giỏ hàng">
												</div>
											</div><!-- /.row -->
										</div><!-- /.quantity-container -->
									</div><!-- /.product-info -->
								</div><!-- /.col-sm-7 -->
							</form>
						</div><!-- /.row -->
					</div>
					<div class="product-tabs inner-bottom-xs  wow fadeInUp">
						<div class="row">
							<div class="col-sm-3">
								<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
									<li class="active"><a data-toggle="tab" href="#description">THÔNG TIN </a></li>
									<!-- <li><a data-toggle="tab" href="#review">REVIEW</a></li> -->
									<!-- <li><a data-toggle="tab" href="#tags">TAGS</a></li> -->
								</ul><!-- /.nav-tabs #product-tabs -->
							</div>
							<div class="col-sm-9">

								<div class="tab-content">

									<div id="description" class="tab-pane in active">
										<div class="product-tab">

											<p class="text">
												<?php echo nl2br($details['discription']) ?>
											</p>

										</div>
									</div><!-- /.tab-pane -->
								</div><!-- /.product-tab -->
							</div><!-- /.tab-pane -->
						</div><!-- /.row -->
					</div><!-- /.product-tabs -->
				</div>
				<!-- ============================================== UPSELL PRODUCTS ============================================== -->

				<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

			</div><!-- /.col -->

		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
	</div><!-- /.body-content -->


	<!-- For demo purposes – can be removed on production -->


	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="assets\js\jquery-1.11.1.min.js"></script>

	<script src="assets\js\bootstrap.min.js"></script>

	<script src="assets\js\bootstrap-hover-dropdown.min.js"></script>
	<script src="assets\js\owl.carousel.min.js"></script>

	<script src="assets\js\echo.min.js"></script>
	<script src="assets\js\jquery.easing-1.3.min.js"></script>
	<script src="assets\js\bootstrap-slider.min.js"></script>
	<script src="assets\js\jquery.rateit.min.js"></script>
	<script type="text/javascript" src="assets\js\lightbox.min.js"></script>
	<script src="assets\js\bootstrap-select.min.js"></script>
	<script src="assets\js\wow.min.js"></script>
	<script src="assets\js\scripts.js"></script>





</body>

</html>