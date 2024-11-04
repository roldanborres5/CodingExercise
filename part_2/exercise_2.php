<?php  include('../header.php'); ?>
<title>Part 2 - Exercise 1</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <ul class="list-group mt-5">
            <li class="list-group-item fw-bold">2. Manipulation of multidimensional array</li>
            <li class="list-group-item">- Create a 4x4 table</li>
            <li class="list-group-item">- Generate a random number from 1 - 100</li>
            <li class="list-group-item">- The number generated should always be unique</li>
            <li class="list-group-item">- Sum up the number per column and row</li>
        </ul>
        <?php
            $size = 4;
            $numbers = range(1, 100);
            shuffle($numbers);
            $matrix = array_chunk(array_slice($numbers, 0, $size * $size), $size); // Create a 4x4 matrix with unique numbers

            // Initialize sums
            $rowSums = array();
            $colSums = array_fill(0, $size, 0);
            $totalSum = 0;

            // Generate the table with sums
            echo "<table id='table'>";
            for ($i = 0; $i < $size; $i++) {
                echo "<tr>";
                $rowSums[$i] = 0;
                for ($j = 0; $j < $size; $j++) {
                    echo "<td>" . $matrix[$i][$j] . "</td>";
                    $rowSums[$i] += $matrix[$i][$j];
                    $colSums[$j] += $matrix[$i][$j];
                }
                echo "<td><strong>" . $rowSums[$i] . "</strong></td>"; // Add row sum
                echo "</tr>";
            }

            // Add column sums
            echo "<tr>";
            for ($j = 0; $j < $size; $j++) {
                echo "<td><strong>" . $colSums[$j] . "</strong></td>";
                $totalSum += $colSums[$j];
            }
            echo "<td><strong>" . $totalSum . "</strong></td>"; // Add total sum
            echo "</tr>";

            echo "</table>";
        ?>
    </div>

</body>