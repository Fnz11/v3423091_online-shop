<?php

// Class Product mendefinisikan atribut dasar dari sebuah produk di toko online
class Product
{
    // Atribut yang dilindungi, hanya bisa diakses dari dalam class ini atau class turunannya
    protected $name;
    protected $price;
    protected $stock;

    // Constructor untuk menginisialisasi nilai awal atribut produk
    public function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    // Method untuk mendapatkan nama produk
    public function getName()
    {
        return $this->name;
    }

    // Method untuk mendapatkan harga produk
    public function getPrice()
    {
        return $this->price;
    }

    // Method untuk mendapatkan stok produk
    public function getStock()
    {
        return $this->stock;
    }

    // Method untuk mengurangi stok setelah ada pembelian
    public function reduceStock($quantity)
    {
        if ($this->stock >= $quantity) {
            // Mengurangi stok produk
            $this->stock -= $quantity;
        } else {
            // Jika stok tidak mencukupi, lemparkan exception
            throw new Exception("Not enough stock available");
        }
    }
}
