<?php
include "php/connection.php";
$getAllProductsWithStocks = $connect->query("SELECT 
    p.id AS product_id,
    p.name AS product_name,
    p.image_url AS product_image,
    p.price as product_price,
    s.stock_values as current_stock
FROM products p
INNER JOIN stocks s ON p.id = s.product_id;");

$result = $getAllProductsWithStocks->fetch_all(MYSQLI_ASSOC);
?>
<div class="row text-center mb-4">
    <div class="col">
        <h1>Shopping Page</h1>
        <p>Browse our best and latest products!</p>
    </div>
</div>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
    <?php foreach ($result as $product) { ?>
        <div class="col">
            <div class="card h-100">
                <img src="<?= htmlspecialchars($product["product_image"]) ?>" class="card-img-top" alt="product image">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($product["product_name"]) ?></h5>
                    <p class="card-text">
                        Rp.<?= htmlspecialchars($product["product_price"]) ?>
                        <span class="badge text-bg-primary"><?= htmlspecialchars($product["current_stock"]) ?></span>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>