<?php
$mau_sac = [
    "red" => "Màu đỏ",
    "blue" => "Màu xanh",
    "green" => "Màu xanh lá"
];

echo "<table>";
foreach ($mau_sac as $key => $value) {
    echo "<tr style='background-color:$key'><td>$value</td></tr>";
}
echo "</table>";
?>