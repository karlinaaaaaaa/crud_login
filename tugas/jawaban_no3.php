<?php 
   class kereta {
    public $harga= "30000";
    public $nama_penumpang = "karlina";
    public $tiket = "vip";

    public function tampilkan_kereta()
    {
        echo "harga: $this->harga, nama_penumpang:  $this->nama_penumpang, tiket : $this->tiket";
    }
    public function __construct()
    {
        echo "Selamat Menikmati Perjalanan";
    }
    public function __destruct()
    {
        echo"Selamat Menikmati Perjalanan";
    }
    }
   $kereta = new kereta;
   echo"<br/>";
   $kereta->tampilkan_kereta();
   echo"<br/>";