<?php  include('../header.php'); ?>
<title>Part 1 - Exercise 4</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h4>4.Create the given pattern</h4>
        <?php 
            $rows = 6;
            $cols = 5;

            // Function to calculate the value based on the given pattern
            function calculate($row, $col) {
                $value = $row;
                for ($i = 1; $i <= $col; $i++) {
                    $value *= $i;
                }
                return $value;
            }
            // Loop to generate the pattern
            for ($i = 1; $i <= $rows; $i++) {
                for ($j = 1; $j <= $cols; $j++) {
                    echo calculate($i, $j) . "&nbsp;&nbsp;";
                    echo "";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>