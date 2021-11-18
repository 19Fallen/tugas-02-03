<?php

for ($no = 1; $no <= 100; $no++) {
    if ($no % 1 == 0) {
        echo "Perulangan ke= $no <br>";
    }
}
$data = array();
for ($i = 0; $i <= 100; $i++) {
    array_push($data, rand(1, 100));
}
echo "Nilai Genap Dari Data Array  ";
foreach ($data as $key => $value) {
    if ($value % 2 == 0) {
        echo $value . ", ";
    };
};
