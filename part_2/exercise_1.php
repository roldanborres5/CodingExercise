<?php  include('../header.php'); ?>
<title>Part 2 - Exercise 1</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <ul class="list-group">
            <li class="list-group-item fw-bold">1. Generate a random character from a - k</li>
            <li class="list-group-item">- Create a 4 x 5 table</li>
            <li class="list-group-item">- Display all the random characters inside the table</li>
            <li class="list-group-item">- Highlight all the character that belongs to the even column</li>
        </ul>
        <?php
            $letters = range('A', 'K');
            $rows = 4;
            $cols = 5;
            $totalCells = $rows * $cols;
            $randomLetters = [];

            // Create an array of random letters with repetitions
            for ($i = 0; $i < $totalCells; $i++) {
                $randomLetters[] = $letters[array_rand($letters)];
            }

            echo "<table>";
            $index = 0;
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $cols; $j++) {
                    $letter = $randomLetters[$index];
                    $letterIndex = array_search($letter, $letters);
                    $class = ($letterIndex % 2 == 0) ? "highlight" : "";
                    echo "<td class='$class'>$letter</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </div>
</body>