<?php  include('../header.php'); ?>
<title>Part 2 - Exercise    3 </title>
<link rel="stylesheet" href="../style.css">
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <ul class="list-group">
            <li class="list-group-item fw-bold">3. Create a stack of integers using arrays( First in last out )</li>
            <li class="list-group-item">- Create input fields and push a button to insert a new value</li>
            <li class="list-group-item">- Create a pop button to remove the top value</li>
            <li class="list-group-item">- Always display the existing stack content</li>
            <li class="list-group-item">- Do not use pre-defined PHP array functions like array_pop</li>
        </ul>
        <?php
            session_start();
            if (!isset($_SESSION['stack'])) {
                $_SESSION['stack'] = [];
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['push'])) {
                    $value = intval($_POST['value']);
                    // Push the value onto the stack without using array_push
                    $_SESSION['stack'][] = $value;
                } elseif (isset($_POST['pop'])) {
                    // Pop the value from the stack without using array_pop
                    $stackSize = count($_SESSION['stack']);
                    if ($stackSize > 0) {
                        $newStack = [];
                        for ($i = 0; $i < $stackSize - 1; $i++) {
                            $newStack[] = $_SESSION['stack'][$i];
                        }
                        $_SESSION['stack'] = $newStack;
                    }
                }
            }
            $stack = $_SESSION['stack'];
        ?>
        <h1>Stack Implementation</h1>
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
                    <th>Stack</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (array_reverse($stack) as $item) {
                    echo "<tr><td>$item</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>