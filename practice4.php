<?php

$number = isset($_GET['number']) ? intval($_GET['number']) : 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Practice 4: PHP Multiplication Table</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        table { border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 5px; text-align: center; }
    </style>
</head>
<body>
    <h1>PHP Multiplication Table</h1>
    <form method="get" action="practice4.php">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" value="<?php echo ($number > 0 ? $number : ''); ?>" required>
        <button type="submit">Generate Table</button>
    </form>
    <?php
    if ($number > 0) {
        echo "<h2>Multiplication Table from 1 to $number</h2>";
        echo "<table>";
        
        echo "<tr><th>*</th>";
        for ($j = 1; $j <= $number; $j++) {
            echo "<th>$j</th>";
        }
        echo "</tr>";
        
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
    <p><a href="index.html">Back to Index</a></p>
</body>
</html>
