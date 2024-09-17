<?php

// Class Cart (keranjang belanja) untuk mengelola item-item yang akan dibeli
class Cart
{
    // Atribut untuk menyimpan produk yang ditambahkan ke dalam keranjang
    private $items = [];

    // Method untuk menambahkan produk ke keranjang
    public function addItem(Product $product, $quantity)
    {
        // Cek apakah stok produk cukup untuk ditambahkan ke keranjang
        if ($product->getStock() < $quantity) {
            // Jika stok tidak cukup, lemparkan exception
            throw new Exception("Insufficient stock for " . $product->getName());
        }

        // Kurangi stok produk sesuai dengan jumlah yang dimasukkan ke keranjang
        $product->reduceStock($quantity);

        // Simpan produk beserta jumlahnya ke dalam array items
        $this->items[] = ['product' => $product, 'quantity' => $quantity];
    }

    // Method untuk menghitung total harga dari seluruh item di keranjang
    public function getTotalPrice()
    {
        $total = 0;
        // Loop melalui setiap item dalam keranjang dan hitung total harga
        foreach ($this->items as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }
        return $total;
    }

    // Method untuk mendapatkan semua item di dalam keranjang
    public function getItems()
    {
        return $this->items;
    }
}
