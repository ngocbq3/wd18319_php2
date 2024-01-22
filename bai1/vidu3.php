<?php
//Vòng lặp for
for ($i = 1; $i <= 5; $i++) {
    echo "<h3>$i. Xin chào</h3>";
}

//Vòng lặp while
$dem = 1;
while ($dem <= 5) {
    echo "<h4>$dem. Vòng lặp while</h4>";
    $dem++;
}
//Vòng lặp do .. while
$dem = 1;
do {
    echo "<h4>$dem. Vòng lặp do .. while</h4>";
    $dem++;
} while ($dem <= 5);

//vòng lặp foreach
include_once "vidu2.php";
foreach ($sinhvien as $index => $sv) {
    echo "Sinh viên thứ: " . ($index + 1);
    echo "<pre>";
    print_r($sv);
    echo "</pre>";
}
