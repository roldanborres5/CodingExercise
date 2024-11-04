<?php  include('../header.php'); ?>
<title>Part 2 - Exercise 4</title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <ul class="list-group">
            <li class="list-group-item fw-bold">4. Create a queue of integers using arrays (first in first out )</li>
            <li class="list-group-item">- Create input fields and push a button to insert a new value</li>
            <li class="list-group-item">- Create a pop button to remove the old value</li>
            <li class="list-group-item">- Always display the existing queue content</li>
            <li class="list-group-item">- Do not use pre-defined PHP array functions like array_pop</li>
        </ul>
        <?php
            session_start();
            if (!isset($_SESSION['queue'])) {
                $_SESSION['queue'] = [];
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['push'])) {
                    $value = intval($_POST['value']);
                    // Push the value onto the queue without using array_push
                    $_SESSION['queue'][] = $value;
                } elseif (isset($_POST['pop'])) {
                    // Pop the value from the queue without using array_pop
                    $queueSize = count($_SESSION['queue']);
                    if ($queueSize > 0) {
                        $newQueue = [];
                        for ($i = 1; $i < $queueSize; $i++) {
                            $newQueue[] = $_SESSION['queue'][$i];
                        }
                        $_SESSION['queue'] = $newQueue;
                    }
                }
            }
            $queue = $_SESSION['queue'];
        ?>
        <h1>Queue Implementation</h1>
        <form method="POST">
            <input type="number" class="form-control" name="value" placeholder="Enter a value">
            <div class="container d-flex justify-content-around mt-2">
                <button type="submit" class="btn border" name="push">Push</button>
                <button type="submit" class="btn border" name="pop">Pop</button>
            </div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Queue</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($queue as $item) {
                    echo "<tr><td>$item</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>