
<?php foreach ($results as $product): ?>
    <a href="detail/<?= $product['id'] ?>">
        <div class="product-search">
            <img src="assets\images\products\<?= $product['image'] ?>" alt="">
            <div class="product-detail">
                <h4>
                    <?= $product['name'] ?>
                </h4>
                <p><span class="format_price_s">
                        <?= $product['price'] ?>
                </p>
            </div>
        </div>
    </a>
<?php endforeach; ?>