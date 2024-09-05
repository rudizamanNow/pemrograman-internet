<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <?php
        $a = 6;
        $b = 1;
        $c = 2;
        $d = 2.5;
        $e = 4.0;
        $f = 5;
        $g = 3;

        // Penjumlahan
        echo "<h2>Penjumlahan dan Pengurangan :</h2>";
        echo "$a + $b = " . ($a + $b) . "<br>";
        echo "$a - $b = " . ($a - $b) . "<br>";

        // Perkalian
        echo "<h2>Perkalian :</h2>";
        echo "$a * $c = " . ($a * $c) . "<br>";
        echo "$a * $d = " . ($a * $d) . "<br>";

        // Pembagian
        echo "<h2>Pembagian :</h2>";
        echo "$a / $e = " . ($a / $e) . "<br>";
        echo "$a / " . number_format($e, 1) . " = " . ($a / $e) . "<br>";
        echo "$a % $f = " . ($a % $f) . "<br>";
        echo "$a % $e = " . ($a % $e) . "<br>";
        echo "$a % $g = " . ($a % $g) . "<br>";
    ?>
</body>
</html>
