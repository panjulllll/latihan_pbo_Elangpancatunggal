<?php
require_once "Tiket.php";

class TiketIMAX extends Tiket {
    private $kacamata3d;
    private $efekGerakFitur;

    public function __construct($jumlah_kursi, $hargaDasarTiket, $kacamata3d, $efekGerakFitur) {
        parent::__construct($jumlah_kursi, $hargaDasarTiket);
        $this->kacamata3d = $kacamata3d;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // Polymorphism Overriding
    public function hitungTotalHarga() {
        return ($this->jumlah_kursi * $this->hargaDasarTiket) + 35000;
    }

    public function tampilkanInfo() {
        echo "=== Tiket IMAX === <br>";
        echo "Kacamata 3D: " . ($this->kacamata3d ? "Ya" : "Tidak") . "<br>";
        echo "Efek Gerak Fitur: " . ($this->efekGerakFitur ? "Ya" : "Tidak") . "<br>";
        echo "Total Harga: Rp " . $this->hitungTotalHarga() . "<br><br>";
    }
}
?>