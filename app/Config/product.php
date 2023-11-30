<!-- product.php -->

<div class="image-cell mx-auto" style="display: flex; flex-direction: column; align-items: center;">
    <img class='tokenImage mx-auto' src="<?= $product['picture'] ?>" alt="<?= $product['name'] ?>"
        style="width: 60%;" />

    <div class="overflow" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
        <h3 style="font-size: 20px;">Nama Produk: <?= $product['name'] ?></h3>
        <p class='description' style="font-size: 16px;"><?= $product['description'] ?></p>

        <div class="offers" style="justify-content: center; text-align: center;">
            <div class='normal'>
                <div class="price" style="font-size: 18px;">
                    <p>Rp<?= number_format($product['price'], 0, ',', '.') ?>,00</p>
                </div>
                <!-- ... (rest of your dynamic content) ... -->
            </div>
        </div>
    </div>
    <hr />

    <div class="nama-dan-button">
        <p class="p-l-20 text-left" style="font-size: 18px;"><?= $product['name'] ?></p>
        <!-- ... (rest of the button code) ... -->
    </div>

    <div class="container deskripsi">
        <!-- ... (rest of the tab content with dynamic data) ... -->
    </div>
</div>