<?php
	$products = [
		['name' => 'Product 1', 'image' => 'assets/img/produk/handmade.jpg', 'price' => 500000, 'discount' => 50, 'daysLeft' => 11, 'description' => 'Lorem ipsum description for Product 1', 'discountedPrice' => 250000],
		['name' => 'Product 2', 'image' => 'assets/img/produk/suvenir.jpg', 'price' => 600000, 'discount' => 40, 'daysLeft' => 10, 'description' => 'Lorem ipsum description for Product 2', 'discountedPrice' => 300000],
		// Add more products as needed
	];
?>
<?= $this->include('headerHome'); ?>
<!-- partial:index.partial.html -->
<?= $this->include('sectionHomeAtas'); ?>
<?php foreach ($products as $product): ?>
<div class="image-cell mx-auto" style="display: flex; flex-direction: column; align-items: center;">
    <!-- Your existing image tag with adjusted width and height attributes -->
    <img class='tokenImage mx-auto' src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>" style="width: 60%;" />

    <!-- Name and Description -->
    <div class="overflow" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
        <h3 style="font-size: 20px;">Nama Produk: <?= $product['name'] ?></h3>
        <p class='description' style="font-size: 16px;"><?= $product['description'] ?></p>
        <!-- Rest of your dynamic content -->
        <div class="offers" style="justify-content: center; text-align: center;">
            <div class='normal'>
                <div class="price" style="font-size: 18px;">
                    <p>Rp<?= number_format($product['price'], 0, ',', '.') ?>,00</p>
                </div>
                <div class="pricecut" style="font-size: 16px;">
                    <p>- <?= $product['discount'] ?>%</p>
                </div>
            </div>
            <div class='discount'>
                <div class="price" style="font-size: 18px;">
                    <p>Rp<?= number_format($product['discountedPrice'], 0, ',', '.') ?>,00</p>
                </div>
                <div class="duration" style="font-size: 16px;">
                    <p>◷<?= $product['daysLeft'] ?> days left</p>
                </div>
            </div>
        </div>
    </div>
    <hr />

    <!-- Additional dynamic data for other products -->
    <div class="nama-dan-button">
        <p class="p-l-20 text-left" style="font-size: 18px;"><?= $product['name'] ?></p>
        <!-- Rest of the button code -->
    </div>

    <!-- Deskripsi Produk -->
    <div class="container deskripsi">
        <!-- ... (rest of the tab content with dynamic data) ... -->
    </div>
    <!-- End of Deskripsi Produk -->
</div>
<?php endforeach; ?>
<!-- content -->
<?= $this->include('sectionHomeBawah') ?>
<?= $this->include('footerHome') ?>