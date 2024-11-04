<?php  include('../header.php'); ?>
<title>Part 2 - Exercise 5</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <img src="../assets/code.png" alt="" width="40%" style="margin-top: -40px;">
        <ul class="list-group mt-3">
            <li class="list-group-item fw-bold">6. Fix the code function to output the correct result. Explain your answer</li>
            <li class="list-group-item">Answer: There are error in swapping of the elements within the nested for loop. The value assignment is incorrect, which leads to a logical error</li>
            <li class="list-group-item">The correct of swapping logic by assigning the $child element to $temp and then swapping it with the next element.</li>
        </ul>
        <h5 class="mt-3">Example: </h5>
        <?php
            $numbers = [];
            for ($i = 0; $i < 10; $i++) {
                $numbers[] = rand(1, 100); 
            }
            echo "<p>Assume: '" . implode(", ", $numbers) . "'</p>";
            function bubbleSort($lists) {
                $length = count($lists);
                for ($parent = 0; $parent < $length; $parent++) {
                    for ($child = 0; $child < $length - $parent - 1; $child++) {
                        if ($lists[$child] > $lists[$child + 1]) {
                            // Correct swapping logic
                            $temp = $lists[$child];
                            $lists[$child] = $lists[$child + 1];
                            $lists[$child + 1] = $temp;
                        }
                    }
                }
                return $lists;
            }
            // Example usage
            $sortedNumbers = bubbleSort($numbers);
            print_r($sortedNumbers);
        ?>
    </div>

</body>


