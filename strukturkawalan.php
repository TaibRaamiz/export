<?php
// Mendapatkan markah pelajar dari URL atau formulir HTML
$markah_pelajar = isset($_GET['markah']) ? (int)$_GET['markah'] : 0;

if ($markah_pelajar >= 85 && $markah_pelajar <= 100) {
    $gred = 'A';
} elseif ($markah_pelajar >= 70 && $markah_pelajar < 85) {
    $gred = 'B';
} elseif ($markah_pelajar >= 55 && $markah_pelajar < 70) {
    $gred = 'C';
} elseif ($markah_pelajar >= 40 && $markah_pelajar < 55) {
    $gred = 'D';
} else {
    $gred = 'Gred tidak sah';
}

// Memaparkan gred
echo "Gred yang diperolehi: $gred\n";
?>
