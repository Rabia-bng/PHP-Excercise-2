<?php

$str1 = "Hello";
$str2 = "World";
$combined = $str1 . " " . $str2;
$length = strlen($combined);


$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;


$browser = $_SERVER['HTTP_USER_AGENT'];


$filename = basename($_SERVER['PHP_SELF']);
$lastModified = date("F d Y H:i:s.", filemtime($filename));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ex1.php">Exercise 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ex3.php">Exercise 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2>Exercise 3</h2>

    
    <div class="card p-4 mb-4">
        <h4>User Form</h4>
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">Firstname</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Lastname</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            echo "<h3 class='mt-3'>Hello $firstname $lastname, You are welcome to my site.</h3>";
        }
        ?>
    </div>

   
    <h4>Sample Table</h4>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John</td>
                <td>Toronto</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mary</td>
                <td>Vancouver</td>
            </tr>
        </tbody>
    </table>

   
    <div class="mt-4">
        <h4>String Variables</h4>
        <?php
        echo "<p>Combined String: $combined</p>";
        echo "<p>Length of String: $length</p>";
        ?>
    </div>

   
    <div class="mt-4">
        <h4>Number Addition</h4>
        <?php
        echo "<p>The sum of $num1 + $num2 + $num3 = $sum</p>";
        ?>
    </div>

    
    <div class="mt-4">
        <h4>Browser Detection</h4>
        <?php
        echo "<p>You are using: $browser</p>";
        ?>
    </div>

</div>


<footer class="bg-dark text-white text-center p-3 mt-4">
    <?php
    echo "Last modified: " . $lastModified;
    ?>
</footer>

</body>
</html>