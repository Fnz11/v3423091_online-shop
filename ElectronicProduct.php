<?php

// Mengimpor class Product sebagai class induk
require_once 'Product.php';

// Class turunan dari Product yang menambahkan atribut spesifik untuk produk elektronik
class ElectronicProduct extends Product
{
    // Atribut tambahan untuk produk elektronik
    private $brand; // Merek produk
    private $warranty; // Garansi produk dalam tahun

    // Constructor untuk menginisialisasi produk elektronik beserta atribut turunannya
    public function __construct($name, $price, $stock, $brand, $warranty)
    {
        // Memanggil constructor dari class induk
        parent::__construct($name, $price, $stock);
        $this->brand = $brand;
        $this->warranty = $warranty;
    }

    // Method untuk mendapatkan merek produk
    public function getBrand()
    {
        return $this->brand;
    }

    // Method untuk mendapatkan garansi produk
    public function getWarranty()
    {
        return $this->warranty;
    }
}
