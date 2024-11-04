<?php  include('../header.php'); ?>
<title>Part 1 - Exercise 2</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h4>2. Create the given pattern (x)</h4>
        <?php 
            $size = 9; 
            $position = 5; 

            for ($i = 0; $i < $size; $i++) {
                for ($j = 0; $j < $size; $j++) {
                    if ($i == $j || $i + $j == $size - 1) {
                        if ($i == ($size - 1) / 2 && $j == ($size - 1) / 2) {
                            echo "1 ";
                        } 
                        else if (($i == 0 && ($j == 0 || $j == $size - 1)) || ($i == $size - 1 && ($j == 0 || $j == $size - 1))) {
                            echo "$position ";
                        } 
                        else if (($i == 1 && ($j == 1 || $j == $size - 2)) || ($i == $size - 2 && ($j == 1 || $j == $size - 2))) {
                            echo "* ";
                        }
                        else if (($i == 2 && ($j == 2 || $j == $size - 3)) || ($i == $size - 3 && ($j == 2 || $j == $size - 3))) {
                            echo ($position - 2) . " ";
                        }
                        else {
                            echo "* ";
                        }
                    } else {
                        echo "&nbsp;&nbsp;";
                    }
                }
                echo "<br>";
            }
        ?>
    </div>
</body>
