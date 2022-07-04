
<?php 

$nilai = 'D';

switch ($nilai) {
    case 'A' :
        echo "Nilai A (90-100)";
        break;
    case 'B' :
        echo "Nilai B (80-90)";
        break;
    case 'C' :
        echo "Nilai C (70-80)";
        break;
    case 'D' :
        echo "Nilai D (0-70)";
    break;
    default:
        echo "Kamu Memasukan kode yang salah";
        break;
}
?>