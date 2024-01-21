<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\main.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class=" gradient-custom form_oder_detail">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center ">
                <div class="col-lg-5 col-xl-10">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header px-4 py-5">
                            <h5 class="text-muted mb-0">CẢM ƠN BẠN ĐÃ ĐẶT HÀNG, <span style="color: #a8729a;">
                                    <?= session()->get('user_login')['username'] ?>
                                </span>!</h5>
                        </div>
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0" style="color: #a8729a;">Biên lai thanh toán</p>
                                <p class="small text-muted mb-0">Mã số phiếu : 123456</p>
                            </div>
                            <?php foreach ($oder_details as $bill): ?>
                                <div class="card shadow-0 border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="assets\images\products\<?= $bill->image ?>" class="img-fluid" alt="Phone">
                                            </div>
                                            <div
                                                class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0">
                                                    <?= $bill->name ?>
                                                </p>
                                            </div>
                                            <div
                                                class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">Số lượng:
                                                    <?= $bill->quantity ?>
                                                </p>
                                            </div>
                                            <div
                                                class="col-md-3 text-center d-flex justify-content-center align-items-center">
                                                <p class="text-muted mb-0 small">Giá:</p>
                                                <p class="text-muted mb-0 small format_price">
                                                    <?= $bill->price ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="hr_oder_detail" style="">

                                    </div>
                                </div>
                            <?php endforeach ?>
                            <div class="d-flex justify-content-between pt-2">
                                <p class="fw-bold mb-0">Chi tiết đơn hàng</p>
                                <p class="text-muted mb-0 "><span class="fw-bold me-4">Total</span><span
                                        class="format_price">
                                        <?= $oder['total'] ?>
                                    </span>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between pt-2">
                                <p class="mb-0"><span class="fw-bold">Tên người đặt hàng:</span>
                                    <span>
                                        <?= $oder['name'] ?>
                                    </span>
                                </p>

                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="fw-bold">Số điện thoại:</span>
                                    <span>
                                        <?= $oder['phone'] ?>
                                    </span>
                                </p>
                                <p class="text-muted mb-0"><span class="fw-bold me-4">Note: </span>
                                    <?= $oder['note'] ?>
                                </p>
                            </div>

                            <div class="d-flex justify-content-between">
                                <p class="mb-0"><span class="fw-bold">Địa chỉ:</span>
                                    <span>
                                        <?= $oder['address'] ?>
                                    </span>
                                </p>
                            </div>

                        </div>
                        <!-- border-0 px-4 py-5 -->
                        <div class="card-footer "
                            style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                                    <span class="h2 mb-0 ms-2">SỐ TIỀN PHẢI THANH TOÁN:</span><span class="h2 mb-0 ms-2 format_price"><?= $oder['total'] ?></span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="assets/js/custom.js"></script>

</html>