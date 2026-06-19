<?php
require_once "TiketReguler.php";
require_once "TiketIMAX.php";
require_once "TiketVelvet.php";

$tiket1 = new TiketReguler(2, 50000, "Dolby Atmos", "Baris A");
$tiket2 = new TiketIMAX(3, 50000, true, true);
$tiket3 = new TiketVelvet(2, 50000, true, true);

$tiket1->tampilkanInfo();
$tiket2->tampilkanInfo();
$tiket3->tampilkanInfo();

?>