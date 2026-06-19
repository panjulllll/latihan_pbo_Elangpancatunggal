<?php
require_once "Tiket.php";

class TiketVelvet extends Tiket {
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($jumlah_kursi, $hargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($jumlah_kursi, $hargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    // Polymorphism Overriding
    public function hitungTotalHarga() {
        return ($this->jumlah_kursi * $this->hargaDasarTiket) * 1.50;
    }

    public function tampilkanInfo() {
        echo "=== Tiket Velvet === <br>";
        echo "Bantal Selimut Pack: " . ($this->bantalSelimutPack ? "Ya" : "Tidak") . "<br>";
        echo "Layanan Butler: " . ($this->layananButler ? "Ya" : "Tidak") . "<br>";
        echo "Total Harga: Rp " . $this->hitungTotalHarga() . "<br><br>";
    }
}
?>