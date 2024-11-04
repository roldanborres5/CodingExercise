<?php  include('../header.php'); ?>
<title>Part 1 - Exercise 1</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h4 >1. Create the given pattern</h4>
        <?php
            $height = 5;
            $numDiamonds = 2;
            function lowPart($height, $i){
                for ($j = $height; $j > $i; $j--) {
                    echo "&nbsp; &nbsp;";
                }
                echo "*";
                for ($j = 1; $j < 2 * ($i - 1); $j++) {
                    echo "&nbsp; &nbsp;";
                }
                if ($i != 1) {
                    echo "*";
                }
                echo "<br>";
            }
            for ($d = 0; $d < $numDiamonds; $d++) {
                // Upper part of the diamond
                for ($i = 1; $i <= $height; $i++) {
                    for ($j = $i; $j < $height; $j++) {
                        echo "&nbsp; &nbsp;";
                    }
                    echo "*";
                    for ($j = 1; $j < 2 * ($i - 1); $j++) {
                        echo "&nbsp; &nbsp;";
                    }
                    if ($i != 1) {
                        echo "*";
                    }
                    echo "<br>";
                }
                // Print the lower part except the last line if it's not the final diamond
                if ($d < $numDiamonds - 1) {
                    for ($i = $height - 1; $i > 1; $i--) {
                        echo lowPart($height, $i);
                    }
                }
            }
            // Print the last lower part
            for ($i = $height - 1; $i >= 1; $i--) {
                echo lowPart($height, $i);
            }
        ?>
    </div>
</body>
