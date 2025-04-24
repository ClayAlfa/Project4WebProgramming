<!DOCTYPE html>
<html>
<head>
    <title>Contoh PHP Loops</title>
</head>
<body>
    <h1>Contoh Loop di PHP</h1>

    <h2>1. While Loop</h2>
    <?php
    $counter = 1;
    while ($counter <= 5) {
        echo "While loop ke-$counter<br>";
        $counter++;
    }
    ?>

    <h2>2. Do...While Loop</h2>
    <?php
    $counter = 1;
    do {
        echo "Do...While loop ke-$counter<br>";
        $counter++;
    } while ($counter <= 5);
    ?>

    <h2>3. For Loop</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "For loop ke-$i<br>";
    }
    ?>

    <h2>4. Foreach Loop</h2>
    <?php
    $buah = ["Apel", "Jeruk", "Mangga", "Pisang"];
    foreach ($buah as $item) {
        echo "Nama buah: $item<br>";
    }
    ?>
</body>
</html>
