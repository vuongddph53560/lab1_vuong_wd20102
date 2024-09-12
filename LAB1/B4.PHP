<?php
function kiem_tra_tuoi_nvqs($ho_ten, $nam_sinh, $gioi_tinh) {
    $nam_hien_tai = date("Y");
    $tuoi = $nam_hien_tai - $nam_sinh;

    if ($tuoi >= 18 && $tuoi <= 27 && $gioi_tinh == 1) {
        return "$ho_ten có đủ tuổi đi nghĩa vụ quân sự";
    } else {
        return "$ho_ten không đủ tuổi đi nghĩa vụ quân sự";
    }
}

echo kiem_tra_tuoi_nvqs("Nguyễn Văn A", 2000, 1);
?>