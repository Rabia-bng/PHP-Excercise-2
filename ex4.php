<?php

$currentMonth = date("F");


$myarray = array("HTML", "CSS", "PHP", "JavaScript");
?>

<div class="container mt-4">

    <h2>Exercise 4</h2>


    <div class="card p-4 mb-4">
        <h4>Voting Eligibility</h4>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>

            <button type="submit" name="check_vote" class="btn btn-primary">
                Check Eligibility
            </button>
        </form>

        <?php
        if (isset($_POST['check_vote'])) {
            $name = htmlspecialchars($_POST['name']);
            $age = (int)$_POST['age'];

            if ($age >= 18) {
                echo "<p class='mt-3 text-success'>$name, you are eligible to vote.</p>";
            } else {
                echo "<p class='mt-3 text-danger'>$name, you are not eligible to vote.</p>";
            }
        }
        ?>
    </div>


    <div class="card p-4 mb-4">
        <h4>Current Month Check</h4>

        <?php
        switch ($currentMonth) {
            case "August":
                echo "<p>It's August, so it's still holiday.</p>";
                break;
            default:
                echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
        }
        ?>
    </div>

   
        <h4>Multiplication Table</h4>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter a number</label>
                <input type="number" name="number" class="form-control" required>
            </div>

            <button type="submit" name="multiply" class="btn btn-primary">
                Generate Table
            </button>
        </form>

        <?php
        if (isset($_POST['multiply'])) {
            $n = (int)$_POST['number'];

            echo "<div class='mt-3'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "$n x $i = " . ($n * $i) . "<br>";
            }
            echo "</div>";
        }
        ?>
    </div>

    
    <div class="card p-4 mb-4">
        <h4>Numbers from 1 to n</h4>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Enter a number</label>
                <input type="number" name="limit" class="form-control" required>
            </div>

            <button type="submit" name="print_numbers" class="btn btn-primary">
                Print Numbers
            </button>
        </form>

        <?php
        if (isset($_POST['print_numbers'])) {
            $limit = (int)$_POST['limit'];
            $i = 1;

            echo "<div class='mt-3'>";
            while ($i <= $limit) {
                echo "$i ";
                $i++;
            }
            echo "</div>";
        }
        ?>
    </div>

    
    <div class="card p-4 mb-4">
        <h4>Foreach Loop (Array Elements)</h4>

        <?php
        foreach ($myarray as $value) {
            echo "<p>$value</p>";
        }
        ?>
    </div>

</div>