<?php

// Mengimpor file yang diperlukan
require_once 'ElectronicProduct.php';
require_once 'ClothingProduct.php';
require_once 'Cart.php';

// Membuat beberapa produk
$phone = new ElectronicProduct("Smartphone", 5000000, 10, "Samsung", 2); // Produk elektronik
$tshirt = new ClothingProduct("T-Shirt", 100000, 20, "L", "Red"); // Produk pakaian

// Membuat keranjang belanja
$cart = new Cart();

try {
    // Menambahkan produk ke dalam keranjang
    $cart->addItem($phone, 2);
    $cart->addItem($tshirt, 3);

    // Menampilkan total harga
    echo "Total Price: " . $cart->getTotalPrice() . "\n";

    // Menampilkan setiap item di keranjang beserta jumlahnya
    $items = $cart->getItems();
    foreach ($items as $item) {
        echo "Item: " . $item['product']->getName() . ", Quantity: " . $item['quantity'] . "\n";
    }
} catch (Exception $e) {
    // Menampilkan pesan error jika ada kesalahan, misalnya stok tidak mencukupi
    echo $e->getMessage();
}
