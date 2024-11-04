<?php  include('../header.php'); ?>
<title>Part 2 - Exercise 5</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <ul class="list-group">
            <li class="list-group-item fw-bold">5. Using a PHP POST method, ask the user to input 2 numbers</li>
            <li class="list-group-item">- Create a Grid using 2 inputs as the length and width.</li>
            <li class="list-group-item">- Insert random CONSONANT letters into the grid</li>
            <li class="list-group-item">- Display the grid in table</li>
            <li class="list-group-item">- Do not use pre-defined PHP array functions like array_pop</li>
        </ul>
        <form method="POST" class="d-flex justify-content-around border rounded-2 mt-2 p-3">
            <div class="me-3">
                <label for="length">Enter Length:</label>
                <input type="number" class="form-control" id="length" name="length" required>
            </div>
            <div class="me-3">
                <label for="width">Enter Width:</label>
                <input type="number" class="form-control" id="width" name="width" required>
            </div>
            <div>
                <button type="submit" class="btn border mt-4">Generate Grid</button>
            </div>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $length = intval($_POST["length"]);
                $width = intval($_POST["width"]);
                $consonants = str_split('BCDFGHJKLMNPQRSTVWXYZ');

                echo "<table>";
                for ($i = 0; $i < $length; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $width; $j++) {
                        $randomConsonant = $consonants[array_rand($consonants)];
                        echo "<td>$randomConsonant</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </div>

</body>
</html>

