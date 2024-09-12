<?php
$mang_so = [];
for ($i = 0; $i < 10; $i++) {
    $mang_so[] = rand(1, 100);
}
echo "Mảng số: ";
print_r($mang_so);
$tong_so_chan = 0;
foreach ($mang_so as $so) {
    if ($so % 2 == 0) {
        $tong_so_chan += $so;
    }
}

echo "<br>Tổng các số chẵn: $tong_so_chan";
?>