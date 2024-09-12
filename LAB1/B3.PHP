<?php
function giai_phuong_trinh_bac_2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình có vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Phương trình có nghiệm duy nhất: x = " . (-$c / $b);
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            return "Phương trình có nghiệm kép: x1 = x2 = " . (-$b / (2 * $a));
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = $x1, x2 = $x2";
        }
    }
}

echo giai_phuong_trinh_bac_2(1, -5, 6);
?>