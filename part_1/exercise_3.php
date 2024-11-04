<?php  include('../header.php'); ?>
<title>Part 1 - Exercise 3</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <h4>3. Create the given pattern</h4>
        <?php 
            $size = 5; 
            function numberOfRows($rowNum, $count) {
                for ($i = 1; $i <= $rowNum; $i++) {
                    echo $i * $count . " ";
                }
                echo "<br>";
            }
            for ($i = 1; $i <= $size; $i++) {
                numberOfRows($i, $i);
            }
            for ($i = $size - 1; $i >= 1; $i--) {
                numberOfRows($i, $i);
            }
        ?> 
    </div>
</body>