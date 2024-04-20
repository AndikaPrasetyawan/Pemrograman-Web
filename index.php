<?php
$biodata = [
    "nama" => "noven",
    "pekerjaan" => "progamer",
    "pendidikan" => "S1",
    "umur"  => "18",
    "nilai" => "a",
    "hobi" => [
        "tidur", "rebahan", "duduk"
    ]
];
foreach ($biodata as $key => $value) {
    if ($key == "hobi") {
        echo "hobi:" . PHP_EOL;
        $a = 1;
        foreach ($value as $hobi) {
            echo $a . ". " . $hobi . PHP_EOL;
            $a++;
        }
    } else {
        echo $key . ':' . $value . PHP_EOL;
}}
foreach ($biodata['nilai'] as $k => $v) {
    $s = "semester " . ($k + 1);
    echo "nilai {$s} : {$v} \n";

    switch ($v) {
        case 'A':
            echo "Predikat {$s} : Sangat Baik \n";
            break;
        case 'B':
            echo "Predikat {$s} : Baik \n";
            break;
        case 'C':
            echo "Predikat {$s} : Cukup \n";
            break;
        case 'D':
            echo "Predikat {$s} : Kurang \n";
            break;
        default:
            echo "Predikat {$s} : - \n";
            break;
    }
}
