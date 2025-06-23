<?php
require_once 'classes/Dikdortgen.php';
require_once 'classes/Kare.php';
require_once 'classes/Ucgen.php';

$kare = new Kare(5);
$dikdortgen = new Dikdortgen(6, 3);
$ucgen = new Ucgen(3, 4, 5, 4);

echo "<h3>Kare</h3>";
echo "Alan: " . $kare->alan() . "<br>";
echo "Çevre: " . $kare->cevre() . "<br><br>";

echo "<h3>Dikdörtgen</h3>";
echo "Alan: " . $dikdortgen->alan() . "<br>";
echo "Çevre: " . $dikdortgen->cevre() . "<br><br>";

echo "<h3>Üçgen</h3>";
echo "Alan: " . $ucgen->alan() . "<br>";
echo "Çevre: " . $ucgen->cevre() . "<br><br>";
<?php
