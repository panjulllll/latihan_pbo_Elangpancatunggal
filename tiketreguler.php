<?php
require_once "Tiket.php";

class TiketReguler extends Tiket {
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($jumlah_kursi, $hargaDasarTiket, $tipeAudio, $lokasiBaris) {
        parent::__construct($jumlah_kursi, $hargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Polymorphism Overriding
    public function hitungTotalHarga() {
        return $this->jumlah_kursi * $this->hargaDasarTiket;
    }

    public function tampilkanInfo() {
        echo "=== Tiket Reguler === <br>";
        echo "Tipe Audio: " . $this->tipeAudio . "<br>";
        echo "Lokasi Baris: " . $this->lokasiBaris . "<br>";
        echo "Total Harga: Rp " . $this->hitungTotalHarga() . "<br><br>";
    }
}
?>