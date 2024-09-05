<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <?php
    // Mendefinisikan variabel dengan nilai tertentu
    $a = 10;
    $b = 20;
    $c = 5;
    $d = 2;
    $e = 3;

    // Menghitung hasil dari formula ((a+b)/(c*d))-e
    $result = (($a + $b) / ($c * $d)) - $e;
    ?>

    <h2>Nilai Variabel:</h2>
    <p>a = <?php echo $a; ?></p>
    <p>b = <?php echo $b; ?></p>
    <p>c = <?php echo $c; ?></p>
    <p>d = <?php echo $d; ?></p>
    <p>e = <?php echo $e; ?></p>

    <h2>Hasil Perhitungan:</h2>
    <p>((a + b) / (c * d)) - e = <?php echo $result; ?></p>
</body>
</html>

