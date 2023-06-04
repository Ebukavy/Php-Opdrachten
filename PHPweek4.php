<?php
// deel 1
for ($i = 0; $i <= 50; $i++) {
    echo $i . "<br />";
}

// deel 2
$klasgenoten = [
    "Naam 1",
    "Naam 2",
    "Naam 3",
    "Naam 4",
    "Naam 5",
    "Naam 6",
    "Naam 7",
    "Naam 8",
    "Naam 9",
    "Naam 10"
];

foreach ($klasgenoten as $naam) {
    echo $naam . "<br />";
}

// deel 3
$maanden = [
    'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni',
    'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'
];

for ($i = 0; $i < count($maanden); $i++) {
    echo 'Maand ' . ($i + 1) . ' is ' . $maanden[$i] . '.<br />';
}

// deel 4
$maanden = [
    'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni',
    'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'
];

foreach ($maanden as $index => $maand) {
    echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />';
}
?>