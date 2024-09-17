<?php

// Mengimpor class Product sebagai class induk
require_once 'Product.php';

// Class turunan dari Product yang menambahkan atribut spesifik untuk produk pakaian
class ClothingProduct extends Product
{
    // Atribut tambahan untuk produk pakaian
    private $size; // Ukuran pakaian
    private $color; // Warna pakaian

    // Constructor untuk menginisialisasi produk pakaian beserta atribut turunannya
    public function __construct($name, $price, $stock, $size, $color)
    {
        // Memanggil constructor dari class induk
        parent::__construct($name, $price, $stock);
        $this->size = $size;
        $this->color = $color;
    }

    // Method untuk mendapatkan ukuran pakaian
    public function getSize()
    {
        return $this->size;
    }

    // Method untuk mendapatkan warna pakaian
    public function getColor()
    {
        return $this->color;
    }
}
